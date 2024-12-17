<?php

namespace WorkScope\Inc;

if (!defined("ABSPATH")) die();

class Utils
{
  /**
   * 文字列内のHTML特殊文字をエスケープします。
   *
   * @param string|null $str エスケープする入力文字列
   * @return string エスケープされた文字列
   */
  public static function h(?string $str): string
  {
    return htmlspecialchars($str ?? '');
  }

  /**
   * 配列またはオブジェクトから安全に値を取得します。
   *
   * @param array|object $o 取得元の配列またはオブジェクト
   * @param string|int $k キーまたはプロパティ名
   * @param mixed $d キーが存在しない場合のデフォルト値
   * @return mixed 取得された値またはデフォルト値
   */
  public static function el($o, $k, $d = null)
  {
    if (is_array($o)) {
      return isset($o[$k]) ? $o[$k] : $d;
    } else {
      return isset($o->$k) ? $o->$k : $d;
    }
  }

  /**
   * ビューファイルをオプションの変数と共にインクルードします。
   *
   * @param string $view ビューファイルの名前（componentsディレクトリ以外の場合は'components/'を除いたパスを指定）
   * @param array $vars ビューのスコープに展開される変数の配列
   * @return void
   */
  public static function get_component(string $view, array $vars = []): void
  {
    $theme_dir = get_template_directory();
    $view_path = strpos($view, 'components/') === 0 ? $view : "components/{$view}";

    if (file_exists($theme_dir . "/{$view_path}.php")) {
      extract($vars);
      include $theme_dir . "/{$view_path}.php";
    }
  }

  /**
   * ページのOGタイプを決定して返します。
   *
   * @return string OGタイプ（'website'または'article'）
   */
  public static function get_og_type(): string
  {
    if (is_front_page() || is_home()) {
      return 'website';
    } elseif (is_single() || is_page()) {
      return 'article';
    } else {
      return 'website';
    }
  }

  /**
   * 現在のページのコンテンツを出力します。
   *
   * @return void
   */
  public static function the_page_content(): void
  {
    while (have_posts()) {
      the_post();
      the_content();
    }
  }

  /**
   * URLクエリパラメータを取得します
   *
   * @param string $param_name 取得するパラメータ名
   * @param string $default デフォルト値（パラメータが存在しない場合に返される）
   * @return string サニタイズされたパラメータ値またはデフォルト値
   */
  public static function get_query_param(string $param_name, string $default = ''): string
  {
    return isset($_GET[$param_name]) ? sanitize_text_field($_GET[$param_name]) : $default;
  }
}
