<?php

use WorkScope\Inc\Utils;

$page_config = [
  "page_path" => "company",
  "title" => "企業情報",
  "title_en" => "COMPANY",
  "description" => "人と組織の可能性を追求するWork Scopeの企業情報をご紹介。私たちのミッション、価値観、そして目指す未来についてお伝えします。",
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
            人と組織の可能性を追求し、<br>
            働く喜びを創造する。
          </dt>
          <dd>
            <p>
              創業以来、私たちは『人材』という無限の可能性を持つ存在と向き合ってきました。
              企業にとって人材とは、単なるリソースではなく、成長と革新の源泉です。Work Scopeは、独自の視点とソリューションで、クライアント企業の持続的な成長をサポートしています。<br>
              私たちは、すべての人が自分らしく輝ける職場づくりを通じて、より豊かな社会の実現に貢献したいと考えています。
            </p>
            <p>
              ビジネス環境が急速に変化する今、企業の競争力の核となるのは間違いなく「人材」です。私たちはこれからも、クライアントと共に歩み、共に成長し、新しい価値を創造し続けます。
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
              私たちは、多様な視点とスキルを持つプロフェッショナルによる<br aria-hidden="true">
              チーム体制で課題に取り組みます。<br>
              一人ひとりの強みを活かし、<br aria-hidden="true">
              より大きな価値を生み出すことを目指しています。
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
              私たちは、それぞれが確固たる信念と専門性を持ち、<br aria-hidden="true">担当するプロジェクトに全力で取り組みます。<br>
              常に主体性を持ち、新しい可能性に挑戦し続けることを大切にしています。
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
              私たちは、情熱を持って仕事に取り組むことで、<br aria-hidden="true">より大きな価値を生み出せると信じています。<br>
              だからこそ、常に前向きな姿勢で、仕事を通じた成長と喜びを追求します。
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