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

<script>mixpanel.track("New Tool Page");</script>


<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <p class="head-one">Add a new tool</p>
            <p class="head-two">Help TuneYourStartup be the #1 resource for Startup Tools!</p>
         </div>
      </div>
   </div>
</div>


<div class="container">
   <!-- Contact page -->
   <div class="contact">
      <div class="row">
            <div class="span12">
               <div class="ccontent">
                     <div class="form">
                       <!-- Contact form (not working)-->
                       <form class="form-horizontal" method="POST" action="save.php">
                         <fieldset>
                           <div class="control-group">
                             <label class="control-label" for="name">Tool Name</label>
                             <div class="controls">
                               <input type="text" class="input-medium" id="name" name="name">
                             </div>
                           </div>
                           <div class="control-group">
                             <label class="control-label" for="web">Website</label>
                             <div class="controls">
                               <input type="text" class="input-medium" id="url" name="url">
                             </div>
                           </div>                           
                           <div class="control-group">
                             <label class="control-label" for="comment">What is?</label>
                             <div class="controls">
                               <textarea class="input-madium" id="pitch" rows="1" name="pitch"></textarea>
                             </div>
                           </div>
                           <div class="control-group">
                             <label class="control-label" for="comment">Description</label>
                             <div class="controls">
                               <textarea class="input-madium" id="description" rows="3" name="description"></textarea>
                             </div>
                           </div>
                           <?php echo $iconfield; ?>
                           
                           <div class="control-group">
                                <label class="control-label" for="comment">Tags</label>
                                <div class="controls">
                                <?php foreach ($tagsList as $tag): ?>
                                <label class="checkbox inline">
                                  <input class="checkbox-tags" name="tags[]" type="checkbox" id="inlineCheckbox<?php echo $tag['name']; ?>" value="<?php echo $tag['name']; ?>"> <?php echo $tag['name']; ?>
                                </label>
                                <?php endforeach ?>
                                </div>
                           </div>

                                <input type="hidden" id="action" name="action" value="newTool">
                                
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
          
       </div>
   </div>
   <hr />
</div>

