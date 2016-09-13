<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
<?php if (!is_page('news') && is_front_page()) { ?>
<div class="boxWrap">
<div class="row">


</div>

 </div>   
</div>

   
    
    <?php } ?>
    
<div class="row">

<div class="small-12 medium-7 large-9 columns">     
<div id="page-title">
<h1><?php the_title(); ?></h1>
</div>


<div id="left">

<?php the_content(); ?>


<?php if (is_page('m91')) { ?>
<h2>Technical Specifications</h2>
<div class="sub-p">
<?php $my_query = new WP_Query('category_name=m90m91&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php } ?>
<?php if (is_page('vision-120')) { ?>
<h2>Technical Specifications</h2>
<div class="sub-p">
<?php $my_query = new WP_Query('category_name=v-120&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php } ?>
<?php if (is_page('vision-130')) { ?>
<h2>Technical Specifications</h2>
<div class="sub-p">
<?php $my_query = new WP_Query('category_name=v-130&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php } ?>
<?php if (is_page('vision-350')) { ?>
<h2>Technical Specifications</h2>
<div class="sub-p">
<?php $my_query = new WP_Query('category_name=v-350&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php } ?>
<?php if (is_page('standard-jazz')) { ?>
<h2>Technical Specifications</h2>
<div class="sub-p">
<?php $my_query = new WP_Query('category_name=jazz&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php } ?>
<?php if (is_page('snap-io-expansion')) { ?>
<?php $my_query = new WP_Query('category_name=snapon&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<div class="post-format">
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_post_thumbnail('gallery'); ?></a>
<?php the_excerpt(); ?>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<?php } ?>

<?php if (is_page('news')) { ?>
<?php $my_query = new WP_Query('category_name=news&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<div class="post-format">
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_post_thumbnail('gallery'); ?></a>
<?php the_excerpt(); ?>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<?php } ?>


<?php if (is_page('articles')) { ?>
<?php $my_query = new WP_Query('category_name=articles&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<div class="post-format">
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_post_thumbnail('gallery'); ?></a>
<?php the_excerpt(); ?>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<?php } ?>

<?php if (is_page('blog')) { ?>
<?php $my_query = new WP_Query('category_name=blog&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<div class="post-format">
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_post_thumbnail('gallery'); ?></a>
<?php the_excerpt(); ?>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<?php } ?>
<?php if (is_page('video-webinars')) { ?>
<?php $my_query = new WP_Query('category_name=video&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<div class="post-format">
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_post_thumbnail('gallery'); ?></a>
<?php the_excerpt(); ?>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<?php } ?>
<?php if (is_page('downloads')) { ?>
<?php wp_list_bookmarks('between=<br />&show_description=1'); ?>

<?php } ?>
</div>
</div>    
   
<div class="small-12 medium-5 large-3 columns">
<div id="right">
<?php if (!is_page('contact-us')) { ?>

<div class="services">

<img class="imageCenter" src="https://www.alldrivesandcontrols.co.uk/wp-content/uploads/unitronics-app-logo.png">
<p>The Unitronics PLC HMI app gives you access to key information, including product catalogs, specifications, success stories, presentations and webinars. Download the iPhone version <a href="https://itunes.apple.com/us/app/unitronics-plc-hmi/id748246920?mt=8" target="_blank">here</a> and the Android version <a href="https://play.google.com/store/apps/details?id=com.unitronics.catalog" target="_blank">here</a>.</p>
</div>
    <div class="services">
        <h2>How can we help?</h2>
        <?php echo do_shortcode('[contact-form-7 id="2227" title="Call To Action"]'); ?>
        
        
    </div>
<div class="services">
<h2>Contact Us</h2>
<H3><strong>East/West Midlands & North UK</strong></h3>
<H3>John Krzeminski</h3>
<H3>Tel: 44(0) 7891484632</h3>
<H3>john@alldrivesandcontrols.co.uk</h3>
<H3><strong>Wales,South Midlands</strong></h3>
<H3>David Hammond</h3>
<H3>Tel: 44(0) 7954407324</h3>
<H3>dave@alldrivesandcontrols.co.uk</h3>
<h3><strong>South UK</strong></h3>
<H3>Alan Bloor</h3>
<H3>Tel: +44(0) 7733609346</h3>
<H3>alan@alldrivesandcontrols.co.uk</h3>
</div>
<?php } ?>
<?php if (!is_page('articles') && !is_page('blog') && !is_page('video-webinars')) { ?>
<div class="services">
	<h2>Latest News</h2>
	<?php $my_query = new WP_Query('category_name=news&posts_per_page=3');?>
	<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; wp_reset_postdata(); ?>
</div>



<div class="services">
	<h2>Articles</h2>

	<?php $page_query = new WP_Query('category_name=articles&posts_per_page=5');
	while  ($page_query->have_posts()) : $page_query->the_post();?>
 	<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile;?>
</div>
   


<?php } ?>


<div class="services">
	<h2>Catalogues</h2>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/New-Unitonics-Catalogue-May-2015.pdf" title="2015 Unitronics Catalogue">Unitronics Catalogue 2015</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/unitronics-catalogue.pdf" title="Unitronics Catalogue">Unitronics Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/unistream-catalogue.pdf" title="Unistream Catalogue">Unistream Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/nanotec-catalogue.pdf" title="Nanotec Catalogue">Nanotec Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/weg-catalogue.pdf" title="WEG Eta Plus Catalogue">WEG Eta Plus Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/weg-catalogue-2.pdf" title="WEG Standard Range">WEG Standard Range</a></li>
 </div>

    
    
<?php // if (!is_page('downloads')) { ?>
    
   <!-- <div class="services">
        <h2>Downloads</h2>
 <?//php wp_list_bookmarks('title_li=&categorize=0&limit=10'); ?>
 </div>  -->
  
<?php // } ?>

</div>

</div>
</div>



    
</article><!-- #post-<?php the_ID(); ?> -->
    </div>