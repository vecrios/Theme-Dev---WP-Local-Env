<?php get_header(); ?>
<div id="main">
	<div id="content">
		<!-- <h1>Main Area</h1> -->
		<!-- IF POSTS, LIST THEM -->
		<?php if (have_posts()) :
			while (have_posts()) :
		the_post(); ?>
		<div class="post">
			<p class="title"><?php the_title(); ?></p>
			<div class="postInfo"><?php the_time('F jS, Y') ?></div>
			<div class="postContent">
				<?php the_content(__('(more...)')); ?>
			</div>
			<hr>
		</div>
			<?php endwhile;
			else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>