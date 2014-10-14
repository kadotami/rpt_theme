<?php
/*
Template Name: Thanks
*/
?>
<?php get_header(); ?>
<div class='title-image about-title'>
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/title/ticket.png" />
</div>
<h3>予約が完了しました！</h3>
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