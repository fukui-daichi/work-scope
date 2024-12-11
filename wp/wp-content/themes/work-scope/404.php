<?php

use WorkScope\Inc\Utils;

$page_config = [
  "title" => "ページが見つかりません",
  "title_en" => "404 Not Found",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="not-found-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="not-found">
    <div class="inner">
      <h2>
        申し訳ございません。<br class="sp">お探しのページは移動または削除された可能性があります。<br>
        以下のボタンからトップページに戻ることができます。
      </h2>
      <a href="/" class="module-base-button" hx-get="/" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <span class="icon"></span>
        <span class="text">トップページに戻る</span>
      </a>
    </div>
  </section>
</main>

<?php Utils::get_component('footer'); ?>