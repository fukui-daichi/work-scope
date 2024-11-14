<?php

use WorkScope\Inc\Utils\Utils;

$page_config = [
  "title" => "企業情報",
  "title_en" => "COMPANY",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>


<main class="company-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>
</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>