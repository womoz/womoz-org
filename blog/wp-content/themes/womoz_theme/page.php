<?php get_header(); ?><!-- ouverture header.php -->
<div id="body-content">
	<?php get_sidebar(); ?>
	<div id="content">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID();?>">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class= "post_content">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
                <div class="message">
		<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
                </div>
		<?php else : ?>
		<p class="message">Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
		<?php endif; ?>
	</div>
</div>
</div><!-- fin du div id body-wrapper du header-->
<div id="body-footer">
	<?php get_footer(); ?>
</div>
</body>
</html>
