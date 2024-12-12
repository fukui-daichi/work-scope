<?php

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Front\News\NewsArchiveService;
use WorkScope\Inc\Service\Front\Case\CaseArchiveService;

$news_list = NewsArchiveService::get_news_list();
$case_list = CaseArchiveService::get_case_list();

Utils::get_component('head');
Utils::get_component('header');
?>

<main class="front-page" data-hx-target>
  <div class="mv">
    <div class="inner">
      <hgroup>
        <h1>
          働く人たちが<br>
          幸せになる社会へ
        </h1>
        <p lang="en" translate="no">THE WORLD WHERE WORKERS ARE HAPPY.</p>
      </hgroup>
      <div class="splide" role="group">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <picture>
                <!-- <source srcset="/assets/images/front/mv/sp/slide01.jpg" media="(max-width: 768px)" /> -->
                <img src="/assets/images/front/mv/slide01.jpg" alt="" width="1080" height="720" decoding="async">
              </picture>
            </li>
            <li class="splide__slide">
              <picture>
                <!-- <source srcset="/assets/images/front/mv/sp/slide01.jpg" media="(max-width: 768px)" /> -->
                <img src="/assets/images/front/mv/slide02.jpg" alt="" width="1920" height="1080" decoding="async">
              </picture>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <section class="company">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">COMPANY</h2>
        <dl class="module-text-intro">
          <dt>
            すべてのクライアントに<br>
            課題解決策と成長を
          </dt>
          <dd>
            私たちは、ヒトとITのチカラで働く人たちを応援する企業です。働くすべての人を幸せにする支援を多角的に展開していきます。<br class="sp">
            採用／人事制度／DX推進／システム導⼊／新規事業企画／業務改善などをご⽀援しています。
          </dd>
        </dl>
        <a href="/company" class="module-base-button" hx-get="/company" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
          <span class="icon"></span>
          <span class="text">企業情報をみる</span>
        </a>
      </div>
      <figure>
        <img src="/assets/images/front/company/img01.jpg" alt="" width="1080" height="1620" decoding="async">
      </figure>
    </div>
  </section>

  <section class="service">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">SERVICE</h2>
        <dl class="module-text-intro">
          <dt>
            あらゆる力を、<br class="sp">
            進化のために。
          </dt>
          <dd>
            Work Scopeが提供しているサービスはこちらからご覧ください。
            多角的に対応しています。
          </dd>
        </dl>
      </div>
      <ul class="service-list">
        <li>
          <figure>
            <img src="/assets/images/front/service/img01.jpg" alt="" width="1080" height="1620" decoding="async">
          </figure>
          <dl>
            <dt>
              <span class="en" lang="en" translate="no">HR SUPPORT</span>
              <span class="ja">組織・⼈事支援</span>
            </dt>
            <dd>本質的な課題解決につながる組織・⼈事戦略の策定を支援</dd>
          </dl>
        </li>
        <li>
          <figure>
            <img src="/assets/images/front/service/img02.jpg" alt="" width="1080" height="608" decoding="async">
          </figure>
          <dl>
            <dt>
              <span class="en" lang="en" translate="no">CAREER SUPPORT</span>
              <span class="ja">採用支援</span>
            </dt>
            <dd>人材採用の戦略立案から実行までを含めたコンサルティング支援</dd>
          </dl>
        </li>
        <li>
          <figure>
            <img src="/assets/images/front/service/img03.jpg" alt="" width="1080" height="720" decoding="async">
          </figure>
          <dl>
            <dt>
              <span class="en" lang="en" translate="no">BUSINESS SUPPORT</span>
              <span class="ja">新規事業支援</span>
            </dt>
            <dd>コンセプト・プロダクト設計から構築、新規事業立ち上げを支援</dd>
          </dl>
        </li>
      </ul>
      <a href="/service" class="module-base-button" hx-get="/service" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <span class="icon"></span>
        <span class="text">事業内容をみる</span>
      </a>
    </div>
  </section>

  <div class="module-image-block right">
    <div class="inner">
      <figure>
        <img src="/assets/images/front/image-block/img01.jpg" alt="" width="1080" height="720" decoding="async" data-gsap-scroll="fadeIn" data-gsap-duration="1.2" data-gsap-delay="0.2">
        <div class="reveal-mask" data-gsap-scroll="moveToRight" data-gsap-duration="1"></div>
      </figure>
    </div>
  </div>

  <section class="case">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">CASE</h2>
        <dl class="module-text-intro">
          <dt>
            実績が証明する、<br class="sp">
            確かな力。
          </dt>
          <dd>
            Work Scopeの事例をご紹介。
          </dd>
        </dl>
      </div>
      <?php if (!empty($case_list)) { ?>
        <ul class="module-card-list">
          <?php foreach ($case_list as $item) { ?>
            <li>
              <a
                href="<?php echo $item['permalink']; ?>"
                hx-get="<?php echo $item['permalink']; ?>"
                hx-swap="outerHTML transition:true show:window:top"
                hx-push-url="true"
                hx-target="[data-hx-target]"
                hx-select="[data-hx-target]">
                <figure>
                  <img src="<?php echo $item['thumbnail']['url']; ?>"
                    alt="<?php echo $item['thumbnail']['alt']; ?>"
                    width="<?php echo $item['thumbnail']['width']; ?>"
                    height="<?php echo $item['thumbnail']['height']; ?>"
                    decoding="async">
                </figure>
                <dl>
                  <dt>
                    <span class="category"><?php echo $item['category']; ?></span>
                    <time datetime="<?php echo $item['date_iso']; ?>"><?php echo $item['date_display']; ?></time>
                  </dt>
                  <dd><?php echo $item['title']; ?></dd>
                </dl>
              </a>
            </li>
          <?php } ?>
        </ul>
      <?php } else { ?>
        <p class="is-empty">現在、記事の投稿はありません。</p>
      <?php } ?>
      <a href="/case" class="module-base-button" hx-get="/case" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <span class="icon"></span>
        <span class="text">実績紹介をみる</span>
      </a>
    </div>
  </section>

  <section class="news">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="content-wrapper">
        <div class="intro">
          <h2 class="module-text-h2">NEWS</h2>
        </div>
        <?php if (!empty($news_list)) { ?>
          <ul class="news-list">
            <?php foreach ($news_list as $item) { ?>
              <li>
                <a
                  href="<?php echo $item['permalink']; ?>"
                  hx-get="<?php echo $item['permalink']; ?>"
                  hx-swap="outerHTML transition:true show:window:top"
                  hx-push-url="true"
                  hx-target="[data-hx-target]"
                  hx-select="[data-hx-target]">
                  <dl>
                    <dt>
                      <span class="category"><?php echo $item['category']; ?></span>
                      <time datetime="<?php echo $item['date_iso']; ?>"><?php echo $item['date_display']; ?></time>
                    </dt>
                    <dd>
                      <p><?php echo $item['title']; ?></p>
                    </dd>
                  </dl>
                </a>
              </li>
            <?php } ?>
          </ul>
          <?php wp_reset_postdata(); ?>
        <?php } else { ?>
          <p class="is-empty">現在、記事の投稿はありません。</p>
        <?php } ?>
      </div>
      <a href="/news" class="module-base-button" hx-get="/news" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <span class="icon"></span>
        <span class="text">一覧をみる</span>
      </a>
    </div>
  </section>

  <section class="career">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">CAREER</h2>
        <dl class="module-text-intro">
          <dt>
            私たちと一緒に働く<br class="sp" aria-hidden="true">
            メンバーを探しています。
          </dt>
          <dd>
            私たちはミッション・価値観への共感を何よりも大切に考え、一緒に働くメンバーを探しています。<br>
            ご興味をお持ちの方は、こちらから情報をご覧いただけます。
          </dd>
        </dl>
      </div>
      <a href="#" class="module-base-button other-tab">
        <span class="icon"></span>
        <span class="text">採用情報について</span>
      </a>
    </div>
  </section>
</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>