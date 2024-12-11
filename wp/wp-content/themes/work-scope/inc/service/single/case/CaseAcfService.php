<?php

namespace WorkScope\Inc\Service\Single\Case;

if (!defined("ABSPATH")) die();

class CaseAcfService
{
  /**
   * ACFフィールドデータを取得します
   *
   * @param int $post_id 投稿ID
   * @return array ACFフィールドデータの配列
   */
  public static function get_acf_data(int $post_id): array
  {
    return [
      'thumbnail' => self::get_thumbnail($post_id),
      'main_contents' => self::get_main_contents($post_id),
    ];
  }

  /**
   * サムネイル画像データを取得します
   *
   * @param int $post_id 投稿ID
   * @return array|null 画像データの配列
   */
  private static function get_thumbnail(int $post_id): ?array
  {
    return get_field('thumbnail', $post_id);
  }

  /**
   * メインコンテンツのFlexible Contentデータを取得します
   *
   * @param int $post_id 投稿ID
   * @return array コンテンツブロックの配列
   */
  private static function get_main_contents(int $post_id): array
  {
    $contents = get_field('main_contents', $post_id);
    if (!$contents) return [];

    return array_map(function ($content) {
      $layout = $content['acf_fc_layout'];
      $margin_block = $content['margin_block'] ?? 'none';

      switch ($layout) {
        case 'head2_block':
        case 'head3_block':
          return [
            'type' => $layout,
            'head' => $content['head'],
            'text' => $content['text'],
            'margin_block' => $margin_block,
          ];

        case 'unordered_list':
        case 'ordered_list':
          return [
            'type' => $layout,
            'items' => array_map(function ($item) {
              return $item['item'];
            }, $content['list']),
            'margin_block' => $margin_block,
          ];

        default:
          return null;
      }
    }, $contents);
  }
}
