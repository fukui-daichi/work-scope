<?php

namespace WorkScope\Inc\Service\Archive\Case;

if (!defined("ABSPATH")) die();

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Archive\Case\CaseAcfService;

class CaseArchiveService
{
  /**
   * 実績紹介ページの設定情報を取得します
   *
   * @return array ページ設定の配列
   */
  public static function get_page_config(): array
  {
    return [
      "page_path" => "case",
      "title" => "実績紹介",
      "title_en" => "CASE",
    ];
  }

  /**
   * 実績紹介一覧データを取得します
   *
   * @param int $posts_per_page 1ページあたりの表示件数（-1で全件取得）
   * @param int $paged 現在のページ番号
   * @return array 投稿データの配列
   */
  public static function get_case_list(int $posts_per_page = 6, int $paged = 1): array
  {
    // カテゴリーパラメータを取得
    $category_slug = Utils::get_query_param('category');

    $args = [
      'post_type' => 'case',
      'posts_per_page' => $posts_per_page,
      'paged' => $paged,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_status' => 'publish',
    ];

    // カテゴリーが指定されている場合は絞り込み条件を追加
    if (!empty($category_slug)) {
      $args['tax_query'] = [
        [
          'taxonomy' => 'case_category',
          'field' => 'slug',
          'terms' => $category_slug,
        ],
      ];
    }

    $posts = get_posts($args);

    if (empty($posts)) {
      return [];
    }

    return array_map(function ($post) {
      // カテゴリー情報を取得
      $terms = get_the_terms($post->ID, 'case_category');
      // WP_Errorチェックを追加
      $category = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->name : '';

      // ACFデータを取得
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

  /**
   * 実績紹介カテゴリー一覧を取得します
   *
   * @param array $args カテゴリー取得時の追加オプション
   * @return array カテゴリーデータの配列
   */
  public static function get_case_categories(array $args = []): array
  {
    $categories = get_terms([
      'taxonomy' => 'case_category',
      'hide_empty' => false,
    ]);

    if (empty($categories) || is_wp_error($categories)) {
      return [];
    }

    $current_category = Utils::get_query_param('category');

    return array_map(function ($category) use ($current_category) {
      return [
        'id' => $category->term_id,
        'name' => $category->name,
        'slug' => $category->slug,
        'count' => $category->count,
        'description' => $category->description,
        'is_current' => $current_category === $category->slug,
      ];
    }, $categories);
  }
}
