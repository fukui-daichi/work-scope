<?php

namespace WorkScope\Inc\Service\Single\News;

if (!defined("ABSPATH")) die();

class NewsAcfService
{
  /**
   * お知らせ記事のACFデータを全て取得します
   *
   * @param int $post_id 投稿ID
   * @return array ACFフィールドデータの配列
   */
  public static function get_acf_data(int $post_id): array
  {
    return [
      'body_text' => get_field('body_text', $post_id),
    ];
  }
}
