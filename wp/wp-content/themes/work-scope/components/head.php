<?php

use WorkScope\Inc\Utils;
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/<?= Utils::get_og_type(); ?>#">
  <meta charset="UTF-8">
  <title><?= isset($title) ? $title . " | Work Scope" : "Work Scope" ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="<?= isset($description) ? $description : "Work Scopeは、組織・人事支援、採用支援、新規事業支援を通じて、企業の持続的な成長をサポートします。人材とテクノロジーの力で、働く人々の可能性を最大限に引き出します。"; ?>">

  <!--=============== ▼DEFAULT OGP ===============-->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="<?= Utils::get_og_type(); ?>">
  <meta property="og:site_name" content="Work Scope">
  <meta property="og:url" content="<?= home_url(); ?>">
  <meta property="og:title" content="<?= isset($title) ? $title . " | Work Scope" : "Work Scope" ?>">
  <meta property="og:description" content="<?= isset($description) ? $description : "Work Scopeは、組織・人事支援、採用支援、新規事業支援を通じて、企業の持続的な成長をサポートします。人材とテクノロジーの力で、働く人々の可能性を最大限に引き出します。"; ?>">
  <meta property="og:image" content="<?= home_url(); ?>/assets/images/common/ogp.jpg">

  <!--=============== ▼CSS ===============-->
  <link rel="stylesheet" href="/assets/css/styles.css?v=<?php echo filemtime(ABSPATH . "../assets/css/styles.css"); ?>">

  <!--=============== ▼GOOGLE FONTS ===============-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

  <script type="module" src="/assets/js/app.js?v=<?php echo filemtime(ABSPATH . "../assets/js/app.js"); ?>" defer></script>

  <?php wp_head(); ?>
</head>

<body>