<?php

use Fineasset\Inc\Utils\Utils;

$page_config = [
  "class" => "not-found",
  "title" => "ページが見つかりません",
  "title_en" => "404 Not Found",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main>
  <?php Utils::get_component('lower-header', $page_config); ?>
  <div class="content-wrapper">
    <p class="message">
      申し訳ございません。<br class="sp">お探しのページは移動または削除された可能性があります。<br>
      以下のボタンからトップページに戻ることができます。
    </p>
    <a href="/" class="mod-base-button">トップページに戻る</a>
  </div>
</main>

<?php Utils::get_component('footer'); ?>