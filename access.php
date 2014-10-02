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
  <h2 class="fontH">津和野までの移動方法</h2>
  <div class='google-map-area'>
    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13157.174308251262!2d131.77455409895023!3d34.47007603446008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355b2de25bce3b23%3A0xfe8cfa11294431e9!2z5bO25qC555yM6bm_6Laz6YOh5rSl5ZKM6YeO55S65b6M55Sw44Ot77yW77yV4oiS77yR!5e0!3m2!1sja!2sjp!4v1411346314963" frameborder="0" style="border:0"></iframe>
  </div>

  <div class="seg-bar access-bar">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/seg_bar.png">
  </div>

  <h2 class="fontH">津和野での移動</h2>
  <ul class='icon-description'>
    <li>黄色=受付事務所</li>
    <li>赤色=駐車場</li>
    <li>青色=津和野駅</li>
  </ul>
  <div class='map-image-area'>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/map.png">
  </div>
</div>

<?php get_footer(); ?>
</body>
</html>