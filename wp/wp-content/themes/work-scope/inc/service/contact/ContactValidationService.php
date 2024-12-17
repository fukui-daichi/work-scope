<?php

namespace WorkScope\Inc\Service\Contact;

class ContactValidationService
{
  /**
   * フォームデータのバリデーションを行います
   *
   * @param array $data バリデーション対象のデータ
   * @return array エラーメッセージの配列
   */
  public static function validate(array $data): array
  {
    $errors = [];

    // 会社名のバリデーション
    if (empty($data['company'])) {
      $errors['company'] = '会社名が未入力です。';
    }

    // 担当者名のバリデーション
    if (empty($data['name'])) {
      $errors['name'] = 'お名前が未入力です。';
    }

    // メールアドレスのバリデーション
    if (empty($data['email'])) {
      $errors['email'] = 'メールアドレスが未入力です。';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'メールアドレスが正しく入力されていません。';
    }

    // 電話番号のバリデーション
    if (empty($data['tel'])) {
      $errors['tel'] = '電話番号が未入力です。';
    } elseif (!preg_match('/^[0-9-]+$/', $data['tel'])) {
      $errors['tel'] = '電話番号は数字とハイフンのみで入力してください。';
    }

    // お問い合わせ内容のバリデーション
    if (empty($data['message'])) {
      $errors['message'] = 'お問い合わせ内容が未入力です。';
    }

    return $errors;
  }
}
