<?php
return function ($page) {
  $filterBy = get('filter');
  $unfiltered = $page->children()->listed();
  $projects = $unfiltered->when($filterBy, function($filterBy) {
    return $this->filterBy('category', $filterBy);
  })->paginate(1);
  $pagination = $projects->pagination();
  $filters = $unfiltered->pluck('category', null, true);

  return [
    'filterBy' => $filterBy,
    'unfiltered' => $unfiltered,
    'projects' => $projects,
    'pagination' => $pagination,
    'filters' => $filters
  ];
};
