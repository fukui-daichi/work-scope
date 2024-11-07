<?php

use Fineasset\Inc\Utils\Utils;
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/<?= Utils::get_og_type(); ?>#">
  <meta charset="UTF-8">
  <title><?= Utils::get_page_title($title ?? null); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="株式会社ファイン・アセットは、幅広い選択肢から最適な金融ソリューションをご提案します。資産形成コンサルティング、保険診断・見直し、金融セミナーの開催、ライフプランニングなど、お客様の多様なニーズにお応えします。質の高いサービスで、お客様の資産運用をサポートいたします。">

  <!--=============== ▼DEFAULT OGP ===============-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="<?= Utils::get_og_type(); ?>">
  <meta property="og:site_name" content="株式会社ファインアセット">
  <meta property="og:url" content="">
  <meta property="og:title" content="<?= Utils::get_page_title($title ?? null); ?>">
  <meta property="og:description" content="株式会社ファイン・アセットは、幅広い選択肢から最適な金融ソリューションをご提案します。資産形成コンサルティング、保険診断・見直し、金融セミナーの開催、ライフプランニングなど、お客様の多様なニーズにお応えします。質の高いサービスで、お客様の資産運用をサポートいたします。">
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