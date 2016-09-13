<?php
/*
template name: unitronics
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
            </div> 
        </div>
   



    <div class="small-12 medium-5 large-3 columns">

        <div id="right">
<?php if (!is_page('contact-us')) { ?>
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
            <?php if (!is_page('articles')) { ?>



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


  
</article><!-- #post-<?php the_ID(); ?> -->


<?php get_footer(); ?>