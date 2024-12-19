<?php

use WorkScope\Inc\Utils;

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>


<main class="contact-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="contact-input">
    <div class="inner">
      <p class="intro">
        弊社へのお問い合わせは下記よりご入力願いします。<br>
        お問い合わせ内容の確認後、担当者よりご連絡させていただきます。<br>
        返信には数日かかる場合もございますので、あらかじめご了承くださいませ。
      </p>
      <form id="hx-show" novalidate data-target="form-input" hx-post="/contact/confirm/" hx-swap="outerHTML transition:true show:#hx-show:top" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <ul class="form-list">
          <li>
            <dl>
              <dt>
                お問い合わせ内容
                <strong>*</strong>
              </dt>
              <dd>
                <?php
                Utils::get_component('radio', ["data" => $data, "name" => "subject", "value" => "サービス内容について"]);
                Utils::get_component('radio', ["data" => $data, "name" => "subject", "value" => "取材・プレス関連について"]);
                Utils::get_component('radio', ["data" => $data, "name" => "subject", "value" => "採用について"]);
                Utils::get_component('radio', ["data" => $data, "name" => "subject", "value" => "その他"]);
                ?>
                <p class="form-error"><?php if (!empty($errors['subject'])) echo $errors['subject']; ?></p>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <label for="corporate-name">法人名・団体名</label>
                <strong>*</strong>
              </dt>
              <dd>
                <input id="corporate-name" type="text" name="corporate-name" placeholder="例）株式会社サンプル" autocomplete="organization" required aria-required="true" data-error-message="「法人名・団体名」が未入力です。" value="<?php echo Utils::get_escape_el($data, "corporate-name"); ?>">
                <p class="form-error"><?php if (!empty($errors['corporate-name'])) echo $errors['corporate-name']; ?></p>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <label for="name">お名前</label>
                <strong>*</strong>
              </dt>
              <dd>
                <input id="name" type="text" name="name" placeholder="例）山田太郎" autocomplete="name" required aria-required="true" data-error-message="「お名前」が未入力です。" value="<?php echo Utils::get_escape_el($data, "name"); ?>">
                <p class="form-error"><?php if (!empty($errors['name'])) echo $errors['name']; ?></p>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <label for="email">ご連絡先メールアドレス</label>
                <strong>*</strong>
              </dt>
              <dd>
                <input id="email" type="email" name="email" placeholder="例）info@sample.co.jp" autocomplete="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="「ご連絡先メールアドレス」が正しく入力されていません。" required aria-required="true" data-error-message="「ご連絡先メールアドレス」が未入力です。" value="<?php echo Utils::get_escape_el($data, "email"); ?>">
                <p class="form-error"><?php if (!empty($errors['email'])) echo $errors['email']; ?></p>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <label for="tel">ご連絡先電話番号</label>
              </dt>
              <dd>
                <input id="tel" type="tel" name="tel" autocomplete="tel" placeholder="例）000-1234-5678" pattern="[0-9-]+" title="「ご連絡先電話番号」は数字とハイフンのみで入力してください。" value="<?php echo Utils::get_escape_el($data, "tel"); ?>">
                <p class="form-error"><?php if (!empty($errors['tel'])) echo $errors['tel']; ?></p>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <label for="message">お問い合わせ詳細</label>
                <strong>*</strong>
              </dt>
              <dd>
                <textarea id="message" name="message" placeholder="テキストを入力ください" required aria-required="true" data-error-message="「お問い合わせ詳細」が未入力です。"><?php echo Utils::get_escape_el($data, "message"); ?></textarea>
                <p class="form-error"><?php if (!empty($errors['message'])) echo $errors['message']; ?></p>
              </dd>
            </dl>
          </li>
        </ul>

        <div class="agreement">
          <label class="checkbox">
            <input type="checkbox" data-trigger="agreement" name="agreement" value="1" required autocomplete="off" class="visually-hidden" <?php echo Utils::get_escape_el($data, "agreement") ? 'checked' : ''; ?>>
            <span class="icon"></span>
            <span class="text">「<a href="/privacy-policy" target="_blank">個人情報の取扱いに関する同意書</a>」<br class="sp">を読み、同意しました。</span>
          </label>
          <p class="form-error"><?php if (!empty($errors['agreement'])) echo $errors['agreement']; ?></p>
        </div>

        <div class="button-wrapper">
          <button class="module-secondary-button" data-target="agreement" name="action" value="confirm" aria-disabled="true">確認画面へすすむ</button>
        </div>
      </form>
    </div>
  </section>

</main>
<?php
Utils::get_component('footer');
?>