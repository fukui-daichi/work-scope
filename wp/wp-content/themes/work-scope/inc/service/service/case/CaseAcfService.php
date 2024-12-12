<?php

namespace WorkScope\Inc\Service\Service\Case;

if (!defined("ABSPATH")) die();

class CaseAcfService
{
  /**
   * 実績紹介記事のACFデータを全て取得します
   *
   * @param int $post_id 投稿ID
   * @return array ACFフィールドデータの配列
   */
  public static function get_acf_data(int $post_id): array
  {
    $thumbnail = get_field('thumbnail', $post_id);

    return [
      'thumbnail' => [
        'url' => $thumbnail['url'] ?? '',
        'alt' => $thumbnail['alt'] ?? '',
        'width' => $thumbnail['width'] ?? 0,
        'height' => $thumbnail['height'] ?? 0,
      ],
    ];
  }
}
