<?php

use Fineasset\Inc\Utils\Utils;

$page_config = [
  "class" => "company",
  "title" => "会社案内",
  "title_en" => "Company",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="company">
    <div class="inner">
      <div class="representative">
        <h3>代表挨拶</h3>
        <dl>
          <dt>
            <figure>
              <div>
                <img src="/assets/images/front/company/img01.jpg" alt="" width="720" height="960" decoding="async">
              </div>
              <figcaption>
                <span class="position">株式会社Fine Asset 代表取締役</span>
                <span class="name">小辻 星</span>
              </figcaption>
            </figure>
          </dt>
          <dd>
            <span style="color: red;">※以下はダミーテキストです。</span><br>
            <p>株式会社Fine Assetは、幅広い金融サービスを通じて、お客様一人ひとりの資産形成を支援する総合アドバイジングカンパニーです。</p>
            <p>近年、金融環境は急速に変化し、資産運用に関する情報も複雑化しています。このような状況下で、お客様のニーズも多様化し、より専門的なアドバイスが求められるようになりました。Fine Assetでは、こうした変化に対応すべく、最新の金融知識と独自の分析手法を駆使し、お客様に最適な資産運用戦略をご提案しております。</p>
            <p>個人のお客様には、ライフステージに応じた資産形成プランの策定から、保険診断、退職金運用まで、包括的なサービスを提供しています。法人のお客様に対しては、企業の成長戦略に合わせた資金運用や、従業員の福利厚生プランの設計など、多角的なサポートを行っています。Fine Assetの強みは、豊富な金融商品知識と、お客様一人ひとりのニーズを深く理解する姿勢にあります。</p>
            <p>私たちは、お客様との信頼関係を大切にし、長期的な視点で資産形成をサポートすることで、より豊かな社会の実現に貢献してまいります。</p>
          </dd>
        </dl>
      </div>
      <div class="company-detail">
        <h3>会社概要</h3>
        <ul class="company-detail-list">
          <li>
            <dl>
              <dt>会社名</dt>
              <dd>株式会社Fine Asset</dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>設立年月日</dt>
              <dd>20XX年XX月XX日</dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>代表取締役</dt>
              <dd>小辻 星</dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>資本金</dt>
              <dd>XXX万円</dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>電話番号</dt>
              <dd>123-456-7890</dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>メールアドレス</dt>
              <dd>info@sample.com</dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>所在地</dt>
              <dd>
                <address>
                  <span class="post-num">〒 000-0000</span>
                  <span class="address">大阪府大阪市</span>
                </address>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>事業内容</dt>
              <dd>
                <ul class="service-list">
                  <li>資産形成コンサルティング</li>
                  <li>金融セミナーの設営</li>
                  <li>保険診断、見直し</li>
                  <li>ライフプランニング</li>
                </ul>
              </dd>
            </dl>
          </li>
        </ul>
        <dl>
      </div>
    </div>
  </section>
</main>

<?php Utils::get_component('footer'); ?>