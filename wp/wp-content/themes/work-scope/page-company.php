<?php

use WorkScope\Inc\Utils;

$page_config = [
  "page_path" => "company",
  "title" => "企業情報",
  "title_en" => "COMPANY",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>


<main class="company-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="message">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">MESSAGE</h2>
        <dl class="module-text-intro">
          <dt>
            人材に向き合い、<br>
            働きたくなる会社をふやす
          </dt>
          <dd>
            <p>
              気づけば10年以上、「人材」というテーマに向き合ってきました。<br>
              企業にとって、人材とは何か。当社では多くの人材サービスを提供していますが、お客様のビジネスがより成長できるように、支援させていただきます。当社なりの軸を持ち、あらゆる人々が充実した人生を送れる社会にしたいと本気で考えております。また、常に業界の常識にとらわれず、先頭を切ってチャレンジを続け、自ら雇用を創造する事にコミットメントしていきたいと考えています。
            </p>
            <p>
              ビジネスにおいて、人材の重要性はますます高まっています。<br>
              私たちはお客様と協力し、お客様のビジネスの成功を共に追求していきます。
            </p>
            <p>
              株式会社 Work Scope<br>
              代表取締役CEO 山田 太郎
            </p>
          </dd>
        </dl>
      </div>
      <figure>
        <img src="/assets/images/company/message/img01.jpg" alt="" width="1080" height="1620" decoding="async">
      </figure>
    </div>
  </section>

  <section class="our-value">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">OUR VALUE</h2>
      </div>
      <ul class="our-value-list">
        <li>
          <div class="icon">
            <figure>
              <img src="/assets/images/company/our-value/icon-team.svg" alt="" width="640" height="455" decoding="async">
            </figure>
          </div>
          <dl>
            <dt>個ではなくチームで勝つ</dt>
            <dd>
              私たちは、2人以上の体制で進めることを基本にしています。<br>
              チームで課題解決するのが、私たちのスタンスです。
            </dd>
          </dl>
        </li>
        <li>
          <div class="icon">
            <figure>
              <img src="/assets/images/company/our-value/icon-axis.svg" alt="" width="800" height="300" decoding="async">
            </figure>
          </div>
          <dl>
            <dt>誰もが自分なりの軸を持つ</dt>
            <dd>
              私たちは、自らが担うミッションに対し常にオーナーシップを持って仕事をし、<br>
              自分なりの軸をもち常にチャレンジを続けます。
            </dd>
          </dl>
        </li>
        <li>
          <div class="icon">
            <figure>
              <img src="/assets/images/company/our-value/icon-fire.svg" alt="" width="700" height="800" decoding="async">
            </figure>
          </div>
          <dl>
            <dt>どんな時でも仕事を楽しむ</dt>
            <dd>
              私たちは、同じ時間を過ごすなら楽しみたいと思っています。<br>
              だからこそ、想いで仕事をしたいと思います。「その仕事を楽しみたいか」を大切にします。
            </dd>
          </dl>
        </li>
      </ul>
    </div>
  </section>

  <div class="module-image-block right">
    <div class="inner">
      <figure>
        <img src="/assets/images/company/image-block/img02.jpg" alt="" width="1080" height="608" decoding="async" data-gsap-scroll="fadeIn" data-gsap-duration="1.2" data-gsap-delay="0.2">
        <div class="reveal-mask" data-gsap-scroll="moveToRight" data-gsap-duration="1"></div>
      </figure>
    </div>
  </div>

  <section class="company-profile">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">COMPANY PROFILE</h2>
      </div>
      <ul class="detail-list">
        <li>
          <dl>
            <dt>会社名</dt>
            <dd>株式会社 Work Scope</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>所在地</dt>
            <dd>
              <address>
                〒000-0000<br>
                東京都渋谷区〇〇町 0-00-0<br>
                テンプレートビル3F<br>
              </address>
            </dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>役員</dt>
            <dd>代表取締役CEO 山田 太郎</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>設立</dt>
            <dd>2020年1月7日</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>資本金</dt>
            <dd>1,000万円</dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>事業内容</dt>
            <dd>人材・採用関連事業</dd>
          </dl>
        </li>
      </ul>
    </div>
  </section>

</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>