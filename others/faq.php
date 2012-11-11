<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">FAQ Page Title</p>
            <p class="head-two">Lorem ipsum dolor amet conse semper ctetur adipig NOW!</p>
         </div>
      </div>
   </div>
</div>


<div class="container">
   <!-- FAQ page -->
   <div class="FAQ">
      <div class="row">
         <div class="span12">
            <h2>Our FAQ</h2>
            <hr />
         </div>
      </div>
      <div class="border"></div>
      <!-- FAQ -->
      <div class="accordion" id="accordion2">
         <!-- Each item should be enclosed inside the class "accordion-group". Note down the below markup. -->
         <!-- First Accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
               <!-- Title with experience details. Note down the markup before you edit. -->
              <h5>1. Cras tincidunt mi non arcu hendrerit eleifend</h5>
            </a>
          </div>
          <div id="collapseOne" class="accordion-body collapse in">
            <div class="accordion-inner">
               <!-- Details about job -->
              <p>Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. </p>
              <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor non felis commodo in sagittis est accumsan. Nulla vitae cursus leo. Praesent eleifend sodales felis, in congue purus scelerisque eget. Donec commodo ligula et arcu luctus at viverra erat bibendum.</p>
               <!-- Contact details. Note down the markup before you edit. -->
            </div>
          </div>
        </div>
        <!-- Second Accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
              <h5>2. Proin porttitor eros a ante molestie gravida</h5>
            </a>
          </div>
          <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner">
              <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. </p>
            </div>
          </div>
        </div>
        <!-- Thrid accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
              <h5>3. Maecenas quis tristique turpis</h5>
            </a>
          </div>
          <div id="collapseThree" class="accordion-body collapse">
            <div class="accordion-inner">
              <p>Aliquam erat volutpat. Maecenas quis tristique turpis. Nulla facilisi. Duis sed velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <!-- Forth Accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
              <h5>4. Proin porttitor eros a ante molestie gravida</h5>
            </a>
          </div>
          <div id="collapseFour" class="accordion-body collapse">
            <div class="accordion-inner">
              <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. </p>
              
              <ol>
                  <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                  <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                  <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                  <li>Maecenas hendrerit neque id ante dictum mattis</li>
                  <li>Vivamus non neque lacus, et cursus tortor</li>
               </ol>
            </div>
          </div>
        </div>
      </div>
   </div>
   <hr />
</div>

<?php get_footer(); ?>