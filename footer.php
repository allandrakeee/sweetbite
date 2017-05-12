<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all  nncontent after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sweetbite
 * @author Allan Drake
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'sweetbite_container_type' );

get_sidebar( 'footerfull' );
?>

<div class="inner-footer">
  <div class="row inner-footer">
    <div class="col-md-12 text-center hide-logo">
      <a href="http://sweetbite.wordpress.dev"><img class="inner-footer-img" src="http://sweetbite.wordpress.dev/wp-content/uploads/sites/6/2017/04/logo-e1492725167680.png" alt="" /></a>
      <br>
      <span class="icon-inner-footer" style="display: inline-block; margin-right: 18px;">
        <i class="fa fa-map-marker" style="color:#f641a2; font-size:24px; line-height:24px; vertical-align: middle; margin-bottom: 25px;"></i>
      </span>
      
      <div class="content-inner-footer">
        <div class="desc-icon-box">
          <p>329 Queensberry Street, North Melbourne VIC 3051, Australia.
            <br>
            <br>
            <b>Call. 
              <a href="tel:01794 340 979">01794 340 979</a>
            </b>
            <br>
            <b>Email. 
              <a href="mailto:hello@yourmail.com">hello@yourmail.com</a></b>
          </p>
        </div>
      </div>
      <div class="thim-social" style="text-align: center;">
        <ul class="social_link">
          <li><a class="face hasTooltip" href="https://www.facebook.com/ThimPress" target="_self"><i class="fa fa-facebook" style="color:#fff; font-size:20px; line-height:24px;"></i></a></li>
          <li><a class="twitter hasTooltip" href="https://twitter.com/thimpress" target="_self"><i class="fa fa-twitter" style="color:#fff; font-size:20px; line-height:24px;"></i></a></li>
          <li><a class="google hasTooltip" href="#" target="_self"><i class="fa fa-google-plus" style="color:#fff; font-size:20px; line-height:24px;"></i></a></li>
          <li><a class="dribble hasTooltip" href="#" target="_self"><i class="fa fa-dribbble" style="color:#fff; font-size:20px; line-height:24px;"></i></a></li>
          <li><a class="linkedin hasTooltip" href="#" target="_self"><i class="fa fa-linkedin" style="color:#fff; font-size:20px; line-height:24px;"></i></a></li> 
        </ul>
      </div>
      <div class="container">
	      <div class="inner-inner-footer-container">
	        <div class="inner-inner-footer-content">
	          <p>Copyright © Allan Drake All rights reserved. Custom Web and Designed by <a class="ph-link" href="allandrake.hol.es/" target="_blank">ADPD</a>.</p>
	        </div>
	      </div>
      </div>
      
    </div><!--.col-md-12 end -->
  </div><!--.row end-->
</div>	
<!-- Return to Top -->
<a id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>