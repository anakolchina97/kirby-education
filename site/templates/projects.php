<?php snippet('header') ?>
<?php
  $filterBy = get('filter');

  $unfiltered = $page->children()->listed();
  $projects = $unfiltered->when($filterBy, function($filterBy) {
    return $this->filterBy('category', $filterBy);
  })->paginate(1);
  $pagination = $projects->pagination();
  $filters = $unfiltered->pluck('category', null, true)
?>
  <main>
    <div class="container">
      <h1 class="title"><?= $page->title() ?></h1>

      <nav class="filter">
        <a class="filter__item" href="<?= $page->url() ?>">All</a>
        <?php foreach ($filters as $filter): ?>
          <a class="filter__item" href="<?= $page->url() ?>?filter=<?= $filter ?>"><?= $filter ?></a>
        <?php endforeach ?>
      </nav>

      <ul class="projects">
        <?php foreach ($projects as $project): ?>
          <li class="menu__item">
            <a class="menu__link" href="<?= $project->url() ?>">
              <figure>
                <?= $project->image()->crop(300) ?>
                <figcaption>
                  <?= $project->title() ?><br>
                  <small><?= $project->category() ?></small>
                </figcaption>
              </figure>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      <?php if ($pagination->hasPages()): ?>
        <nav class="controls">
          <?php if ($pagination->hasPrevPage()): ?>
            <a href="<?= $pagination->prevPageUrl() ?>" aria-label="Go to previous page">&larr;</a>
          <?php else: ?>
            <span class="controls-disabled">&larr;</span>
          <?php endif ?>

          <span>Page <?= $pagination->page() ?> of <?= $pagination->total() ?> </span>

          <?php if ($pagination->hasNextPage()): ?>
            <a href="<?= $pagination->nextPageUrl() ?>" aria-label="Go to next page">&rarr;</a>
          <?php else: ?>
            <span class="controls-disabled">&rarr;</span>
          <?php endif ?>
        </nav>
      <?php endif ?>
    </div>
  </main>
<?php snippet('footer') ?>