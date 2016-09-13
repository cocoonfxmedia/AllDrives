<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	
      
       
        <footer>
             <div class="row">
                 <div id="site-generator">
                 <div class="small-12 medium-12 large-12 columns">
			<?php if ( ! is_404() ) get_sidebar( 'footer' );?>
			
                         
             <div class="address">
             <img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/logo.png" width="120" height="45" alt="All Drives and Controls"/>  
       
                 
            
<p>
<span id="_address14" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" itemref="_addressLocality4 _addressRegion5 _postalCode6">
<span itemprop="streetAddress">Epsom 2, Keys Business Village</span></span><br/>
<span itemscope itemtype="http://schema.org/LocalBusiness" itemref="_image1 _telephone12 _email13">
<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" itemref="_addressLocality4 _addressRegion5 _postalCode6">
    
<span itemprop="streetAddress">Keys Park Road</span></span></span><br/>
<span id="_address3" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

<span id="_addressLocality4" itemprop="addressLocality">Hednesford</span><br/>

<span id="_addressRegion5" itemprop="addressRegion">Staffordshire</span><br/>

<span id="_postalCode6" itemprop="postalCode">WS12 2HA</span></span><br/>
Tel:01543 271899<br/>
Tel:01543 478887<br/>
VAT 974 3829 75<br/>
Company No: 6874584</p>

         
                 
                 
                 <p><a href="https://www.cocoonfxmedia.co.uk/web-design/lichfield" title="web design lichfield">Web Design by Cocoonfxmedia ltd</a></p>

</div>
                   </div>
          
                 </div>
             </div>
	</footer>
 
       
<script>
$(document).ready(function(){
$( 'a.menuBtn').on( 'click' , function(){
$( 'nav.mainnav ul' ).toggle( 'slow' );
return false;
});
});
</script>
<?php wp_footer(); ?>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 923436025;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/923436025/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>