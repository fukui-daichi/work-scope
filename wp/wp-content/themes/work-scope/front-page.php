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
          働く人の可能性を、<br>
          最大限に。
        </h1>
        <p lang="en" translate="no">MAXIMIZING HUMAN POTENTIAL AT WORK.</p>
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
            すべての組織と人材に、<br>
            最適な成長の道筋を
          </dt>
          <dd>
            私たちは、人とテクノロジーの力で組織と人材の可能性を広げるプロフェッショナル集団です。<br class="sp">
            採用、人事制度設計、DX推進、システム導入から新規事業支援まで、企業の持続的な成長をトータルでサポートします。
          </dd>
        </dl>
        <a href="/company" class="module-primary-button" hx-get="/company" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
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
            組織の進化を、<br class="sp">
            多角的に支援する。
          </dt>
          <dd>
            Work Scopeは、組織と人材の課題に応じた最適なソリューションを提供します。
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
            <dd>データに基づく戦略立案と、実効性の高い組織・人事制度の構築を支援</dd>
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
            <dd>採用戦略の策定から実行まで、企業の成長に必要な人材獲得を支援</dd>
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
            <dd>市場分析からプロダクト設計、事業化までの一貫した新規事業支援</dd>
          </dl>
        </li>
      </ul>
      <a href="/service" class="module-primary-button" hx-get="/service" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
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
            実績が示す、<br class="sp">
            確かな支援力。
          </dt>
          <dd>
            Work Scopeが実現してきた変革の軌跡をご紹介します。
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
      <a href="/case" class="module-primary-button" hx-get="/case" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
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
      <a href="/news" class="module-primary-button" hx-get="/news" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
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
            私たちは『働く』を変えていくという情熱を共有できる仲間を探しています。<br>
            組織と人材の可能性を最大限に引き出す、そんな挑戦に共感いただける方はぜひご覧ください。
          </dd>
        </dl>
      </div>
      <a href="#" class="module-primary-button other-tab">
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