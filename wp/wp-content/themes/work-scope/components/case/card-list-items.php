<?php foreach ($case_list as $case) { ?>
  <li>
    <a
      href="<?php echo $case['permalink']; ?>"
      hx-get="<?php echo $case['permalink']; ?>"
      hx-swap="outerHTML transition:true"
      hx-push-url="true"
      hx-target="[data-hx-target]"
      hx-select="[data-hx-target]">
      <figure>
        <img src="<?php echo $case['thumbnail']['url']; ?>" alt="<?php echo $case['thumbnail']['alt']; ?>" width="<?php echo $case['thumbnail']['width']; ?>" height="<?php echo $case['thumbnail']['height']; ?>" decoding="async">
      </figure>
      <dl>
        <dt>
          <span class="category"><?php echo $case['category']; ?></span>
          <time datetime="<?php echo $case['date_iso']; ?>"><?php echo $case['date_display']; ?></time>
        </dt>
        <dd><?php echo $case['title']; ?></dd>
      </dl>
    </a>
  </li>
<?php } ?>