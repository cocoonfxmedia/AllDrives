<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php
	global $page, $paged;

	wp_title( '|', true, 'right' );


	bloginfo( 'name' );

	
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<meta name="google-site-verification" content="jY6co7AA5kli9waZetMsyFoKMa043l2yVkad-8rbr_g" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11448718-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561f6bd7099c19c2" async="async"></script>

</head>

<body <?php body_class(); ?>>

   
	<header itemscope itemtype="http://schema.org/LocalBusiness" itemref="_address3">
           <div class="row">

		<div class="small-12 medium-6 large-4 columns">	
			<div class="logo">
<a href="https://www.alldrivesandcontrols.co.uk/"><img id="_image1" itemprop="image" src="https://www.alldrivesandcontrols.co.uk/wp-content/uploads/logo.png" width="262" height="137" alt="Logo" title=""/></a>    
</div>
		</div>

<div class="small-12 medium-6 large-8 columns">
<div class="detailBox">
<p class="telephone">Call us: 
<span itemprop="telephone">01543 478887</span><br/>Or: <span itemprop="telephone">01543 271899</span>  </p>
 <?php get_search_form(); ?>
</div>
</div>
           </div>
        

</header>
<div class="menuWrap">
	<div class="row">		
		<div class="small-12 medium-12 large-12 columns">
		
		<nav class="mainnav">
			
			<a class='menuBtn'>Menu</a>
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>

 		</div>       
	</div>
</div>
    
	
 <?php if (is_front_page()) { ?>
 

    <div class="slider">
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
              <?php echo do_shortcode('[layerslider id="1"]'); ?>
            </div>
    </div>
    </div>

     <?php } ?>