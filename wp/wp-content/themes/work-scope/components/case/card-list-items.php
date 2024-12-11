<?php

use WorkScope\Inc\Service\Archive\Case\CaseViewService;

$items_data = CaseViewService::prepare_card_list_data(
  $case_list,
  $total_posts,
  $category ?? null,
  $start_index ?? 0
);

foreach ($items_data as $item): ?>
  <li <?php if ($item['is_last_in_set'] && $item['should_load_more']): ?>
    hx-get="<?php echo esc_url($item['load_more_url']); ?>"
    hx-trigger="intersect once threshold:1"
    hx-swap="beforeend"
    hx-target="#case-list"
    <?php endif; ?>>
    <a
      href="<?php echo esc_url($item['case']['permalink']); ?>"
      hx-get="<?php echo esc_url($item['case']['permalink']); ?>"
      hx-swap="outerHTML transition:true"
      hx-push-url="true"
      hx-target="[data-hx-target]"
      hx-select="[data-hx-target]">
      <figure>
        <img src="<?php echo esc_url($item['case']['thumbnail']['url']); ?>"
          alt="<?php echo esc_attr($item['case']['thumbnail']['alt']); ?>"
          width="<?php echo esc_attr($item['case']['thumbnail']['width']); ?>"
          height="<?php echo esc_attr($item['case']['thumbnail']['height']); ?>"
          decoding="async">
      </figure>
      <dl>
        <dt>
          <span class="category"><?php echo esc_html($item['case']['category']); ?></span>
          <time datetime="<?php echo esc_attr($item['case']['date_iso']); ?>"><?php echo esc_html($item['case']['date_display']); ?></time>
        </dt>
        <dd><?php echo esc_html($item['case']['title']); ?></dd>
      </dl>
    </a>
  </li>
<?php endforeach; ?>