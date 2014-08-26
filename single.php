<?php get_header(); ?>
<div id="margin-area">
	<div id="container">
		<div id="contents">
			<?php
				if(have_posts()) :
					while(have_posts()) :
						the_post();
			?>

				<div class="single-post">
					<div class="post-header">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-meta">
							<?php echo get_the_date(); ?> 【<?php the_category(', ')?>】
						</div>
					</div>
					<div class="post-contents">
							<?php the_content(); ?>
					</div>
				</div>

				<div class="navigation">
					<div class="prev"><?php previous_post_link();?></div>
					<div class="next"><?php next_post_link();?></div>
				</div>

				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					endwhile;
					else:
				?>

				<p>投稿が存在しません</p>

				<?php
				endif;
				?>

				<div id="comments">

				</div><!-- comments -->
		</div>
			<?php get_sidebar(); ?>
	</div>
</div>
	<?php get_footer(); ?>
</body>
</html>