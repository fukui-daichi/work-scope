<?php

use Fineasset\Inc\Utils\Utils;

$page_config = [
  "class" => "front"
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main>
  <div class="mv">
    <div class="inner">
      <h1 data-gsap-timeline="textReveal">
        <span>幅広い選択肢から、</span>
        <span>より良質なご提案を。</span>
      </h1>
      <div class="splide" role="group">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <picture>
                <source srcset="/assets/images/front/mv/sp/slide01.jpg" media="(max-width: 768px)" />
                <img src="/assets/images/front/mv/slide01.jpg" alt="" width="1920" height="1080" decoding="async">
              </picture>
            </li>
            <li class="splide__slide">
              <picture>
                <source srcset="/assets/images/front/mv/sp/slide02.jpg" media="(max-width: 768px)" />
                <img src="/assets/images/front/mv/slide02.jpg" alt="" width="1920" height="1080" decoding="async">
              </picture>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <section class="about">
    <div class="inner">
      <h2>
        <span style="color: red;">※以下はダミーテキストです。</span><br>
        株式会社Fine Assetは、幅広い金融サービスを通じて、<br class="pc" aria-hidden="true">
        お客様一人ひとりのニーズに合わせた<br class="pc" aria-hidden="true">
        資産形成をサポートする企業です。<br>
        資産形成コンサルティングや保険診断、<br class="pc" aria-hidden="true">
        金融セミナーの開催、ライフプランニングなど、<br aria-hidden="true">
        多角的なアプローチで顧客の財務目標達成を支援します。<br>
        「より良質なご提案を」という理念のもと、専門知識と豊富な選択肢を活かし、お客様の人生設計に寄り添いながら、最適な金融ソリューションを提供することを使命としています。
      </h2>
      <a href="/about" class="mod-base-button">View More</a>
    </div>
  </section>

  <section class="service">
    <div class="inner">
      <div class="head">
        <div class="left">
          <hgroup>
            <h2>事業案内</h2>
            <p translate="no" aria-hidden="true">Service</p>
          </hgroup>
          <p>Fine Assetの展開するサービスをご紹介します。</p>
        </div>
        <div class="right pc">
          <a href="/service" class="mod-base-button">View More</a>
        </div>
      </div>

      <ul class="service-list">
        <li data-gsap="fadeInBottom">
          <a href="/service/#asset-formation">
            <p>資産形成<br>コンサルティング</p>
            <picture>
              <source srcset="/assets/images/front/service/sp/img01.jpg" media="(max-width: 768px)" />
              <img src="/assets/images/front/service/img01.jpg" alt="" width="1200" height="420" decoding="async">
            </picture>
            <span class="icon-arrow"></span>
          </a>
        </li>
        <li data-gsap="fadeInBottom">
          <a href="/service/#financial-seminar">
            <p>金融セミナーの設営</p>
            <img src="/assets/images/front/service/img02.jpg" alt="" width="720" height="720" decoding="async">
            <span class="icon-arrow"></span>
          </a>
        </li>
        <li data-gsap="fadeInBottom">
          <a href="/service/#insurance-consulting">
            <p>保険診断、見直し</p>
            <img src="/assets/images/front/service/img03.jpg" alt="" width="720" height="720" decoding="async">
            <span class="icon-arrow"></span>
          </a>
        </li>
        <li data-gsap="fadeInBottom">
          <a href="/service/#life-planning">
            <p>ライフプランニング</p>
            <img src="/assets/images/front/service/img04.jpg" alt="" width="720" height="720" decoding="async">
            <span class="icon-arrow"></span>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="company">
    <div class="inner">
      <div class="head">
        <div class="left">
          <hgroup>
            <h2>会社案内</h2>
            <p translate="no" aria-hidden="true">Company</p>
          </hgroup>
          <p>Fine Assetについてご紹介します。</p>
        </div>
        <div class="right">
          <a href="/company" class="mod-base-button">View more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="inner">
      <div class="head">
        <div class="left">
          <hgroup>
            <h2>お問い合わせ</h2>
            <p translate="no" aria-hidden="true">Contact</p>
          </hgroup>
          <p>事業やサービス等について、<br class="sp" aria-hidden="true">お気軽にお問い合わせください。</p>
        </div>
        <div class="right">
          <a href="/contact" class="mod-base-button">お問い合わせフォーム</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php Utils::get_component('footer'); ?>