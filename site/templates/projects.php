<?php snippet('header') ?>
  <main>
    <div class="container">
      <h1 class="title"><?= $page->title() ?></h1>
      <ul class="projects">
        <?php foreach ($page->children()->listed() as $project): ?>
          <li class="menu__item">
            <a class="menu__link" href="<?= $project->url() ?>">
              <figure>
                <?= $project->image()->crop(300) ?>
                <figcaption><?= $project->title() ?></figcaption>
              </figure>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </main>
<?php snippet('footer') ?>