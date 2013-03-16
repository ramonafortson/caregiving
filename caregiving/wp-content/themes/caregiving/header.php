<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<link href="<?php echo get_template_directory_uri()?>/js/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo( 'template_url' ); ?>/fonts.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.sudoSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function(){	
			var sudoSlider = $("#slider").sudoSlider();
			
		});	
	</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if(is_front_page() || is_home()){ echo "id='homeclasss'"; } ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</hgroup>
        
        <div class="toplink-box">
        	
            <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'nav-menu' ) ); ?>
        
        </div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'navi', 'menu_class' => 'nav-menu' ) ); ?>
		
        </nav><!-- #site-navigation -->
        
        <div class="social-box">
        	
			<?php if ( is_active_sidebar( 'social' ) ) : ?>
                    <?php dynamic_sidebar( 'social' ); ?>
            <?php endif; ?>        
      
        </div>
        
        <div class="login-box">
        	
         <?php if (!is_user_logged_in() ) { ?>
            
             <?php wp_nav_menu( array( 'theme_location' => 'register', 'menu_class' => 'nav-menu' ) ); ?>

			<?php } ?>
            
       
       </div>
       
        <div class="blog-box">
			
			<?php if ( is_active_sidebar( 'news' ) ) : ?>
                    <?php dynamic_sidebar( 'news' ); ?>
            <?php endif; ?>              
        </div>
        

	</header><!-- #masthead -->

	<div id="main" class="wrapper">