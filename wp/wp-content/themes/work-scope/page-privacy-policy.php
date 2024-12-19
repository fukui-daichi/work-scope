<?php

use WorkScope\Inc\Utils;

$page_config = [
  "title" => "プライバシーポリシー",
  "title_en" => "Privacy Policy",
  "description" => "Work Scopeのプライバシーポリシーに関するページです。",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>


<main class="privacy-policy-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="privacy-policy">
    <div class="inner">
      <p class="intro">
        〇〇株式会社（以下「当社」といいます。）は、利用者に関する情報を以下のとおり取り扱います。
      </p>
      <ul class="agreement-list">
        <li>
          <dl>
            <dt>第1条 記載内容はサンプルです</dt>
            <dd>記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>第2条 記載内容はサンプルです</dt>
            <dd>記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>第3条 記載内容はサンプルです</dt>
            <dd>記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>第4条 記載内容はサンプルです</dt>
            <dd>記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>第5条 記載内容はサンプルです</dt>
            <dd>記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。記載されているプライバシーポリシーはサンプルになります。</dd>
          </dl>
        </li>
      </ul>
      <dl class="contact">
        <dt>お問い合わせ窓口</dt>
        <dd>
          本ポリシーに関するお問い合わせは、<br class="sp" aria-hidden="true">下記の窓口までお願いいたします。
          <address>
            住所：〒000-0000大阪府大阪市〇〇区 <br class="sp" aria-hidden="true">0-00-0テンプレートビル8F<br>
            社名：Work Scope<br>
            Eメールアドレス：<a href="mailto:info@sample.co.jp">info@sample.co.jp</a>
          </address>
          以上
        </dd>
      </dl>
    </div>
  </section>

</main>
<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>