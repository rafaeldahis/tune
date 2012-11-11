<?php
require_once "parts.php";
require_once "model.php";
?>

<?php 
$tagsList = getAllTags();
if(!isset($_GET["tool"])) {header('Location: select-tool.php');}
$tool=getToolByName($_GET["tool"]);

$selectedTags = getTagsFromTool($tool['name'], $nameOnly=true);

$tagsNames=array();
foreach ($selectedTags as $tag){
        array_push($tagsNames,$tag['name']);
}
$selectedTags=$tagsNames;

?>


<?php get_header(); ?>

                      

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
                               <input type="text" class="input-medium" disabled="disabled" value="<?php echo $tool['name']; ?>">
                               <input type="hidden" class="input-medium" id="name" name="name" value="<?php echo $tool['name']; ?>">
                             </div>
                           </div>
                           <div class="control-group">
                             <label class="control-label" for="web">Website</label>
                             <div class="controls">
                               <input type="text" class="input-medium" id="url" name="url" value="<?php echo $tool['url']; ?>">
                             </div>
                           </div>                           
                           <div class="control-group">
                             <label class="control-label" for="comment">What is?</label>
                             <div class="controls">
                               <textarea class="input-madium" id="pitch" rows="1" name="pitch"><?php echo $tool['pitch']; ?></textarea>
                             </div>
                           </div>
                           <div class="control-group">
                             <label class="control-label" for="comment">Description</label>
                             <div class="controls">
                               <textarea class="input-madium" id="description" rows="3" name="description"><?php echo $tool['description']; ?></textarea>
                             </div>
                           </div>
                          <div class="control-group">
                             <label class="control-label" for="comment">Icon</label>
                             <div class="controls">
                               <textarea class="input-madium" id="icon" rows="1" name="icon"><?php echo $tool['icon']; ?></textarea>
                             </div>
                           </div>
                           

                           <div class="control-group">
                                <label class="control-label" for="comment">Tags</label>
                                <div class="controls">
                                <?php foreach ($tagsList as $tag): ?>
                                <label class="checkbox inline">
                                 
								  <input class="checkbox-tags" name="tags[]" type="checkbox" id="inlineCheckbox<?php echo $tag['name']; ?>" value="<?php echo $tag['name']; ?>"   <?php if(in_array($tag["name"],$selectedTags)): ?>checked="checked"<?php endif ?>> <?php echo $tag['name']; ?>
								  	
								</label>
                                <?php endforeach ?>
                                </div>
                           </div>

                                <input type="hidden" id="action" name="action" value="editTool">
                                
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

