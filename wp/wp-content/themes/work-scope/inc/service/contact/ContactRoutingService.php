<?php

namespace WorkScope\Inc\Service\Contact;

use WorkScope\Inc\Utils;

class ContactRoutingService
{
  private static bool $initialized = false;

  /**
   * クラスの静的初期化
   */
  public static function __constructStatic()
  {
    if (!self::$initialized) {
      add_action('template_redirect', [self::class, 'handle_routing']);
      self::$initialized = true;
    }
  }

  /**
   * コンタクトフォームのルーティングを処理します
   *
   * @return void
   */
  public static function handle_routing(): void
  {
    if ($_SERVER['REQUEST_URI'] === '/contact') {
      wp_redirect('/contact/');
      exit;
    }

    if (preg_match('@^/contact/?.*@', $_SERVER['REQUEST_URI'])) {
      status_header(200);

      $result = ContactService::handle_contact(
        $_SERVER['REQUEST_METHOD'],
        $_POST
      );

      Utils::view("contact/{$result['view']}", [
        'data' => $result['data'],
        'errors' => $result['errors'],
        'page_config' => ContactService::get_page_config(),
      ]);
      exit;
    }
  }
}

// 静的初期化を実行
ContactRoutingService::__constructStatic();
