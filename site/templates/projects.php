<?php snippet('header') ?>
  <main>
    <div class="container">
      <h1 class="title"><?= $page->title() ?></h1>
      <nav class="filter">
        <a class="filter__item" href="<?= $page->url() ?>">All</a>
        <?php foreach ($filters as $filter): ?>
          <a class="filter__item" href="<?= $page->url() ?>?filter=<?= $filter ?>"><?= $filter ?></a>
        <?php endforeach ?>
      </nav>
      <?php snippet('projects') ?>
      <?php snippet('pagination') ?>
    </div>
  </main>
<?php snippet('footer') ?>