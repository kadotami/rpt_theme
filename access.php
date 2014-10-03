<?php
/*
Template Name: Access
*/
?>
<?php get_header(); ?>
<div class='title-image access-title'>
<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/title/access.png">
</div>

<div class='access-map-area'>
  <h4 class="fontN blue-sub-title">津和野までの移動と津和野での移動</h4>

  <h2 class="fontH">津和野までの移動方法</h2>
  <div class="separate-border"></div>
  <div class='google-map-area'>
    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13157.174308251262!2d131.77455409895023!3d34.47007603446008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355b2de25bce3b23%3A0xfe8cfa11294431e9!2z5bO25qC555yM6bm_6Laz6YOh5rSl5ZKM6YeO55S65b6M55Sw44Ot77yW77yV4oiS77yR!5e0!3m2!1sja!2sjp!4v1411346314963" frameborder="0" style="border:0"></iframe>
  </div>
  <p class="fontEL">
    １自動車の場合：車のアイコンを選択し、出発地をご入力ください<br>
    ２公共交通機関の場合：電車のアイコンを選択し、出発地をご入力ください
  </p>

  <div class="seg-bar access-bar">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/seg_bar.png">
  </div>

  <h2 class="fontH">津和野での移動</h2>
  <div class="separate-border"></div>
  <ul class='icon-description'>
    <li><span class="access-yellow-bg">黄色</span>=駐車場</li>
    <li><span class="access-red-bg">赤色</span>=受付事務所</li>
    <li><span class="access-blue-bg">青色</span>=津和野駅</li>
  </ul>
  <div class='map-image-area'>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/map.png">
  </div>
</div>

<?php get_footer(); ?>
</body>
</html>