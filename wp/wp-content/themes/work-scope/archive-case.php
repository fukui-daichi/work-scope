<?php

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Archive\Case\CaseArchiveService;

$page_config = CaseArchiveService::get_page_config();
$case_list = CaseArchiveService::get_case_list();
$case_categories = CaseArchiveService::get_case_categories();
$has_param_category = !empty(Utils::get_query_param("category"));


Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="archive-case-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="archive-case">
    <div class="inner">
      <ul class="module-category-list">
        <li>
          <a
            href="/case"
            class="<?php echo !$has_param_category ? 'current' : ''; ?>"
            hx-get="/case"
            hx-swap="outerHTML transition:true"
            hx-push-url="true"
            hx-target="[data-hx-target]"
            hx-select="[data-hx-target]">すべての記事</a>
        </li>
        <?php foreach ($case_categories as $category) { ?>
          <li>
            <a
              href="/case?category=<?php echo $category['slug']; ?>"
              class="<?php echo $category['is_current'] ? 'current' : ''; ?>"
              hx-get="/case?category=<?php echo $category['slug']; ?>"
              hx-swap="outerHTML transition:true"
              hx-push-url="true"
              hx-target="[data-hx-target]"
              hx-select="[data-hx-target]">
              <?php echo $category['name']; ?>
            </a>
          </li>
        <?php } ?>
      </ul>

      <?php if (!empty($case_list)) { ?>
        <ul class="module-card-list">
          <?php foreach ($case_list as $case) { ?>
            <li>
              <a
                href="<?php echo $case['permalink']; ?>"
                hx-get="<?php echo $case['permalink']; ?>"
                hx-swap="outerHTML transition:true"
                hx-push-url="true"
                hx-target="[data-hx-target]"
                hx-select="[data-hx-target]">
                <figure>
                  <img src="<?php echo $case['thumbnail']['url']; ?>" alt="<?php echo $case['thumbnail']['alt']; ?>" width="<?php echo $case['thumbnail']['width']; ?>" height="<?php echo $case['thumbnail']['height']; ?>" decoding="async">
                </figure>
                <dl>
                  <dt>
                    <span class="category"><?php echo $case['category']; ?></span>
                    <time datetime="<?php echo $case['date_iso']; ?>"><?php echo $case['date_display']; ?></time>
                  </dt>
                  <dd><?php echo $case['title']; ?></dd>
                </dl>
              </a>
            </li>
          <?php } ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      <?php } else { ?>
        <p class="is-empty">現在、実績紹介はありません。</p>
      <?php } ?>
    </div>
  </section>
</main>

<?php
// Utils::get_component('contact-induction');
Utils::get_component('footer');
?>