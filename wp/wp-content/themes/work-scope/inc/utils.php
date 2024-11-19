<?php

namespace WorkScope\Inc\Utils;

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
   * @param string $view ビューファイルの名前
   * @param array $vars ビューのスコープに展開される変数の配列
   * @return void
   */
  public static function view(string $view, array $vars = []): void
  {
    $theme_dir = get_template_directory();
    if (file_exists($theme_dir . "/{$view}.php")) {
      extract($vars);
      include $theme_dir . "/{$view}.php";
    }
  }

  /**
   * 特定のページに変数を展開します
   *
   * @param string $page 変数を展開するページ名
   * @param array $vars スコープに展開される変数の配列
   * @return void
   */
  public static function set_vars(string $page, array $vars = []): void
  {
    // 現在のページが指定されたページと一致するか確認
    $current_page = basename(get_page_template(), '.php');

    if ($current_page !== $page || empty($vars)) {
      return;
    }

    extract($vars);
  }

  /**
   * パーシャルビューファイルをオプションの変数と共にインクルードします。
   *
   * @param string $component パーシャルビューファイルの名前
   * @param array $vars ビューのスコープに展開される変数の配列
   * @return void
   */
  public static function get_component(string $component, array $vars = []): void
  {
    self::view("components/{$component}", $vars);
  }

  /**
   * ページタイトルを生成します。
   *
   * @param string|null $title ページ固有のタイトル（オプション）
   * @param string $siteName サイト名
   * @param string $separator タイトルとサイト名の区切り文字
   * @return string 生成されたタイトル
   */
  public static function get_page_title($title = null, string $siteName = 'Work Scope', string $separator = ' | '): string
  {
    if (isset($title) && $title !== '' && $title !== null) {
      return $title . $separator . $siteName;
    }
    return $siteName;
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
}