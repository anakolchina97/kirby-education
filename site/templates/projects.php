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
      <?php snippet('pagination') ?>
    </div>
  </main>
<?php snippet('footer') ?>