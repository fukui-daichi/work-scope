<?php

use Fineasset\Inc\Utils\Utils;

$page_config = [
  "class" => "service",
  "title" => "事業案内",
  "title_en" => "Service",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="service">
    <div class="inner">
      <ul class="service-list">
        <li id="asset-formation">
          <div class="left">
            <h2>資産形成コンサルティング</h2>
            <p>お客様の年齢や収入、リスク許容度などを踏まえた上で、中長期的な資産形成の道筋をご提案。投資信託や株式投資など、様々な金融商品の特徴と活用方法をわかりやすく解説し、着実な資産形成をサポートいたします。お気軽にお問合せください。</p>
            <ul class="detail-list">
              <li>ポートフォリオ分析・構築</li>
              <li>投資方針の策定支援</li>
              <li>定期的な運用状況確認</li>
              <li>市場動向レポート提供</li>
              <li>リバランス提案</li>
            </ul>
          </div>
          <div class="right pc">
            <figure>
              <img src="/assets/images/service/img01.jpg" alt="" width="480" height="480" decoding="async">
            </figure>
          </div>
        </li>
        <li id="financial-seminar">
          <div class="left">
            <h2>金融セミナー設営</h2>
            <p>金融リテラシーの向上を目的とした、実践的で分かりやすいセミナーを企画・運営いたします。基礎知識の習得から実践的な投資手法まで、参加者様のニーズに合わせた内容で開催し、確かな知識と判断力の習得をサポートいたします。お気軽にお問合せください。</p>
            <ul class="detail-list">
              <li>初心者向け資産形成講座</li>
              <li>投資手法実践セミナー</li>
              <li>マーケット分析講座</li>
              <li>少人数制ワークショップ</li>
              <li>オンラインセミナー開催</li>
            </ul>
          </div>
          <div class="right pc">
            <figure>
              <img src="/assets/images/service/img02.jpg" alt="" width="480" height="480" decoding="async">
            </figure>
          </div>
        </li>
        <li id="insurance-consulting">
          <div class="left">
            <h2>保険診断・見直し</h2>
            <p>現在ご加入中の保険内容を総合的に分析し、必要な保障を過不足なく確保するためのアドバイスを提供いたします。家族構成やライフステージの変化に応じて、最適な保障内容へと見直しのサポートをいたします。お気軽にお問合せください。</p>
            <ul class="detail-list">
              <li>保険証券の診断・分析</li>
              <li>世帯収支シミュレーション</li>
              <li>保障の見直し提案</li>
              <li>契約見直しサポート</li>
              <li>定期的な保障内容確認</li>
            </ul>
          </div>
          <div class="right pc">
            <figure>
              <img src="/assets/images/service/img03.jpg" alt="" width="480" height="480" decoding="async">
            </figure>
          </div>
        </li>
        <li id="life-planning">
          <div class="left">
            <h2>ライフプランニング</h2>
            <p>人生の重要なライフイベントに向けた資金計画を、お客様と一緒に考え、策定いたします。結婚・出産・住宅購入・教育・老後など、それぞれのステージに必要な資金を算出し、実現可能な資金計画をご提案いたします。お気軽にお問合せください。</p>
            <ul class="detail-list">
              <li>ライフイベント資金設計</li>
              <li>教育資金プランニング</li>
              <li>住宅取得計画策定</li>
              <li>老後資金シミュレーション</li>
              <li>資金計画の定期見直し</li>
            </ul>
          </div>
          <div class="right pc">
            <figure>
              <img src="/assets/images/service/img04.jpg" alt="" width="480" height="480" decoding="async">
            </figure>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php Utils::get_component('footer'); ?>