<?php

use WorkScope\Inc\Utils\Utils;

$page_config = [
  "class" => "front"
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>


<main>
</main>

<?php Utils::get_component('footer'); ?>