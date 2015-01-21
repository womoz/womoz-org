<?php get_header(); ?>
<div id="body-content"> 
<?php get_sidebar(); ?>
	<div id="content">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID();?>">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="postmetadata">
					<?php the_time('j F Y') ?> by <?php the_author() ?> | 
					Category: <?php the_category(', ') ?> | 
					<?php comments_popup_link('No comment', '1 comment', '% Comments'); ?> <?php edit_post_link('Editer', ' &#124; ', '');?>
				</p>
				<div class= "post_content">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
			<div class="navigation">
				<?php posts_nav_link(' - ','Next page','Last page'); ?>
			</div>
		<?php else : ?>
			<p class="message">Sorry, but you are searching for something that doesn't exist.</p>
		<?php endif; ?>
	</div>
</div>
<div id="body-footer">
	<?php get_footer(); ?>
</div>
</div>
</body>
</html>
