<?php get_header(); ?><!-- ouverture header.php -->

        <?php get_sidebar(); ?>

<div id="body-content">
	<div id="content">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID();?>">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="postmetadata">
					<?php the_time('j F Y') ?> par <?php the_author() ?> | 
					Cat&eacute;gorie: <?php the_category(', ') ?> | 
				</p>
				<div class= "post_content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="comments-template">
				<?php comments_template(); ?>
			</div>
		<?php endwhile; ?>
                <div class="message">
		<?php previous_post_link() ?> <?php next_post_link() ?>
                </div>
		<?php else : ?>
		<p class="message">Désolé, aucun article ne correspond à vos critères.</p>
		<?php endif; ?>
	</div>
</div><!-- fin du div id body-wrapper du header-->
<div id="body-footer">
	<?php get_footer(); ?>
</div>
</div>
</body>
</html>
