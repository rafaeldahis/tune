<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">Contact Page Title</p>
            <p class="head-two">Lorem ipsum dolor amet conse semper ctetur adipig NOW!</p>
         </div>
      </div>
   </div>
</div>


<div class="container">
   <!-- Contact page -->
   <div class="contact">
      <div class="row">
         <div class="span12">
            <h2>Contact Us</h2>
            <hr />
         </div>
      </div>
      <div class="border"></div>
      <div class="row">
            <div class="span12">
               <div class="gmap">
                  <!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
                  <iframe height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Google+India+Bangalore,+Bennigana+Halli,+Bangalore,+Karnataka&amp;aq=0&amp;oq=google+&amp;sll=9.930582,78.12303&amp;sspn=0.192085,0.308647&amp;ie=UTF8&amp;hq=Google&amp;hnear=Bennigana+Halli,+Bangalore,+Bengaluru+Urban,+Karnataka&amp;t=m&amp;ll=12.993518,77.660294&amp;spn=0.012545,0.036006&amp;z=15&amp;output=embed"></iframe>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="span6">
               <div class="ccontent">
                     <div class="form">
                       <!-- Contact form (not working)-->
                       <form class="form-horizontal">
                         <fieldset>
                           <div class="control-group">
                             <label class="control-label" for="name">Name</label>
                             <div class="controls">
                               <input type="text" class="input-medium" id="name">
                             </div>
                           </div>
                           <div class="control-group">
                             <label class="control-label" for="email">Email</label>
                             <div class="controls">
                               <input type="text" class="input-medium" id="email">
                             </div>
                           </div>
                           <div class="control-group">
                             <label class="control-label" for="web">Website</label>
                             <div class="controls">
                               <input type="text" class="input-medium" id="website">
                             </div>
                           </div>                           
                           <div class="control-group">
                             <label class="control-label" for="comment">Comment</label>
                             <div class="controls">
                               <textarea class="input-madium" id="comment" rows="3"></textarea>
                             </div>
                           </div>
                           <div class="form-actions">
                              <!-- Buttons -->
                             <button type="submit" class="btn btn-orange">Submit</button>
                             <button type="reset" class="btn">Reset</button>
                           </div>
                         </fieldset>
                       </form>
                     </div>
               </div>
            </div>
            <div class="span6">
               <div class="ccontent">
                        <div class="address">
                            <address>
                               <!-- Company name -->
                               <strong>Head Office</strong><br>
                               Responsive Web<br>
                               <!-- Address -->
                               795 Folsom Ave, Suite 600<br>
                               San Francisco, CA 94107<br>
                               <!-- Phone number -->
                               <abbr title="Phone">P:</abbr> (123) 456-7890.
                            </address>
                             
                            <address>
                               <!-- Name -->
                               <strong>Full Name</strong><br>
                               <!-- Email -->
                               <a href="mailto:#">first.last@gmail.com</a><br><br>
                               <!-- Name -->
                               <strong>Full Name</strong><br>
                               <!-- Email -->
                               <a href="mailto:#">first.last@gmail.com</a>
                            </address>
                        </div>
               </div>
            </div>
         </div>
   </div>
   <hr />
</div>

<?php get_footer(); ?>