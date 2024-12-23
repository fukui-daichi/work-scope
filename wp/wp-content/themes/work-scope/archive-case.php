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

  <section id="hx-show" class="archive-case">
    <div class="inner">
      <ul class="module-category-list">
        <li>
          <a
            href="/case"
            class="<?php echo !$has_param_category ? 'current' : ''; ?>"
            hx-get="/case"
            hx-swap="outerHTML transition:true show:#hx-show:top"
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
              hx-swap="outerHTML transition:true show:#hx-show:top"
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
          <?php
          Utils::get_component('case/card-list-items', [
            'case_list' => $case_list,
            'total_posts' => $total_posts,
            'category' => Utils::get_query_param("category")
          ]);
          ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      <?php } else { ?>
        <p class="is-empty">現在、実績紹介はありません。</p>
      <?php } ?>
    </div>
  </section>
</main>

<?php
Utils::get_component('footer');
?>