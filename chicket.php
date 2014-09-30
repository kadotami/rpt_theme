<?php
/*
Template Name: Chicket
*/
?>
<?php get_header(); ?>
<div class='title-image about-title'>
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/title/chicket.png" />
</div>
<h4>サービスを予約する</h4>
<div class="to-attention"><a href="/qa">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_qa.png">
</a></div>
<div class="implementation-list">
  <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/chicket/button1.png"></li>
  <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/chicket/button2.png"></li>
  <div class="clear-both"></div>
</div>
<?php
  if(have_posts()) :
    while(have_posts()) :
      the_post();
?>

<div class="post">
  <div class="page-contents">
    <?php the_content(); ?>
  </div>
</div>

<?php
  endwhile;
  else:
?>
        <p>ページが存在しません</p>

<?php
  endif;
?>
<?php get_footer(); ?>
</body>
</html>