<?php require_once 'parts.php';
require_once 'model.php';
?>

<?php
$toolsList = getAllTools();
 

get_header(); 

echo "<div class='container'><br/><br/>";
foreach ($toolsList as $tool){
        echo "<div class='span2'><a href='edit-tool.php?tool=".$tool['name']."'>".$tool['name']. "</a><br/></div>";
}
echo "</div>";
?>
<?php //get_sidebar(); ?> 

<?php get_footer(); ?> 