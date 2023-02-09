<?php if ($pagination->hasPages()): ?>
  <nav class="controls">
    <?php if ($pagination->hasPrevPage()): ?>
      <a href="<?= $pagination->prevPageUrl() ?>" aria-label="Go to previous page">&larr;</a>
    <?php else: ?>
      <span class="controls-disabled">&larr;</span>
    <?php endif ?>

    <span>Page <?= $pagination->page() ?> of <?= $pagination->total() / $pagination->limit(2) ?> </span>

    <?php if ($pagination->hasNextPage()): ?>
      <a href="<?= $pagination->nextPageUrl() ?>" aria-label="Go to next page">&rarr;</a>
    <?php else: ?>
      <span class="controls-disabled">&rarr;</span>
    <?php endif ?>
  </nav>
<?php endif ?>