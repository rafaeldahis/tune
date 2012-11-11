<?php require_once 'parts.php';
require_once 'model.php';
?>

<?php
$toolsList = getAllTools();
?> 


<?php 
$title="Startup Tools and Resources";
$description="Tools to help you build, run and grow a startup: ";
$keywords="Startup Tools, ";
$i=0;
foreach($toolsList as $kw)
        {
                $i++;
                if($i<7)
                {
                  $keywords = $keywords.", ".$kw["name"];
                  $description = $description.$kw["name"].", ";
                }
        }
$description = substr($description, 0, -2);
get_header($title, $description, $keywords); 
?>

<script>mixpanel.track("All Tools Page");</script>

<?php
printHeroUnit();
?>
<div class="container"><br/></div>

<div class="container">
        <ul class="breadcrumb">
          <li><a href="/">Home</a> <span class="divider">/</span></li>
          <li class="active">All Tools</li>
        </ul>
</div>


<div class="container">
<h3>See all tools</h3>

<div class="service">
<div class="row">
<?php printToolsList($toolsList); ?>
</div>
</div>
</div>
<?php //get_sidebar(); ?> 

<?php get_footer(); ?> 