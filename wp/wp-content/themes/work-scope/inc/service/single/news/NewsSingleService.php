<?php

namespace WorkScope\Inc\Service\Single\News;

if (!defined("ABSPATH")) die();

use WorkScope\Inc\Service\Single\News\NewsAcfService;

class NewsSingleService
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
      "description" => $news_data['title'] . "｜Work Scopeからのお知らせです。",
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

    // ACFデータを取得
    $acf_data = NewsAcfService::get_acf_data($post_id);

    return array_merge([
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'date_iso' => get_the_date('Y-m-d'),
      'date_display' => get_the_date('Y.n.j'),
      'category' => $category,
    ], $acf_data);
  }
}
