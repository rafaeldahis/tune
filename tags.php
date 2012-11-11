<?php
require_once "parts.php";
require_once "model.php";
?>

<?php 
$tagsList = getAllTags();
?>

<?php 
$title="Startup Tools and Resources";
$description="Tools to help you build, run and grow a startup: ";
$keywords="Startup Tools, Startup Resources";
$i=0;
foreach($tagsList as $kw)
        {
                $i++;
                if($i<10)
                {
                  $keywords = $keywords.", ".$kw["name"];
                  $description = $description.$kw["name"].", ";
                }
        }
$description = substr($description, 0, -2);
get_header($title, $description, $keywords); 
?>

<script>mixpanel.track("All Tags Page");</script>


<?php
printHeroUnit();
?>


<?php printTagsListCta($tagsList, false); ?>


<?php get_footer(); ?>