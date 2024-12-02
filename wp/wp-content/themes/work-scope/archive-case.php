<?php

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Archive\Case\CaseArchiveService;

$page_config = CaseArchiveService::get_page_config();
$case_list = CaseArchiveService::get_case_list();
$case_categories = CaseArchiveService::get_case_categories();
$has_param_category = !empty(Utils::get_query_param("category"));
$total_posts = CaseArchiveService::get_total_posts();
$current_count = count($case_list);

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
        <ul class="module-card-list" id="case-list">
          <?php Utils::get_component('case/card-list-items', ['case_list' => $case_list]); ?>
        </ul>
        <?php if ($current_count < $total_posts) { ?>
          <button
            class="load-more"
            hx-get="<?php echo get_template_directory_uri(); ?>/inc/service/archive/case/LoadMoreCases.php?page=2<?php echo $has_param_category ? '&category=' . Utils::get_query_param("category") : ''; ?>"
            hx-trigger="intersect once"
            hx-swap="beforeend"
            hx-target="#case-list"
            data-page="2"
            data-total-posts="<?php echo $total_posts; ?>"
            data-posts-per-page="<?php echo CaseArchiveService::POSTS_PER_PAGE; ?>"
            data-template-url="<?php echo get_template_directory_uri(); ?>"
            data-category="<?php echo Utils::get_query_param('category'); ?>">
          </button>
        <?php } ?>
        <?php wp_reset_postdata(); ?>
      <?php } else { ?>
        <p class=" is-empty">現在、実績紹介はありません。</p>
      <?php } ?>
    </div>
  </section>
</main>

<?php
// Utils::get_component('contact-induction');
Utils::get_component('footer');
?>