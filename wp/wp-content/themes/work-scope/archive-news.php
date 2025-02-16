<?php

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Archive\News\NewsArchiveService;

$page_config = NewsArchiveService::get_page_config();
$news_list = NewsArchiveService::get_news_list();
$news_categories = NewsArchiveService::get_news_categories();
$has_param_category = !empty(Utils::get_query_param("category"));

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="archive-news-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section id="hx-show" class="archive-news">
    <div class="inner">
      <ul class="module-category-list">
        <li>
          <a
            href="/news"
            class="<?php echo !$has_param_category ? 'current' : ''; ?>"
            hx-get="/news"
            hx-swap="outerHTML transition:true show:#hx-show:top"
            hx-push-url="true"
            hx-target="[data-hx-target]"
            hx-select="[data-hx-target]">すべての記事</a>
        </li>
        <?php foreach ($news_categories as $category) { ?>
          <li>
            <a
              href="/news?category=<?php echo $category['slug']; ?>"
              class="<?php echo $category['is_current'] ? 'current' : ''; ?>"
              hx-get="/news?category=<?php echo $category['slug']; ?>"
              hx-swap="outerHTML transition:true show:#hx-show:top"
              hx-push-url="true"
              hx-target="[data-hx-target]"
              hx-select="[data-hx-target]">
              <?php echo $category['name']; ?>
            </a>
          </li>
        <?php } ?>
      </ul>

      <?php if (!empty($news_list)) { ?>
        <ul class="news-list">
          <?php foreach ($news_list as $news) { ?>
            <li>
              <a
                href="<?php echo $news['permalink']; ?>"
                hx-get="<?php echo $news['permalink']; ?>"
                hx-swap="outerHTML transition:true show:window:top"
                hx-push-url="true"
                hx-target="[data-hx-target]"
                hx-select="[data-hx-target]">
                <dl>
                  <dt>
                    <span class="category"><?php echo $news['category']; ?></span>
                    <time datetime="<?php echo $news['date_iso']; ?>"><?php echo $news['date_display']; ?></time>
                  </dt>
                  <dd>
                    <p><?php echo $news['title']; ?></p>
                  </dd>
                </dl>
              </a>
            </li>
          <?php } ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      <?php } else { ?>
        <p class="is-empty">現在、記事の投稿はありません。</p>
      <?php } ?>
    </div>
  </section>
</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>