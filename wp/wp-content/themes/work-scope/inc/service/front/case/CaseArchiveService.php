<?php

namespace WorkScope\Inc\Service\Front\Case;

if (!defined("ABSPATH")) die();

use WorkScope\Inc\Service\Front\Case\CaseAcfService;

class CaseArchiveService
{
  /**
   * お知らせ一覧を取得します
   *
   * @param int $posts_per_page 表示件数（デフォルト4件）
   * @return array ニュース一覧データの配列
   */
  public static function get_case_list(int $posts_per_page = 3): array
  {
    $args = [
      'post_type' => 'case',
      'posts_per_page' => $posts_per_page,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_status' => 'publish',
    ];

    $posts = get_posts($args);

    if (empty($posts)) {
      return [];
    }

    return array_map(function ($post) {
      // カテゴリー情報を取得
      $terms = get_the_terms($post->ID, 'case_category');
      $category = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->name : '';

      $acf_data = CaseAcfService::get_acf_data($post->ID);

      return array_merge([
        'id' => $post->ID,
        'title' => $post->post_title,
        'date_iso' => get_the_date('Y-m-d', $post->ID),
        'date_display' => get_the_date('Y.n.j', $post->ID),
        'permalink' => get_permalink($post->ID),
        'category' => $category,
      ], $acf_data);
    }, $posts);
  }
}
