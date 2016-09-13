<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div class="row">

<div class="small-12 medium-8 large-8 columns">
<div id="left">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="page-title">
	<h1><?php the_title(); ?></h1>
	</div>

	<?php the_content(); ?>

<div class="addthis_sharing_toolbox"></div>
	</article>

</div>
</div>

<div class="small-12 medium-4 large-4 columns">
<div id="right">

<div class="services">
<p>The Unitronics PLC HMI app gives you access to key information, including product catalogs, specifications, success stories, presentations and webinars. Download the iPhone version <a href="https://itunes.apple.com/us/app/unitronics-plc-hmi/id748246920?mt=8" target="_blank">here</a> and the Android version <a href="https://play.google.com/store/apps/details?id=com.unitronics.catalog" target="_blank">here</a>.</p>
</div>

       <div class="services">
        <h2>How can we help?</h2>
        <?php echo do_shortcode('[contact-form-7 id="2227" title="Call To Action"]'); ?>
        
        
    </div>


 	
<div class="services">
	<h2>Catalogues</h2>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/New-Unitonics-Catalogue-May-2015.pdf" title="2015 Unitronics Catalogue">Unitronics Catalogue 2015</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/unitronics-catalogue.pdf" title="Unitronics Catalogue">Unitronics Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/unistream-catalogue.pdf" title="Unistream Catalogue">Unistream Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/nanotec-catalogue.pdf" title="Nanotec Catalogue">Nanotec Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/weg-catalogue.pdf" title="WEG Eta Plus Catalogue">WEG Eta Plus Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/weg-catalogue-2.pdf" title="WEG Standard Range">WEG Standard Range</a></li>
 </div>

</div>
</div>
<!-- #post-<?php the_ID(); ?> -->
</div>