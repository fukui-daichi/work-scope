<?php

use WorkScope\Inc\Utils;
?>

<footer class="site-footer">
  <div class="inner">
    <div class="content-wrapper">
      <div class="left">
        <a href="/" class="logo" hx-get="/" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">
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
            <li><a href="/company" hx-get="/company" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">企業情報</a></li>
            <li><a href="/service" hx-get="/service" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">事業内容</a></li>
            <li><a href="/case" hx-get="/case" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">実績紹介</a></li>
            <li><a href="/news" hx-get="/news" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">お知らせ</a></li>
            <li><a href="#" class="other-tab">採用情報</a></li>
            <li><a href="/contact" hx-get="/contact" hx-swap="outerHTML transition:true show:window:top" hx-push-url="true" hx-target="[data-hx-target]" hx-select="[data-hx-target]">お問い合わせ</a></li>
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