<?php get_header(); ?><!-- ouverture header.php -->
<div id="body-content">
	<div id="content">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID();?>">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="postmetadata">
					<?php the_time('j F Y') ?> par <?php the_author() ?> | 
					Cat&eacute;gorie: <?php the_category(', ') ?> | 
					<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', '');?>
				</p>
				<div class= "post_content">
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php endwhile; ?>
		<?php else : ?>
                <div class="message">
		<h3>Aucun article trouv&eacute;. Essayer une autre recherche ?</h3>
                </div>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
</div><!-- fin du div id body-wrapper du header-->
<div id="body-footer">
	<?php get_footer(); ?>
</div>
</body>
</html>
