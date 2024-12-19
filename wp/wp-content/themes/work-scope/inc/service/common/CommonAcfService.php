<?php

namespace WorkScope\Inc\Service\Common;

if (!defined("ABSPATH")) die();

class CommonAcfService
{
  /**
   * サイトオプションのデータを取得します
   *
   * @return array サイトオプションデータの配列
   */
  public static function get_site_options(): array
  {
    return [
      'base_color' => self::get_base_color(),
    ];
  }

  /**
   * ベースカラーを取得します
   *
   * @return string ベースカラーの値（デフォルト: #0553dd）
   */
  public static function get_base_color(): string
  {
    $base_color = get_field('base_color', 'option');
    return $base_color ?: '#0553dd';
  }
}
