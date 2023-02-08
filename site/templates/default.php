<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>
  <?= css('assets/css/index.css') ?>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>
        <nav class="nav">
          <ul class="menu">
            <?php foreach ($site->children()->listed() as $item): ?>
              <li class="menu__item"><a class="menu__link" href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <h1 class="title"><?= $page->title() ?></h1>
      <p class="text"><?= $page->text() ?></p>
    </div>
  </main>
  <footer class="footer">
    <div class="container">
      <a href="https://t.me/<?= $site->telegram() ?>">Write to us</a>
    </div>
  </footer>
</body>
</html>