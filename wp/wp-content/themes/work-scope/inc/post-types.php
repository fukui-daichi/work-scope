<?php

if (!defined("ABSPATH")) die();

add_action("init", function () {
  // ニュース
  register_post_type("news", [
    "label" => "ニュース",
    "public" => true,
    "has_archive" => true,
    "supports" => ["title"],
    "menu_icon" => "dashicons-format-aside",
    "labels" => [
      "all_items" => "ニュース一覧",
    ],
  ]);

  // ニュースのカテゴリー
  register_taxonomy(
    "news_category",
    "news",
    [
      "label" => "ニュースカテゴリー",
      "hierarchical" => true,
      "public" => true,
      "show_in_rest" => true,
      "labels" => [
        "add_new_item" => "新しいカテゴリーを追加",
        "edit_item" => "カテゴリーを編集",
      ],
    ]
  );

  // 実績紹介
  register_post_type("case", [
    "label" => "実績紹介",
    "public" => true,
    "has_archive" => true,
    "supports" => ["title"],
    "menu_icon" => "dashicons-portfolio",
    "labels" => [
      "all_items" => "実績一覧",
    ],
  ]);

  // 実績のカテゴリー
  register_taxonomy(
    "case_category",
    "case",
    [
      "label" => "実績カテゴリー",
      "hierarchical" => true,
      "public" => true,
      "show_in_rest" => true,
      "labels" => [
        "add_new_item" => "新しいカテゴリーを追加",
        "edit_item" => "カテゴリーを編集",
      ],
    ]
  );
});

// パーマリンクの変更（シンプル構造）
add_filter("post_type_link", function ($link, $post) {
  if (in_array($post->post_type, ["news", "case"])) {
    return home_url("/{$post->post_type}/{$post->ID}");
  } else {
    return $link;
  }
}, 1, 2);

add_filter("rewrite_rules_array", function ($rules) {
  $new_rewrite_rules = [
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
    'case/([0-9]+)/?$' => 'index.php?post_type=case&p=$matches[1]',
  ];
  return $new_rewrite_rules + $rules;
});

/**
 * 固定ページのエディタを非表示にする
 */
// add_action('admin_init', function () {
//   remove_post_type_support('page', 'editor');
// });
