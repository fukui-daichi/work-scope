<?php

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Single\News\NewsSingleService;

$page_config = NewsSingleService::get_page_config();
$news_data = NewsSingleService::get_news_data();

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="single-news-page" data-hx-target>
  <section class="single-news">
    <div class="inner">
      <article class="module-article-card">
        <hgroup>
          <p>
            <span class="category"><?php echo $news_data['category'] ?></span>
            <time datetime="<?php echo $news_data['date_iso']; ?>"><?php echo $news_data['date_display']; ?></time>
          </p>
          <h1><?php echo $news_data['title'] ?></h1>
        </hgroup>
        <hr>
        <div class="body-text"><?php echo $news_data['body_text'] ?></div>
      </article>
      <a href="/news" class="module-primary-button" hx-get="/news" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <span class="icon"></span>
        <span class="text">お知らせ一覧に戻る</span>
      </a>
    </div>
  </section>
</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>