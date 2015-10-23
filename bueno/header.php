<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style2.css" media="screen" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="http://fonts.googleapis.com/css?family=Anton" rel="stylesheet" type="text/css" />
		
		
	<!--[if IE 6]>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/pngfix.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/menu.js"></script>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" />
    <![endif]-->	
	
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" />
	<![endif]-->
   
<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/materialize.js"></script>
</head>

<script>
$( document ).ready(function(){
 $(".button-collapse").sideNav();
});
</script>	

<body <?php body_class(); ?>>
<nav>
    <div class="nav-wrapper">
		<div class="right hide-on-med-and-down">
			<a class="btn waves-effect waves-light orange lighten-3 deslocamento_btn" href="#">Estou Interessado</a>
		</div>
	    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<li id="item-id">Menu: </li>' ) ); ?>		
        </ul>
		<ul class="side-nav" id="mobile-demo">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<li id="item-id">Menu: </li>' ) ); ?> 
		</ul>	  
    </div>
</nav>


	<div class="row">
	  <h1 class="center">			
			<a class="brand-logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><img class="title" src="<?php if ( get_option('woo_logo') <> "" ) { echo get_option('woo_logo'); } else { bloginfo('template_directory'); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a>
	  </h1>
	</div>
	

<div id="container"> 	
       
	</div><!-- /#header -->