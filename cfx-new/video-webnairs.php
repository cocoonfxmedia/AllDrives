<?php
/*
template name: video
 */
?>
<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="uniWrap">    

    <div class="row">
        <div class="small-12 medium-7 large-9 columns">     
            <div id="page-title">
            <h1><?php the_title(); ?></h1>
            </div>

            <div id="left">
            <?php the_content(); ?>
                
                 <?php $my_query = new WP_Query('category_name=video&posts_per_page>0');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<div class="post-format">
<h2><?php the_title(); ?></h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title=""><?php the_post_thumbnail('gallery'); ?></a>
<?php the_excerpt(10); ?>

</div>
<?php endwhile; wp_reset_postdata(); ?>
            </div> 
        </div>
   



    <div class="small-12 medium-5 large-3 columns">

        <div id="right">
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



        <div class="services">
	<h2>Catalogues</h2>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/unitronics-catalogue.pdf" title="Unitronics Catalogue">Unitronics Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/unistream-catalogue.pdf" title="Unistream Catalogue">Unistream Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/nanotec-catalogue.pdf" title="Nanotec Catalogue">Nanotec Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/weg-catalogue.pdf" title="WEG Eta Plus Catalogue">WEG Eta Plus Catalogue</a></li>
	<li><a href="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/weg-catalogue-2.pdf" title="WEG Standard Range">WEG Standard Range</a></li>
        </div>


    
        <?php if (!is_page('downloads')) { ?>
    
        <div class="services">
        <h2>Downloads</h2>
        <?php wp_list_bookmarks('title_li=&categorize=0&limit=10'); ?>
        </div>  
       
        <?php } ?>

        </div>

    </div>
</div>
</div>    

<?php if (!is_front_page()) { ?>
<div class="boxWrap">
<div class="row">

<div class="small-12 medium-6 large-3 columns">
<div class="services">
<img class="nano" src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/unistream.png"/>
<h2>Unistream</h2>
<li>Dynamic Memory</li>
<li>USB host</li>
<li>VNC</li>
<li>Large scale I/O expandability</li>
<li>Unilogic Studio</li>
</div>
<a href="unistream"><div class="cta">Read More</div></a>
</div>


 
<div class="small-12 medium-6 large-3 columns">
<div class="services">
<img class="nano" src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/logounitronics.png"/>
<h2>Unitronics Vision Enhanced</h2>
<li>User designed screens</li>
<li>Built in Alarm screens</li>
<li>Text String Library</li>
<li>Auto Tune PID upto 24 Independent loops</li>
</div>
<a href="enhancedvision"><div class="cta">Read More</div></a>
</div>



<div class="small-12 medium-6 large-3 columns">
<div class="services">
<img class="nano" src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/logounitronics.png"/>
<h2>Unitronics Vision</h2>
<li>User designed screens</li>
<li>Auto Tune PID upto 12 Independent loops</li>
<li>Recipe Programs</li>
<li>Data & Time base control</li>
</div>
<a href="unitronics"><div class="cta">Read More</div></a>
</div>



<div class="small-12 medium-6 large-3 columns">
<div class="services">
<img class="nano" src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/nanotec1.png"/>
<h2>Nanotec</h2>
<li>Stepper-Servo Drives and Motors</li>
<li>High Torque</li> 
<li>High Efficiency</li>
<li>Latest Brushless Technology</li>
<li>Global Support</li>
</div>
<a href="nanotec"><div class="cta">Read More</div></a>
</div>






</div>    
</div>
</div>
   
    
    <?php } ?>

  
</article><!-- #post-<?php the_ID(); ?> -->


<?php get_footer(); ?>