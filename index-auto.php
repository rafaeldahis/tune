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


<?php
printHeroUnit();
?>

<?php printTagsListCta($tagsList, true); ?>


<div class="container">
<div class="service">
<div class="row">

<h2 class="pull-left">Featured Startup Tools</h2>
<div class="pull-right">
	<form method="POST" action="save.php" id="search-form">
<input type="text" id="search" class="typeahead span2 search-query" style="margin-top: 12px;" data-provide="typeahead" placeholder="search all tools">
</form>
</div>
</div>

<div class="row">
<?php printToolsList($featuredToolsList); ?>
</div>



</div>
</div>

<script type="text/javascript">
  var subjects = <?php echo $toolsNames; ?>  
  $('#search').typeahead({source: subjects}) 
  $('#search').change(function() {
		  var tool = $('#search').val();
		  if(jQuery.inArray(tool,subjects)>0){window.location.href = "/tool.php?tool="+tool;}
       });
</script>


<?php get_footer(); ?>
