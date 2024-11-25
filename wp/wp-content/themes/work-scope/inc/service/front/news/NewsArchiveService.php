<?php

namespace WorkScope\Inc\Service\Front\News;

if (!defined("ABSPATH")) die();

class NewsArchiveService
{
  /**
   * お知らせ一覧を取得します
   *
   * @param int $posts_per_page 表示件数（デフォルト4件）
   * @return array ニュース一覧データの配列
   */
  public static function get_news_list(int $posts_per_page = 4): array
  {
    $args = [
      'post_type' => 'news',
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
      $terms = get_the_terms($post->ID, 'news_category');
      $category = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->name : '';

      return [
        'id' => $post->ID,
        'title' => $post->post_title,
        'date_iso' => get_the_date('Y-m-d', $post->ID),
        'date_display' => get_the_date('Y.n.j', $post->ID),
        'category' => $category,
        'permalink' => get_permalink($post->ID),
      ];
    }, $posts);
  }
}
