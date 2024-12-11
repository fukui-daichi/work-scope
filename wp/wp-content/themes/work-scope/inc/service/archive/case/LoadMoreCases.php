<?php

define('WP_USE_THEMES', false);
$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
require_once($parse_uri[0] . 'wp-load.php');

if (!defined('ABSPATH')) die();

use WorkScope\Inc\Service\Archive\Case\CaseArchiveService;
use WorkScope\Inc\Utils;

require_once dirname(__FILE__) . '/CaseArchiveService.php';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$category = isset($_GET['category']) ? $_GET['category'] : '';

// 必要なデータを取得
$total_posts = CaseArchiveService::get_total_posts();
$case_list = CaseArchiveService::get_case_list(CaseArchiveService::POSTS_PER_PAGE, $page);
$start_index = ($page - 1) * CaseArchiveService::POSTS_PER_PAGE;

// コンポーネントを表示
Utils::get_component('case/card-list-items', [
  'case_list' => $case_list,
  'total_posts' => $total_posts,
  'category' => $category,
  'start_index' => $start_index
]);
