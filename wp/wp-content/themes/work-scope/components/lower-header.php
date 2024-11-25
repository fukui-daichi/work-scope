<header class="lower-header">
  <div class="inner">
    <hgroup>
      <h1 translate="no" aria-hidden="true"><?= $title_en ?? ''; ?></h1>
      <p><?= $title ?? ''; ?></p>
    </hgroup>
  </div>
  <?php if (!empty($page_path)) { ?>
    <div class="module-image-block">
      <div class="inner">
        <figure>
          <img src="/assets/images/<?= $page_path ?? 'common'; ?>/image-block/img01.jpg" alt="" width="1080" height="720" decoding="async">
        </figure>
      </div>
    </div>
  <?php } ?>
</header>