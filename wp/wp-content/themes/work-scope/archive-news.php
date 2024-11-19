<?php

use WorkScope\Inc\Utils\Utils;

$page_config = [
  "title" => "お知らせ",
  "title_en" => "NEWS",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="archive-news-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="archive-news">
    <div class="inner">
      <ul class="category-list">
        <li>
          <a href="" class="current">すべての記事</a>
        </li>
        <li>
          <a href="">イベント</a>
        </li>
        <li>
          <a href="">メディア</a>
        </li>
        <li>
          <a href="">お知らせ</a>
        </li>
      </ul>

      <ul class="news-list">
        <li>
          <a href="">
            <dl>
              <dt>
                <span class="category">お知らせ</span>
                <time datetime="2023-11-05">2023.11.5</time>
              </dt>
              <dd>
                <p>コーポレートサイトをオープンしました。</p>
              </dd>
            </dl>
          </a>
        </li>
        <li>
          <a href="">
            <dl>
              <dt>
                <span class="category">お知らせお知らせ</span>
                <time datetime="2023-11-05">2023.11.5</time>
              </dt>
              <dd>
                <p>コーポレートサイトをオープンしました。</p>
              </dd>
            </dl>
          </a>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>