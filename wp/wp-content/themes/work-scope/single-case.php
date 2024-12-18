<?php

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Single\Case\CaseSingleService;

$page_config = CaseSingleService::get_page_config();
$case_data = CaseSingleService::get_case_data();

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="single-case-page" data-hx-target>
  <section class="single-case">
    <div class="inner">
      <article class="module-article-card">
        <hgroup>
          <p>
            <span class="category"><?php echo $case_data['category'] ?></span>
            <time datetime="<?php echo $case_data['date_iso']; ?>"><?php echo $case_data['date_display']; ?></time>
          </p>
          <h1><?php echo $case_data['title'] ?></h1>
        </hgroup>

        <hr>

        <?php if (!empty($case_data['thumbnail'])) { ?>
          <figure class="thumbnail">
            <img src="<?php echo $case_data['thumbnail']['url']; ?>"
              alt="<?php echo $case_data['thumbnail']['alt']; ?>"
              width="<?php echo $case_data['thumbnail']['width']; ?>"
              height="<?php echo $case_data['thumbnail']['height']; ?>"
              decoding="async">
          </figure>
        <?php } ?>

        <?php if (!empty($case_data['main_contents'])) { ?>
          <div class="main-contents">
            <?php foreach ($case_data['main_contents'] as $content) { ?>

              <?php if ($content['type'] === 'head2_block') { ?>
                <div class="head2-block has-margin-<?php echo $content['margin_block']; ?>">
                  <h2><?php echo $content['head']; ?></h2>
                  <p><?php echo $content['text']; ?></p>
                </div>
              <?php } ?>

              <?php if ($content['type'] === 'head3_block') { ?>
                <div class="head3-block has-margin-<?php echo $content['margin_block']; ?>">
                  <h3><?php echo $content['head']; ?></h3>
                  <p><?php echo $content['text']; ?></p>
                </div>
              <?php } ?>

              <?php if ($content['type'] === 'unordered_list') { ?>
                <ul class="unordered-list has-margin-<?php echo $content['margin_block']; ?>">
                  <?php foreach ($content['items'] as $item) { ?>
                    <li><?php echo $item; ?></li>
                  <?php } ?>
                </ul>
              <?php } ?>

              <?php if ($content['type'] === 'ordered_list') { ?>
                <ol class="ordered-list has-margin-<?php echo $content['margin_block']; ?>">
                  <?php foreach ($content['items'] as $item) { ?>
                    <li><?php echo $item; ?></li>
                  <?php } ?>
                </ol>
              <?php } ?>
            <?php } ?>
          </div>
        <?php } ?>
      </article>

      <a href="/case" class="module-primary-button" hx-get="/case" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <span class="icon"></span>
        <span class="text">実績紹介一覧に戻る</span>
      </a>
    </div>
  </section>
</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>