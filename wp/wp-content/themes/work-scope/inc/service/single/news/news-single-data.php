<?php

namespace WorkScope\Inc\Service\Single\News;

if (!defined("ABSPATH")) die();

class NewsSingleData
{
  /**
   * お知らせ記事のページ設定情報を取得します
   *
   * @return array ページ設定の配列
   */
  public static function get_page_config(): array
  {
    $news_data = self::get_news_data();

    return [
      'title' => $news_data['title'],
    ];
  }

  /**
   * お知らせ記事のデータを取得します
   *
   * @return array 記事データの配列
   */
  public static function get_news_data(): array
  {
    $post_id = get_the_ID();

    // カテゴリー情報を取得
    $terms = get_the_terms(get_the_ID(), 'news_category');
    $category = !empty($terms) ? $terms[0]->name : '';

    return [
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'date' => [
        'iso' => get_the_date('Y-m-d'),
        'display' => get_the_date('Y.n.j'),
      ],
      'category' => $category,
      'body_text' => get_field('body_text', $post_id),
    ];
  }
}
