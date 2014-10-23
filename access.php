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
    <iframe class='google-map' src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3289.2002874464742!2d131.773696!3d34.472443!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355b2e0918211acf%3A0x52640e9a19012b2a!2z5rSl5ZKM6YeO6aeF!5e0!3m2!1sja!2sjp!4v1414045584848" frameborder="0" style="border:0"></iframe></iframe>
  </div>
  <p class="fontEL">
    「Google マップで見る」から地図にアクセスし、ルート<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/access/route.png">を選択して現在地(出発地点)と移動方法を選択してください。<br>
    ※指定してある地点は受付事務所ではございません。受付までは、下部の「津和野までの移動」を参照してください。
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
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/access/map.png">
  </div>
  <p class="fontEL">
    ※受付事務所は、津和野駅を出てすぐの大通りを、そのまま右に 200m 程直進した右手にございます。
  </p>
</div>

<?php get_footer(); ?>
</body>
</html>