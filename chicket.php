<?php
/*
Template Name: Chicket
*/
?>
<?php get_header(); ?>
<div class='title-image about-title'>
<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/title/chicket-title.png" />
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