<?php

use WorkScope\Inc\Utils;

$page_config = [
  "page_path" => "service",
  "title" => "事業内容",
  "title_en" => "SERVICE",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="service-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="business-model">
    <div class="inner">
      <div class="intro">
        <h2 class="module-text-h2">BUSINESS MODEL</h2>
        <dl class="module-text-intro">
          <dt>
            クライアントに<br>
            課題解決策と成長を
          </dt>
          <dd>
            <p>
              私たちは、組織・⼈事支援・採用支援・新規事業支援の事業を軸に幅広い事業を展開していきます。<br>
              長期的に伴走し、働くを支援するコンサルティングやサービスを展開し成長していきます。
            </p>
            <p>
              私たちは、ヒトとITのチカラで働く人たちを応援する企業です。働くすべての人を幸せにする支援を多角的に展開していきます。<br>
              採用／人事制度／DX推進／システム導⼊／新規事業企画／業務改善などをご⽀援しています。
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <section class="our-service">
    <div class="inner">
      <div class="intro">
        <h2 class="module-text-h2">OUR SERVICE</h2>
      </div>
      <ul class="our-service-list">
        <li>
          <dl>
            <dt>
              <span class="en" lang="en" translate="no">HR SUPPORT</span>
              <span class="ja">組織・⼈事支援</span>
            </dt>
            <dd>
              <p>
                経営目的の実現につながる組織・人事戦略の策定と、それを反映した人事制度設計・組織開発、さらにそれらの実行を支える人事機能構築などを多角的に支援します。お気軽にお問合せください。
              </p>
              <ul class="detail-list">
                <li>人事制度設計支援</li>
                <li>自社課題を踏まえて具体的な人事戦略支援</li>
                <li>人材戦略策定支援</li>
                <li>全般の改革プラン策定支援</li>
                <li>エンゲージメントサーベイ分析</li>
              </ul>
            </dd>
          </dl>
          <figure>
            <img src="/assets/images/service/our-service/img01.jpg" alt="" width="1080" height="1620" decoding="async">
          </figure>
        </li>
        <li>
          <dl>
            <dt>
              <span class="en" lang="en" translate="no">CAREER SUPPORT</span>
              <span class="ja">採用支援</span>
            </dt>
            <dd>
              <p>
                人材採用・組織開発の領域で、戦略立案から実行までを含めたコンサルティング支援をおこなっています。未来の価値を生み出す採用。その採用力を総合的に強化します
              </p>
              <ul class="detail-list">
                <li>・新卒採用コンサルティング</li>
                <li>・中途採用コンサルティング</li>
                <li>・会社説明会企画・制作</li>
                <li>・内定者フォロー企画・制作</li>
                <li>・採用活動伴走支援</li>
              </ul>
            </dd>
          </dl>
          <figure>
            <img src="/assets/images/service/our-service/img02.jpg" alt="" width="1080" height="720" decoding="async">
          </figure>
        </li>
        <li>
          <dl>
            <dt>
              <span class="en" lang="en" translate="no">BUSINESS SUPPORT</span>
              <span class="ja">新規事業支援</span>
            </dt>
            <dd>
              <p>
                コンセプト・プロダクト設計から構築、新規事業立ち上げ支援を行います。具体的なタスクやアプトプット創出、獲得した情報から可能性を広げるフィードバック活動を支援。詳細はサービスサイトへ。
              </p>
              <ul class="detail-list">
                <li>・市場調査、仮説検証支援</li>
                <li>・事業構想、企画支援</li>
                <li>・プロトタイプ設計支援</li>
                <li>・デザイン開発支援</li>
                <li>・ブランディング支援</li>
              </ul>
            </dd>
          </dl>
          <figure>
            <img src="/assets/images/service/our-service/img03.jpg" alt="" width="1080" height="720" decoding="async">
          </figure>
        </li>
      </ul>
    </div>
  </section>

  <section class="case">
    <div class="inner">
      <div class="intro">
        <h2 class="module-text-h2">CASE</h2>
      </div>
      <ul class="case-list module-card-list">
        <li>
          <a href="#">
            <figure>
              <img src="/assets/images/front/dammy/img01.webp" alt="" width="242" height="161" decoding="async">
            </figure>
            <dl>
              <dt>
                <span class="tag">新規事業支援</span>
                <time datetime="2023-10-15">2023.10.15</time>
              </dt>
              <dd>コンセプト・コミュニケーション設計から構築し、新規事業立ち上げを支援</dd>
            </dl>
          </a>
        </li>
        <li>
          <a href="#">
            <figure>
              <img src="/assets/images/front/dammy/img02.webp" alt="" width="600" height="400" decoding="async">
            </figure>
            <dl>
              <dt>
                <span class="tag">組織・⼈事支援</span>
                <time datetime="2023-10-14">2023.10.14</time>
              </dt>
              <dd>課題解決につながる組織・⼈事戦略の策定を支援</dd>
            </dl>
          </a>
        </li>
        <li>
          <a href="#">
            <figure>
              <img src="/assets/images/front/dammy/img03.webp" alt="" width="600" height="400" decoding="async">
            </figure>
            <dl>
              <dt>
                <span class="tag">採用支援</span>
                <time datetime="2023-10-13">2023.10.13</time>
              </dt>
              <dd>事業拡大に伴う、中途採用の体制構築をご支援</dd>
            </dl>
          </a>
        </li>
      </ul>
      <a href="/case" class="module-base-button" hx-get="/case" hx-swap="outerHTML transition:true" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
        <span class="icon"></span>
        <span class="text">実績紹介をみる</span>
      </a>
    </div>
  </section>

</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>