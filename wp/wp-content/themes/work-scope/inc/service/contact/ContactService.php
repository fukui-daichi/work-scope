<?php

namespace WorkScope\Inc\Service\Contact;

use WorkScope\Inc\Utils;

class ContactService
{
  private const REQUIRED_FIELDS = [
    'company',
    'name',
    'email',
    'tel',
    'message'
  ];

  /**
   * お問い合わせページの設定情報を取得します
   *
   * @return array ページ設定の配列
   */
  public static function get_page_config(): array
  {
    return [
      'page_path' => 'contact',
      'title' => 'お問い合わせ',
      'title_en' => 'CONTACT',
      'description' => 'Work Scopeへのお問い合わせはこちらのフォームからお願いいたします。',
    ];
  }

  /**
   * フォームデータを取得し、必要な整形を行います
   *
   * @param array $post_data $_POST データ
   * @return array 整形されたフォームデータ
   */
  public static function get_form_data(array $post_data): array
  {
    $data = [];
    foreach (self::REQUIRED_FIELDS as $field) {
      $data[$field] = Utils::el($post_data, $field, '');
    }
    return $data;
  }

  /**
   * お問い合わせ処理のメインフロー
   *
   * @param string $method HTTPメソッド
   * @param array $post_data POSTデータ
   * @return array レスポンスデータ
   */
  public static function handle_contact(string $method, array $post_data = []): array
  {
    if ($method === 'GET') {
      return [
        'view' => 'input',
        'data' => [],
        'errors' => []
      ];
    }

    $data = self::get_form_data($post_data);
    $action = Utils::el($post_data, 'action', '');
    $errors = ContactValidationService::validate($data);

    if (count($errors) > 0) {
      return [
        'view' => 'input',
        'data' => $data,
        'errors' => $errors
      ];
    }

    if ($action === 'confirm') {
      return [
        'view' => 'confirm',
        'data' => $data,
        'errors' => []
      ];
    }

    if ($action === 'send') {
      ContactMailService::send($data);
      return [
        'view' => 'thanks',
        'data' => [],
        'errors' => []
      ];
    }

    return [
      'view' => 'input',
      'data' => $data,
      'errors' => []
    ];
  }
}
