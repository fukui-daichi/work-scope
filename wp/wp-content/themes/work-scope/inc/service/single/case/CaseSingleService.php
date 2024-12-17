<?php

namespace WorkScope\Inc\Service\Single\Case;

if (!defined("ABSPATH")) die();

use WorkScope\Inc\Service\Single\Case\CaseAcfService;

class CaseSingleService
{
  /**
   * 実績紹介記事のページ設定情報を取得します
   *
   * @return array ページ設定の配列
   */
  public static function get_page_config(): array
  {
    $case_data = self::get_case_data();

    return [
      'title' => $case_data['title'],
      "description" => $case_data['title'] . "の事例をご紹介。Work Scopeがどのようなアプローチで解決に導いたのか、具体的な成果とともにお伝えします。",
    ];
  }

  /**
   * 実績紹介記事のデータを取得します
   *
   * @return array 記事データの配列
   */
  public static function get_case_data(): array
  {
    $post_id = get_the_ID();

    // カテゴリー情報を取得
    $terms = get_the_terms(get_the_ID(), 'case_category');
    $category = !empty($terms) ? $terms[0]->name : '';

    // ACFデータを取得
    $acf_data = CaseAcfService::get_acf_data($post_id);

    return array_merge([
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'date_iso' => get_the_date('Y-m-d'),
      'date_display' => get_the_date('Y.n.j'),
      'category' => $category,
    ], $acf_data);
  }
}
