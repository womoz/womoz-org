<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="MY RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
 
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/ico" />
</head>
<body>
	<div id="body-wrapper">
		<div id="header_topborder">
			<div id="mozilla_header">
				<ul>
					<li><a class="first" href="http://www.womoz.org">WoMoz.org</a></li>
					<li><a href="http://www.womoz.org/blog">WoMoz Blog</a></li>
					<li><a href="http://www.womoz.org/wiki">WoMoz Wiki</a></li>
					<li><a class="last" href="http://lists.womoz.org/mailman/listinfo/womoz">WoMoz Mailing List</a></li>
				</ul>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
		</div>
		<br style="clear:both" />
		<div id="title_header">
			<h1><a href="<?php bloginfo('url');?>">Women &amp; Mozilla</a></h1>
		</div>
