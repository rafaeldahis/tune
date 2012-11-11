<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">Portfolio Page Title</p>
            <p class="head-two">Lorem ipsum dolor amet conse semper ctetur adipig NOW!</p>
         </div>
      </div>
   </div>
</div>


<div class="container">
   <!-- Portfolio page -->
   <div class="porty">
      <div class="row">
         <div class="span12">
            <h2>Portfolio</h2>
            <hr />
         </div>
      </div>
      <div class="border"></div>
                   <p>
                        <!-- Add filter names inside "data-filter". For example ".web-design", ".seo", etc., Filter names are used to filter the below images. -->
                        <ul id="filters">
                          <li><a href="#" data-filter="*" class="filt">All</a></li>
                          <li><a href="#" data-filter=".one" class="filt">One</a></li>
                          <li><a href="#" data-filter=".two" class="filt">Two</a></li>
                          <li><a href="#" data-filter=".three" class="filt">Three</a></li>
                          <li><a href="#" data-filter=".four" class="filt">Four</a></li>
                          <li><a href="#" data-filter=".five" class="filt">Five</a></li>
                        </ul>
                    </p>
                    <div id="portfolio">
                        <!-- Add the above used filter names inside div tag. You can add more than one filter names. For image lightbox you need to include "a" tag pointing to image link, along with the class "prettyPhoto[pp_gal]".-->
                       <div class="element one three"><a href="<?php bloginfo('template_directory');?>/img/photos/1.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory');?>/img/photos/tn_1.jpg" alt=""/></a></div>
                       <div class="element two one"><a href="<?php bloginfo('template_directory');?>/img/photos/2.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory');?>/img/photos/tn_2.jpg" alt=""/></a></div>
                       <div class="element three five"><a href="<?php bloginfo('template_directory');?>/img/photos/3.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory');?>/img/photos/tn_3.jpg" alt=""/></a></div>
                       <div class="element four two"><a href="<?php bloginfo('template_directory');?>/img/photos/4.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory');?>/img/photos/tn_4.jpg" alt=""/></a></div>
                       <div class="element five one"><a href="<?php bloginfo('template_directory');?>/img/photos/5.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory');?>/img/photos/tn_5.jpg" alt=""/></a></div> 
                       <div class="element four five"><a href="<?php bloginfo('template_directory');?>/img/photos/6.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory');?>/img/photos/tn_6.jpg" alt=""/></a></div> 
                       <div class="element three one"><a href="<?php bloginfo('template_directory');?>/img/photos/7.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory');?>/img/photos/tn_7.jpg" alt=""/></a></div>
                    </div>
   </div>
   <hr />
</div>

<?php get_footer(); ?>