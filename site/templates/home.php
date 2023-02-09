<?php snippet('header') ?>
  <main>
    <div class="container">
      <h1 class="title"><?= $page->title() ?></h1>
      <p class="text"><?= $page->text() ?></p>
      <?php snippet('projects', [
        'projects' => collection('projects')->shuffle()->limit(3)
      ]) ?>
    </div>
  </main>
<?php snippet('footer') ?>