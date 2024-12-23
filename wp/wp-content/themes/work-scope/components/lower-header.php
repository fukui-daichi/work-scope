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
          <picture>
            <source srcset="/assets/images/<?= $page_path ?? 'common'; ?>/image-block/sp/img01.jpg" media="(max-width: 768px)" width="722" height="552" />
            <img src="/assets/images/<?= $page_path ?? 'common'; ?>/image-block/img01.jpg" alt="" width="1805" height="650" decoding="async">
          </picture>
        </figure>
      </div>
    </div>
  <?php } ?>
</header>