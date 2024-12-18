<?php

use WorkScope\Inc\Utils;

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>


<main class="contact-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="contact-confirm">
    <div class="inner">
      <p id="hx-show" class="intro">
        以下の内容で間違いないか、<br class="sp">ご確認ください。
      </p>
      <form novalidate hx-post="/contact/thanks" hx-swap="outerHTML transition:true show:#hx-show:top" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <ul class="confirm-list">
          <li>
            <dl>
              <dt>お問い合わせ内容</dt>
              <dd><?php echo Utils::get_escape_el($data, "subject"); ?></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>法人名・団体名</dt>
              <dd><?php echo Utils::get_escape_el($data, "corporate-name"); ?></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>お名前</dt>
              <dd><?php echo Utils::get_escape_el($data, "name"); ?></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>ご連絡先メールアドレス</dt>
              <dd><?php echo Utils::get_escape_el($data, "email"); ?></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>ご連絡先電話番号</dt>
              <dd><?php echo Utils::get_escape_el($data, "tel"); ?></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>お問い合わせ詳細</dt>
              <dd><?php echo Utils::get_escape_el($data, "message"); ?></dd>
            </dl>
          </li>
        </ul>

        <?php foreach ($data as $key => $value) : ?>
          <fieldset>
            <input type="hidden" name="<?php echo $key; ?>" value="<?php echo Utils::h($value); ?>">
          </fieldset>
        <?php endforeach; ?>

        <div class="button-wrapper">
          <button name="action" value="back" class="module-secondary-button">戻る</button>
          <button name="action" value="send" class="module-secondary-button">送信する</button>
        </div>
      </form>
    </div>
  </section>

</main>
<?php
Utils::get_component('footer');
?>