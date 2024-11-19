<?php

if (!defined("ABSPATH")) die();

use WorkScope\Inc\Utils\Utils;
use WorkScope\Inc\Service\Archive\News\PostType\NewsArchiveData;

$news_list = NewsArchiveData::get_news_list();

Utils::set_vars("archive-news", [
  "news_list" => $news_list
]);
