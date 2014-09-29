<?php
/*
Template Name: Form
*/
?>
<?php get_header(); ?>


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