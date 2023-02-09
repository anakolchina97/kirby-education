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