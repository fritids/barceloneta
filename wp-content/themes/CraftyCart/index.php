<?php get_header(); ?>
	
	<div class="large">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post-title">
			<p class="post-edit" style="float:right;"><?php edit_post_link('Edit','',''); ?></p>
			<h2>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>">
				<?php the_title(); ?></a>
			</h2>
			</div>
			
			<div class="post-footer">
			<h4>
				<span class="post-date"><?php the_time('F jS, Y'); ?></span>
				<span class="post-comments"><a href="<?php comments_link(); ?>" title="See comments for this post">
				<?php comments_number('Write Comment','1 Comment','% Comments'); ?></a></span>
				<span class="post-category"><?php the_category(' &middot; '); ?></span>
			</h4>
			</div>
			
			<div class="post-content">
			<?php the_content("Read more"); ?>
			</div>
		</div>

		<?php endwhile; ?>
		
		<div class="post-nav">
			<div class="previous"><?php previous_posts_link('&lsaquo; Previous Page') ?></div>
			<div class="next"><?php next_posts_link('Next Page &rsaquo;') ?></div>
		</div>

		<?php else : ?>
				<?php /* Error 404 */ ?>	
				<?php $filename = TEMPLATEPATH . '/404.php'; if (file_exists($filename)) { include($filename); } ?>
		<?php endif; ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>