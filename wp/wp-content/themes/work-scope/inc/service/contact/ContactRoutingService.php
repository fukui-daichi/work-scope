<?php

namespace WorkScope\Inc\Service\Contact;

use WorkScope\Inc\Utils;

add_action('template_redirect', function () {
  if ($_SERVER['REQUEST_URI'] === '/contact') {
    wp_redirect('/contact/');
    exit;
  }

  if (preg_match('@^/contact/?.*@', $_SERVER['REQUEST_URI'])) {
    status_header(200);

    $result = ContactService::handle_contact(
      $_SERVER['REQUEST_METHOD'],
      $_POST
    );

    Utils::view("contact/{$result['view']}", [
      'data' => $result['data'],
      'errors' => $result['errors'],
      'page_config' => ContactService::get_page_config(),
    ]);
    exit;
  }
});
