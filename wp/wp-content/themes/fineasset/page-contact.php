<?php

use Fineasset\Inc\Utils\Utils;

$page_config = [
  "class" => "contact",
  "title" => "お問い合わせ",
  "title_en" => "Contact",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="contact">
    <div class="inner">
      <?php Utils::the_page_content(); ?>
    </div>
  </section>
</main>

<?php Utils::get_component('footer'); ?>