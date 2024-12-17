<?php

namespace WorkScope\Inc\Service\Contact;

use WorkScope\Inc\Utils;

class ContactMailService
{
  /**
   * メール送信を実行します
   *
   * @param array $data フォームデータ
   * @return void
   */
  public static function send(array $data): void
  {
    $settings = self::get_mail_settings();

    $headers = [
      "From: {$settings['from']}",
      'Content-Type: text/plain; charset="UTF-8"',
    ];

    // 管理者へのメール送信
    $admin_message = self::get_mail_content('contact-admin', $data);
    $admin_emails = explode(',', $settings['admin_email']);

    foreach ($admin_emails as $email) {
      wp_mail(
        trim($email),
        $settings['admin_subject'],
        $admin_message,
        $headers
      );
    }

    // ユーザーへの自動返信メール送信
    $user_message = self::get_mail_content('contact-user', $data);
    wp_mail(
      $data['email'],
      $settings['user_subject'],
      $user_message,
      $headers
    );
  }

  /**
   * メール設定を取得します
   *
   * @return array メール設定の配列
   */
  private static function get_mail_settings(): array
  {
    $contact_settings = include get_template_directory() . '/inc/settings/contact.php';
    $system_settings = include get_template_directory() . '/inc/settings/system-mail.php';

    return [
      'from' => $system_settings['from'],
      'admin_email' => $contact_settings['admin'],
      'admin_subject' => $contact_settings['title_admin'],
      'user_subject' => $contact_settings['title'],
    ];
  }

  /**
   * メールテンプレートの内容を取得します
   *
   * @param string $template テンプレート名
   * @param array $data フォームデータ
   * @return string メール本文
   */
  private static function get_mail_content(string $template, array $data): string
  {
    ob_start();
    include get_template_directory() . "/inc/mail-templates/{$template}.php";
    return ob_get_clean();
  }
}
