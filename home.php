<?php get_header(); ?>
<div class='title-image news-title'>
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/title/news.png">
</div>
<h3 class="fontN">ROLE PLAYING TSUWANO の最新情報</h3>
<table class="news-post">
<?php
	if(have_posts()) :
		while(have_posts()) :
			the_post();
?>
	<tr class="news-post-list">
		<td class="post-image">
			<?php if (has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(100,100)); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/no_image.png" width="100" height="100"></a>
			<?php endif; ?>
		</td>
		<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
		<!-- <div class="post-body">
			<?php the_excerpt(); ?>
		</div> -->
	</tr>
<?php
	endwhile;
	else:
?>

<p>投稿が存在しません</p>

<?php
	endif;
?>
</table>
<div class="post-navigation">
	<div class="prev"><?php previous_posts_link();?></div>
	<div class="next"><?php next_posts_link();?></div>
</div>

<ul class="bottom-menu">
	<li><a href="/story"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_story"></a></li>
	<li><a href="/chicket"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_chicket"></a></li>
	<div class="clear-both"></div>
</ul>

<?php get_footer(); ?>
</body>
</html>