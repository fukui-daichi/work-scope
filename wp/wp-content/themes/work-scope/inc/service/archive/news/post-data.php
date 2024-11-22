<?php

namespace WorkScope\Inc\Service\Archive\News\PostType;

if (!defined("ABSPATH")) die();

use WorkScope\Inc\Utils\Utils;

class NewsArchiveData
{
  /**
   * ページ設定の定数
   */
  private const PAGE_CONFIG = [
    "title" => "お知らせ",
    "title_en" => "NEWS",
  ];

  /**
   * お知らせページの設定情報を取得します
   *
   * @return array ページ設定の配列
   */
  public static function get_page_config(): array
  {
    return self::PAGE_CONFIG;
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
      // 基本データ
      $post_data = [
        'id' => $post->ID,
        'title' => $post->post_title,
        'date' => [
          'iso' => get_the_date('Y-m-d', $post->ID),
          'display' => get_the_date('Y.n.j', $post->ID),
        ],
        'permalink' => get_permalink($post->ID),
        "category" => get_the_terms($post->ID, 'news_category'),
      ];

      // ACFフィールド
      $acf_fields = [
        'body_text' => get_field('body_text', $post->ID),
      ];

      // すべてのデータをマージ
      return array_merge(
        $post_data,
        $acf_fields,
      );
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
