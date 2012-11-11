<?php
require_once "parts.php";
require_once "model.php";
?>

<?php 
$tagsList = getAllTags();
$iconfield='<input type="hidden" id="icon" name="icon" value="beaker">';
if(isset($_GET['me'])) {
$iconfield='<div class="control-group">
                             <label class="control-label" for="comment">Icon</label>
                             <div class="controls">
                               <textarea class="input-medium" id="icon" rows="1" name="icon"></textarea>
                             </div>
                           </div>
';
}

?>


<?php get_header(); ?>

<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">Contact</p>
            <p class="head-two">Yeah, I would love to hear from you. Go ahead.</p>
         </div>
      </div>
   </div>
</div>


<div class="container">
   <!-- Contact page -->
   <div class="contact">
      <div class="row">
            <div class="span12">
               <div id="wufoo-z7x3p9">
               </div>
<script type="text/javascript">var z7x3p9;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'tuneyourstartup', 
'formHash':'z7x3p9', 
'autoResize':true,
'height':'437',
'async':true,
'header':'show'};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { z7x3p9 = new WufooForm();z7x3p9.initialize(options);z7x3p9.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>

            </div>
          
       </div>
   </div>
   <hr />
</div>

