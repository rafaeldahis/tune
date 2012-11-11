<?php require_once 'parts.php';
require_once 'model.php';
?>

<?php
//$tool=array("name"=>"Mailchimp","url"=>"http://www.mailchimp.com","pitch"=>"the best email ever","description"=>"Mailchimp is bla bla bla-");
$tool=getToolByName($_GET['tool']);
$relatedTags=getTagsFromTool($tool['name']);


if(isset($_GET['src_tag'])){ $sourceTag=$_GET['src_tag'];} else {$sourceTag=$relatedTags[0]['name'];}
$relatedTools = getToolsByTag($sourceTag,$tool["name"]);

?> 

<?php 
$title = $tool["name"].' | Startup Tools';
$description = $tool["pitch"];
$keywords = $tool["name"].", Startup Tools";
foreach($relatedTags as $kw)
        {
          $keywords = $keywords.", ".$kw["name"];
        }
        
        
        
$script = '
<script>
 $(document).ready(function() {
     $(".edit").editable("save.php", {
         indicator : "Saving...",
         tooltip   : "Click to edit..."
     });
     $(".edit_area").editable("save.php", { 
         type      : "textarea",
         cancel    : "Cancel",
         submit    : "OK",
         tooltip   : "Click to edit...",
         submitdata : {tool: "'.$tool["name"].'", action:"changeDescription"}
     });
     $("#click_to_edit").click(function() {
        $("#tool_description").click();
        });
 });
</script>
';
get_header($title, $description, $keywords, $script); 

$facebookShareLink="https://www.facebook.com/dialog/feed?app_id=188598501277677&link=http://www.tuneyourstartup.com/tool.php%3Ftool%3D".$tool['name']."&picture=http://www.tuneyourstartup.com/img/favicon/share_img.png&name=".$title."&caption=".$description."&description=".$tool['description']."&redirect_uri=http://www.tuneyourstartup.com/tool.php%3Ftool%3D".$tool['name'];

?>

<script>mixpanel.track("Tool Page");</script>


 
<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <h1 class="head-one"><?php echo $tool["name"];?></h1>
            <h2 class="head-two"><?php echo $tool["pitch"];?><a href="<?php echo $facebookShareLink; ?>" class="pull-right" style="font-size:16px;color: #fff;font-weight:400;" rel="nofollow" target="_blank">share <?php echo $tool["name"];?></a> </h2>
           
         </div>
      </div>
   </div>
</div>

<div class="container">
        <ul class="breadcrumb">
          <li><a href="/">Home</a> <span class="divider">/</span></li>
          <li><a href=<?php echo '"tag.php?tag='.$sourceTag.'">'.$sourceTag; ?></a></li> <span class="divider">/</span></li>
          <li class="active"><?php echo $tool["name"];?></li>
        </ul>
        
</div>

<div class="container">
   <div class="service">
      <div class="row">
            <div class="span12">
            <!-- Some text -->
            <h3>Description<div class="pull-right" style="margin-top: -4px;"><a href="<?php echo $tool['url'];?>" title="<?php echo $tool['name']; ?>" class="btn" rel="nofollow" target="_blank">Visit <?php echo $tool["name"]; ?> Website</a></div> </h3><hr/>
            <h4 class="info"><div class="edit_area" id="tool_description"><?php echo $tool["description"]; ?></div><a class="click_to_edit" id="click_to_edit">click to edit (please don't fuck up)</a></h4>
             
         </div>
      </div>
      <div class="row">
            <div class="span12">
            <!-- Some text -->
            <h3>Tags</h3><hr/>
            <h4>
            <?php foreach($relatedTags as $tag): ?><a href="tag.php?tag=<?php echo $tag["name"];?>"><?php echo $tag["name"];?></a> | <?php endforeach; ?>
            <a href="tags.php">...</a></h4>             
         </div>
      </div>

        
        <!-- disqus comments -->
        
        <div id="disqus_thread" style="margin-top:40px;"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'tuneyourstartup'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        <!-- disqus comments -->       

    </div>
</div>

<div class="container">
<br/><br/><hr/>
<h4>More from <?php echo $sourceTag;?></h4>
<div class="service">
<div class="row">
<?php printToolsList($relatedTools,$sourceTag); ?>
</div></div></div>

<?php //get_sidebar(); ?> 


 


<?php get_footer(); ?> 