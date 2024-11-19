<?php

namespace WorkScope\Inc\Service\Archive\News\PostType;

if (!defined("ABSPATH")) die();

class NewsArchiveData
{
  /**
   * ニュース一覧データを取得します
   *
   * @param int $posts_per_page 1ページあたりの表示件数（-1で全件取得）
   * @param int $paged 現在のページ番号
   * @return array 投稿データの配列
   */
  public static function get_news_list(int $posts_per_page = -1, int $paged = 1): array
  {
    $args = [
      'post_type' => 'news',
      'posts_per_page' => $posts_per_page,
      'paged' => $paged,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_status' => 'publish',
    ];

    $posts = get_posts($args);

    if (empty($posts)) {
      return [];
    }

    return array_map(function ($post) {
      return [
        'id' => $post->ID,
        'title' => $post->post_title,
      ];
    }, $posts);
  }
}
