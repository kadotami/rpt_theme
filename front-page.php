<?php get_header(); ?>
<div id="margin-area">
	<div id="container">
		<div id="contents">
			<div id="posts">
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
							<div class="post-meta">
								<?php echo get_the_date(); ?> 【<?php the_category(', ')?>】
							</div>
							<div class="post-body">
								<?php echo winexcerpt(140); ?>...
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
				
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
	<?php get_footer(); ?>
</body>
</html>