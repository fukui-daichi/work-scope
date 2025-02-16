<?php

namespace WorkScope\Inc\Service\Archive\News;

if (!defined("ABSPATH")) die();

use WorkScope\Inc\Utils;

class NewsArchiveService
{
  /**
   * お知らせページの設定情報を取得します
   *
   * @return array ページ設定の配列
   */
  public static function get_page_config(): array
  {
    return [
      "page_path" => "news",
      "title" => "お知らせ",
      "title_en" => "NEWS",
      "description" => "Work Scopeからの最新情報をお届けします。サービスアップデートや業界動向、お役立ち情報など、企業の成長に関する情報を発信しています。",
    ];
  }

  /**
   * ニュース一覧データを取得します
   *
   * @param int $posts_per_page 1ページあたりの表示件数（-1で全件取得）
   * @param int $paged 現在のページ番号
   * @return array 投稿データの配列
   */
  public static function get_news_list(int $posts_per_page = -1, int $paged = 1): array
  {
    // カテゴリーパラメータを取得
    $category_slug = Utils::get_query_param('category');

    $args = [
      'post_type' => 'news',
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
          'taxonomy' => 'news_category',
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
      $terms = get_the_terms($post->ID, 'news_category');
      // WP_Errorチェックを追加
      $category = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->name : '';

      return [
        'id' => $post->ID,
        'title' => $post->post_title,
        'date_iso' => get_the_date('Y-m-d', $post->ID),
        'date_display' => get_the_date('Y.n.j', $post->ID),
        'permalink' => get_permalink($post->ID),
        'category' => $category,
      ];
    }, $posts);
  }

  /**
   * ニュースカテゴリー一覧を取得します
   *
   * @param array $args カテゴリー取得時の追加オプション
   * @return array カテゴリーデータの配列
   */
  public static function get_news_categories(array $args = []): array
  {
    $categories = get_terms([
      'taxonomy' => 'news_category',
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
