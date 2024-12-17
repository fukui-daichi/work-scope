<?php

namespace WorkScope\Inc\Settings;

$sys = include __DIR__ . "/system-mail.php";

return [
  // メールタイトル
  "title" => "お問い合わせいただきありがとうございます",
  "title_admin" => "お問い合わせがありました",

  // 送信先
  "admin" => $sys["from"],

  // 送信元情報
  "from" => $sys["from"],
  "name" => $sys["name"],

  // フィールドの定義
  "fields" => [
    "company",
    "name",
    "email",
    "tel",
    "message",
  ]
];
