<?php

use Fineasset\Inc\Utils\Utils;

$page_config = [
  "class" => "about",
  "title" => "Fine Assetについて",
  "title_en" => "About Us",
];

Utils::get_component('head', $page_config);
Utils::get_component('header');
?>

<main>
  <?php Utils::get_component('lower-header', $page_config); ?>

  <section class="about">
    <div class="inner">
      <ol class="about-list">
        <li class="mission">
          <figure>
            <img src="https://dummyimage.com/640x4:3/" alt="" width="640" height="480" decoding="async">
          </figure>
          <div class="content-wrapper">
            <h2>Mission - 私たちの使命</h2>
            <p>
              お客様の人生における重要な決断に、確かな道標を提供すること。それが私たちの使命です。<br>
              資産形成やライフプランニングは、単なる数字の計算ではありません。それは、お客様の夢や目標、そして大切な人々との未来を形作る重要な要素です。私たちFine Assetは、その道のりを共に歩む専門家集団として、確かな知識と誠実なサービスを提供します。
            </p>
          </div>
        </li>

        <li class="value">
          <figure>
            <img src="https://dummyimage.com/640x4:3/" alt="" width="640" height="480" decoding="async">
          </figure>
          <div class="content-wrapper">
            <h2>Value - 私たちの価値観</h2>
            <p>
              最新の知識と幅広い選択肢から、最適なソリューションを導き出すこと。それが私たちの価値観です。<br>
              私たちは常に進化する金融市場の中で、専門性と多様性を大切にしています。一時的な利益ではなく、お客様一人ひとりの状況や目標に合わせた、真に価値のある提案を追求し続けます。そして、その提案を実現するための確かな知識と経験を持つ専門家として、お客様の長期的なパートナーであり続けます。
            </p>
          </div>
        </li>

        <li class="approach">
          <figure>
            <img src="https://dummyimage.com/640x4:3/" alt="" width="640" height="480" decoding="async">
          </figure>
          <div class="content-wrapper">
            <h2>Approach - 私たちのアプローチ</h2>
            <p>
              綿密な分析と丁寧なコミュニケーションを通じて、最適な解決策を見出すこと。それが私たちのアプローチです。<br>
              私たちは、お客様との対話を何よりも大切にしています。現状の正確な把握から、将来の目標設定、そしてそこに至るまでの具体的なプランニングまで。一つひとつのステップを、お客様と共に確実に進んでいきます。状況の変化があっても、定期的な見直しと柔軟な対応で、常に最適な道筋を提案し続けます。
            </p>
          </div>
        </li>

        <li class="promise">
          <figure>
            <img src="https://dummyimage.com/640x4:3/" alt="" width="640" height="480" decoding="async">
          </figure>
          <div class="content-wrapper">
            <h2>Promise - お客様への約束</h2>
            <p>
              お客様の利益を最優先に考え、誠実なサービスを提供し続けること。それが私たちの約束です。<br>
              私たちは、常にお客様の立場に立って考え、行動します。最新の金融知識と幅広い選択肢の中から、お客様にとって最適な提案を行い、分かりやすい説明と丁寧なサポートを徹底します。また、お預かりした情報の厳格な管理を行い、信頼される金融パートナーとしての責務を全うします。
            </p>
          </div>
        </li>
      </ol>
    </div>
  </section>
</main>

<?php Utils::get_component('footer'); ?>