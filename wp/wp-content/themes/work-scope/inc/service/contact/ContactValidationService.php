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

    // お問い合わせ内容のバリデーション
    if (empty($data['subject'])) {
      $errors['subject'] = '「お問い合わせ内容」が選択されていません。';
    }

    // 法人名・団体名のバリデーション
    if (empty($data['corporate-name'])) {
      $errors['corporate-name'] = '「法人名・団体名」が未入力です。';
    }

    // お名前のバリデーション
    if (empty($data['name'])) {
      $errors['name'] = '「お名前」が未入力です。';
    }

    // ご連絡先メールアドレスのバリデーション
    if (empty($data['email'])) {
      $errors['email'] = '「ご連絡先メールアドレス」が未入力です。';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = '「ご連絡先メールアドレス」が正しく入力されていません。';
    }

    // ご連絡先電話番号のバリデーション
    if (!preg_match('/^[0-9-]+$/', $data['tel'])) {
      $errors['tel'] = '「ご連絡先電話番号」は数字とハイフンのみで入力してください。';
    }

    // お問い合わせ詳細のバリデーション
    if (empty($data['message'])) {
      $errors['message'] = '「お問い合わせ詳細」が未入力です。';
    }

    // 個人情報の取扱いのバリデーション
    if (empty($data['agreement'])) {
      $errors['agreement'] = 'この項目はチェック必須です。';
    }

    return $errors;
  }
}
