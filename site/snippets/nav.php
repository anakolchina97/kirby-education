<nav class="nav">
  <ul class="menu">
    <?php foreach ($site->children()->listed() as $item): ?>
      <li class="menu__item"><a class="menu__link" href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>