<?php

use WorkScope\Inc\Utils\Utils;
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/<?= Utils::get_og_type(); ?>#">
  <meta charset="UTF-8">
  <title><?= Utils::get_page_title($title ?? null); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="">

  <!--=============== ▼DEFAULT OGP ===============-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="<?= Utils::get_og_type(); ?>">
  <meta property="og:site_name" content="WorkScope">
  <meta property="og:url" content="">
  <meta property="og:title" content="<?= Utils::get_page_title($title ?? null); ?>">
  <meta property="og:description" content="">
  <meta property="og:image" content="<?= home_url(); ?>/assets/images/common/ogp.jpg">

  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <?php
  Utils::get_component('links');
  Utils::get_component('scripts');
  wp_head();
  ?>
</head>

<body<?= Utils::get_body_class($class); ?>>