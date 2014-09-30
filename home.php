<?php get_header(); ?>
<div class='title-image news-title'>
<img src="/assets/images/news-title.png">
</div>
<h3 class="fontN">ROLE PLAYING TSUWANO の最新情報</h3>
<?php
	if(have_posts()) :
		while(have_posts()) :
			the_post();
?>

<div class="post">
	<div class="post-header">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="post-contents">
		<div class="post-image">
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail(array(100,100)); ?>
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100">
			<?php endif; ?>
		</div>
		<div class="post-body">
			<?php the_excerpt(); ?>
		</div>
	</div>
</div>
<?php
	endwhile;
	else:
?>

<p>投稿が存在しません</p>

<?php
	endif;
?>
<div class="navigation">
	<div class="prev"><?php previous_posts_link();?></div>
	<div class="next"><?php next_posts_link();?></div>
</div>

<ul class="bottom-menu">
	<li><a href="/story"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_story"></a></li>
	<li><a href="/chicket"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_chicket"></a></li>
</ul>

<?php get_footer(); ?>
</body>
</html>