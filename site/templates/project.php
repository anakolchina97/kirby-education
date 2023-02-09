<?php snippet('header') ?>
  <main>
    <div class="container">
      <article>
        <div class="project-layout">
          <div class="project-info">
            <h1 class="title"><?= $page->title() ?></h1>
            <p class="project-info-text"><?= $page->text() ?></p>
            <p class="project-info-year"><?= $page->year() ?> y.</p>
            <dl>
              <?php if ($page->client()->isNotEmpty()): ?>
                <dt>Client:</dt>
                <dd><?= $page->client() ?></dd>
              <?php endif ?>
              <?php if ($page->category()->isNotEmpty()): ?>
                <dt>Category:</dt>
                <dd><?= $page->category() ?></dd>
              <?php endif ?>
              <?php if ($page->link()->isNotEmpty()): ?>
                <dt>Link:</dt>
                <dd><?= $page->link() ?></dd>
              <?php endif ?>
            </dl>
          </div>
          <div class="project-gallery">
            <ul>
              <?php foreach ($page->images() as $image): ?>
                <li>
                  <figure>
                    <a href="<?= $image->url() ?>">
                      <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />
                    </a>
                    <figcaption><?= $image->caption() ?></figcaption>
                  </figure>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </article>
    </div>
  </main>
<?php snippet('footer') ?>