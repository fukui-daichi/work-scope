<?php

use WorkScope\Inc\Utils;

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>


<main class="contact-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section id="hx-show" class="contact-thanks">
    <div class="inner">
      <hgroup>
        <h2>お問い合わせ<br class="sp" aria-hidden="true">ありがとうございました。</h2>
        <p>
          この度は当サイトへお問い合わせいただき<br class="sp" aria-hidden="true">ありがとうございます。<br>
          後日、内容をご確認の上<br class="sp" aria-hidden="true">ご回答をさせていただきます。<br>
          今しばらくお待ちくださいますよう<br class="sp" aria-hidden="true">よろしくお願い申し上げます。
        </p>
      </hgroup>
      <div class="button-wrapper">
        <a href="/" class="module-secondary-button" hx-get="/" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">トップページへ戻る</a>
      </div>
    </div>
  </section>

</main>
<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>