<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">About Page Title</p>
            <p class="head-two">Lorem ipsum dolor amet conse semper ctetur adipig NOW!</p>
         </div>
      </div>
   </div>
</div>


<div class="container">
   <!-- About page -->
   <div class="about">
      <div class="row">
         <div class="span12">
            <h2>About Us</h2>
            <hr />
         </div>
      </div>
      <div class="border"></div>
      <div class="what">
         <div class="row">
            <div class="span4">
               <!-- Title with font awesome icon -->
               <h4><i class="icon-beaker"></i> Who are we?</h4> 
               <!-- Para -->
               <p>Duis tellus lectus, vehicula semper ullamcorper ut, fringilla quis mi. Suspendisse libero justo, iaculis a cursus interdum, dignissim ac ligula. In ac diam massa, tincidunt laoreet lorem. </p>
        
            </div>
            <div class="span4">
               <h4><i class="icon-bullhorn"></i> What we do?</h4>
               <p>Aenean sagittis dapibus pellentesque. Nullam nec arcu et quam volutpat iaculis. Maecenas consectetur enim in eros varius sollicitudin. Ut ultrices dictum. Phasellus tristique magna. </p>
               
            </div>
            <div class="span4">
               <h4><i class="icon-briefcase"></i> Why choose us?</h4>
               <p>Praesent et libero eget orci dignissim cursus eu tortor. Aliquam posuere scelerisque quis varius. In habitasse platea dictumst. Vestibulum ac justo scelerisque pretium adipiscing.</p>
               
            </div>
         </div>
         <hr />
         <div class="border"></div>
         <div class="row">
            <div class="span6">
                  <div class="ceo">
                     <!-- Staff Photo -->
                     <div class="pic">
                        <img src="<?php bloginfo('template_directory');?>/img/ashok.jpg" alt=""/>
                     </div>
                     <!-- Staff name with designation. Designation should be enclosed inside <span> tag. -->
                     <h5>Carlene Whang <span>CEO of INC</span></h5>
                     <!-- Social media links -->
                     <div class="social">
                        <a href="#" rel="tooltip" data-original-title="Facebook" class="tip"><i class="icon-facebook"></i></a> 
                        <a href="#" rel="tooltip" data-original-title="Twitter" class="tip"><i class="icon-twitter"></i></a> 
                        <a href="#" rel="tooltip" data-original-title="Linkedin" class="tip"><i class="icon-linkedin"></i></a> 
                        <a href="#" rel="tooltip" data-original-title="Google Plus" class="tip"><i class="icon-google-plus"></i></a>
                     </div>
                     <!-- Skills -->
                     <p class="skills"><span>HTML5</span> <span>CSS3</span> <span>JS</span> <span>jQuery</span> <span>PHP/MySQL</span></p>
                     <!-- Small para -->
                     <p>Donec at lectus id diam feugiat dictum et eget mi. Nam mauris orci, varius non imperdiet luctus, facilisis mattis mi. Nullam turpis odio, porttitor eu aliquam eu, adipiscing vitae velit. Aliquam lacinia volutpat ornare. Fusce convallis dui sed nisi elementum et eleifend urna varius. </p>
                  </div>
                  <div class="clearfix"></div>
            </div>
            <div class="span6">
                  <div class="ceo">
                     <!-- Staff photo -->
                     <div class="pic">
                        <img src="<?php bloginfo('template_directory');?>/img/ashok.jpg" alt=""/>
                     </div>
                     <!-- Staff name with designation. Designation should be enclosed inside <span> tag. -->
                     <h5>Roslyn Turnbough <span>CTO of INC</span></h5>
                     <!-- Social media links -->
                     <div class="social">
                        <a href="#" data-original-title="Facebook" class="tip"><i class="icon-facebook"></i></a> 
                        <a href="#" data-original-title="Twitter" class="tip"><i class="icon-twitter"></i></a> 
                        <a href="#" data-original-title="Linkedin" class="tip"><i class="icon-linkedin"></i></a> 
                        <a href="#" data-original-title="Google Plus" class="tip"><i class="icon-google-plus"></i></a>
                     </div>
                     <!-- Skills -->
                     <p class="skills"><span>UX/UI</span> <span>Photoshop</span> <span>InDesign</span> <span>CodeIgniter</span> <span>SEO</span></p>
                     <!-- Para -->
                     <p>Ut quam leo, venenatis sed pulvinar nec, pretium sit amet purus. Pellentesque gravida commodo pulvinar. Ut elementum vehicula lorem, sed imperdiet nisi iaculis et. Ut ut ante rhoncus diam fermentum pulvinar. Nullam accumsan, ante vitae commodo interdum, dolor metus. </p>
                  </div>
                  <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
   <hr />
</div>

<?php get_footer(); ?>