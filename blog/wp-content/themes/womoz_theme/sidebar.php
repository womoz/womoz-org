<div id="sidebar">
  <div id="left-sidebar">
  <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>  
	<h4><?php _e('Categories'); ?></h4>
	  <ul>
	    <?php wp_list_cats('sort_column=name'); ?>
	  </ul>
	<h4><?php _e('Archive'); ?></h4>
	  <ul>
	    <?php wp_get_archives('type=monthly&limit=5'); ?>
	  </ul>	  
	<h4><?php _e('Blogroll'); ?></h4>
	  <ul>
	    <?php wp_list_bookmarks('categorize=0&title_li=0&title_after=&title_before='); ?>		
	  </ul>
	<h4><?php _e('Meta'); ?></h4>
	  <ul>
	    <?php wp_register(); ?>
	      <li><?php wp_loginout(); ?></li>
	      <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
	      <?php wp_meta(); ?>
	  </ul>  
	<?php endif; ?>	    
  </div>

  <div id="right-sidebar">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>	    
	    <h4>Recent Posts</h4>
		<ul>
		  <?php get_archives('postbypost', 10); ?>
		</ul>			

	    <h4><?php _e('Tags'); ?></h4>
	    <ul>
		<?php wp_tag_cloud(''); ?>
	    </ul>
	<?php endif; ?>
  </div>
</div>
