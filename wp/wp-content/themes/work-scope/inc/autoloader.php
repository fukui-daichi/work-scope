<?php

namespace WorkScope;

class Autoloader
{
  /**
   * オートローダーを登録します
   *
   * @return void
   */
  public static function register(): void
  {
    spl_autoload_register(function ($class) {
      // デバッグ用ログ
      error_log("[Autoloader] Attempting to load class: " . $class);

      // 名前空間のプレフィックスを定義
      $prefix = 'WorkScope\\';
      $prefix_length = strlen($prefix);

      // クラス名が我々のプレフィックスで始まらない場合は処理をスキップ
      if (strncmp($prefix, $class, $prefix_length) !== 0) {
        error_log("[Autoloader] Class does not match prefix");
        return;
      }

      // プレフィックスを除いた相対クラス名を取得
      $relative_class = substr($class, $prefix_length);
      error_log("[Autoloader] Relative class path: " . $relative_class);

      // クラス名をファイルパスに変換
      $file_path = self::convertClassToPath($relative_class);
      error_log("[Autoloader] Converted file path: " . $file_path);

      // 完全なファイルパスを生成
      $file = get_template_directory() . '/' . $file_path;
      error_log("[Autoloader] Full file path: " . $file);

      // ファイルが存在する場合は読み込む
      if (file_exists($file)) {
        error_log("[Autoloader] File found, loading: " . $file);
        require_once $file;
      } else {
        error_log("[Autoloader] File not found: " . $file);
      }
    });
  }

  /**
   * クラス名をファイルパスに変換します
   *
   * @param string $class
   * @return string
   */
  private static function convertClassToPath(string $class): string
  {
    // バックスラッシュをスラッシュに変換
    $path = str_replace('\\', '/', $class);

    // パスをセグメントに分割
    $segments = explode('/', $path);

    // 最後のセグメント（クラス名）を取得
    $class_name = array_pop($segments);

    // クラス名をケバブケースに変換
    $kebab_case = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $class_name));

    // パスの他の部分は小文字に変換
    $path_segments = array_map('strtolower', $segments);

    // パスを再構築
    $full_path = implode('/', $path_segments) . '/' . $kebab_case;

    return $full_path . '.php';
  }
}

Autoloader::register();
