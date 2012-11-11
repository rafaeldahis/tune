<?php
require_once "parts.php";
require_once "model.php";
?>


<?php 
$featuredToolsList =getFeaturedTools();
$tagsList=getHotTags();
?>


<?php 
$allTools =getAllTools();
$toolsNames=array();
foreach ($allTools as $tool){
        array_push($toolsNames,$tool['name']);
}
$toolsNames="['".implode("','", $toolsNames)."']";

?>

<?php 
$title="Tune Your Startup | Startup Tools and Resources";
$description="Tools to help you build, run and grow a startup: ";
$keywords="Startup Tools, Startup Resources";
$i=0;
foreach($tagsList as $kw)
        {
                $i++;
                if($i<6)
                {
                  $keywords = $keywords.", ".$kw["name"];
                  $description = $description.$kw["name"].", ";
                }
        }
$description = substr($description, 0, -2);
get_header($title, $description, $keywords); 
?>

<script>mixpanel.track("Homepage");</script>
<?php
printHeroUnit();
?>


<?php printTagsListCta($tagsList, true); ?>


<div class="container">
<div class="service">
<div class="row" style="margin-bottom:-25px;">
<div class="span4"><h2>Why do startups need tools?</h2></div>
<div class="span4"><h2>What are the first steps?</h2></div>
<div class="span4"><h2>Today&rsquo;s startup tool</h2></div>
</div>
<div class="row">
<div class="span4"><p>If you trully believe in <a href="http://startupquote.com/post/1624569753" rel="nofollow" target="_blank">"moving fast and breaking things"</a>, 
you know that there's just no time to build things from scratch - entrepreneurs need <strong>speed</strong> and <strong>focus</strong>.<br/>Good news: there are <strong>hundreds of tools</strong> available to help you throughout this path!</p></div>
<div class="span4"><p>Startups must concentrate on the discovery and the pursuit of a <strong>sustainable business model</strong>. All the resources should be put into understanding your customer and the market.<br/>
Tools for <a href="tag.php?tag=Analytics" rel="nofollow">Analytics</a>, 
<a href="tag.php?tag=Analytics" rel="nofollow">Business Intelligente</a>, 
<a href="tag.php?tag=Analytics" rel="nofollow">Customer Development</a> 
are essential at this point.</p></div>
<div class="span4"><span>Every day, we recommend one special tool.</span><br/><?php printTodaysTool(); ?></div>
</div>

<div class="row">
<h2 class="pull-left">Featured Startup Tools</h2>
<div class="pull-right">
	<form method="POST" action="save.php" id="search-form">
<input type="text" id="search" class="typeahead span2 search-query" style="margin-top: 12px;" data-provide="typeahead" placeholder="search all tools">
</form>
</div>
</div>

<div class="row">
<?php printToolsList($featuredToolsList,"",true); ?>
</div>



</div>
</div>

<script type="text/javascript">
  var subjects = <?php echo $toolsNames; ?>  
  $('#search').typeahead({source: subjects}) 
  $('#search').change(function() {
		  var tool = $('#search').val();
		  if(jQuery.inArray(tool,subjects)>0){window.location.href = "/tool.php?tool="+tool;}
		  if(tool!="search all tools"){$('#search').val("search all tools")};	
	   });
</script>


<?php get_footer(); ?>
