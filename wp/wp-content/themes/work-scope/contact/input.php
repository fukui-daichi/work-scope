<?php

use WorkScope\Inc\Utils;
?>
<!DOCTYPE html>
<html lang="ja">
<?php Utils::get_component('head', $page_config); ?>

<body>
  <div class="all-wrapper">
    <?php Utils::get_component('header'); ?>
    <div class="contact-page input content-wrapper" data-hx-target>
      <main>
        <?php Utils::get_component('lower-header', $page_config); ?>
        <section class="contact-wrapper">
          <div class="inner">
            <form novalidate hx-post="/contact/confirm/" hx-swap="outerHTML transition:true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
              <dl class="form-list">
                <div class="form-item">
                  <dt>
                    <label for="company">会社名(なければ店舗名or屋号)</label>
                    <strong>※必須</strong>
                  </dt>
                  <dd>
                    <input id="company" type="text" name="company" placeholder="会社名" required aria-required="true" value="<?php echo Utils::h(Utils::el($data, "company")); ?>">
                    <?php if (!empty($errors['company'])) : ?>
                      <p class="form-error-text"><?php echo $errors['company'] ?></p>
                    <?php endif; ?>
                  </dd>
                </div>
                <!-- 他のフォーム項目も同様に実装 -->
              </dl>
              <div class="button-wrapper">
                <button class="mod-primary-button-lg" name="action" value="confirm">確認画面へすすむ</button>
              </div>
            </form>
          </div>
        </section>
      </main>
    </div>
    <?php Utils::get_component('footer'); ?>
  </div>
</body>

</html>