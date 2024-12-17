<?php

use WorkScope\Inc\Utils;
use WorkScope\Inc\Service\Service\Case\CaseArchiveService;

$case_list = CaseArchiveService::get_case_list();

$page_config = [
  "page_path" => "service",
  "title" => "事業内容",
  "title_en" => "SERVICE",
  "description" => "企業の課題解決に向けた3つの中核サービス：組織・人事支援、採用支援、新規事業支援。各分野のプロフェッショナルが、お客様のビジネスの成長を支援します。",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main class="service-page" data-hx-target>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="business-model">
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">BUSINESS MODEL</h2>
        <dl class="module-text-intro">
          <dt>
            企業の持続的な成長を、<br>
            総合的に支援する。
          </dt>
          <dd>
            <p>
              Work Scopeは、組織・人事支援、採用支援、新規事業支援を軸に、企業の成長をトータルでサポートします。<br>
            </p>
            <p>
              私たちは、人材と技術の力を活用し、クライアント企業の本質的な課題解決に取り組みます。採用戦略の立案から人事制度の設計、DX推進、システム導入、新規事業開発まで、長期的なパートナーとして伴走し、企業の持続的な成長を支援します。
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <section class="our-service">
    <div class="inner" data-gsap-scroll="fadeIn">
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
                経営ビジョンの実現に向けた、実効性の高い組織・人事戦略を策定します。企業の成長フェーズに応じた人事制度の設計から組織開発まで、包括的な支援を提供します。
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
                企業の未来を創る採用戦略の立案から実行まで、一貫した採用支援を提供します。採用市場の分析から候補者の発掘、採用プロセスの設計まで、採用力を総合的に強化します。
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
                市場分析からプロダクト設計、事業立ち上げまで、新規事業開発を包括的に支援します。確かな分析と実践的なフィードバックを通じて、新たな事業機会の創出をサポートします。
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
    <div class="inner" data-gsap-scroll="fadeIn">
      <div class="intro">
        <h2 class="module-text-h2">CASE</h2>
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

</main>

<?php
Utils::get_component('contact-induction');
Utils::get_component('footer');
?>