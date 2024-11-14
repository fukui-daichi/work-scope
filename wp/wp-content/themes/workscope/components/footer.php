<?php

use WorkScope\Inc\Utils\Utils;
?>

<footer class="site-footer">
  <div class="inner">
    <div class="content-wrapper">
      <div class="left">
        <a href="/" class="logo">
          <svg>
            <use href="#site-logo-white" />
          </svg>
        </a>
        <div class="company-detail">
          <p>株式会社Work Scope</p>
          <address>
            〒000-0000<br>
            大阪府大阪市〇〇区 1-2-3<br>
            テンプレートビル8F
          </address>
        </div>
      </div>
      <div class="right">
        <nav>
          <ul class="navlist">
            <li><a href="/company">企業情報</a></li>
            <li><a href="/service">事業内容</a></li>
            <li><a href="/case">実績紹介</a></li>
            <li><a href="/news">お知らせ</a></li>
            <li><a href="#" class="other-tab">採用情報</a></li>
            <li><a href="/contact">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="legal-wrapper">
      <p class="copy">&copy; Work Scope Inc.</p>
    </div>
  </div>
</footer>

<?php
Utils::get_component('symbol');
wp_footer();
?>

</body>

</html>