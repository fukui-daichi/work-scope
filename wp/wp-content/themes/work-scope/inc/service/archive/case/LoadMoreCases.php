<?php
define('WP_USE_THEMES', false);
$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
require_once($parse_uri[0] . 'wp-load.php');

if (!defined('ABSPATH')) die();

use WorkScope\Inc\Service\Archive\Case\CaseArchiveService;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
CaseArchiveService::get_next_page_content($page);
exit;
