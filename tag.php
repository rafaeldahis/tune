<?php require_once 'parts.php';
require_once 'model.php';
?>

<?php
//$toolsList=array(array("name"=>"Mailchimp","url"=>"http://www.mailchimp.com","pitch"=>"the best email ever"), array("name"=>"Veeflow","url"=>"http://www.veeflow.com","pitch"=>"measure and increase virality in your website"),
//array("name"=>"MixPanel","url"=>"www.mixpanel.com","pitch"=>"Bla bla bla "), array("name"=>"Kissmetrics","url"=>"http://www.kissmetrics.com","pitch"=>"Bla bla bla "));

$toolsList = getToolsByTag($_GET['tag']);
$tag=getTagByName($_GET['tag']);
?> 


<?php 
$title = 'Tools for '.$tag["name"].' | Startup Tools';
$description = $tag["description"].": ";
$keywords = $tag["name"].", Startup Tools, Tools";
$i=0;
foreach($toolsList as $kw)
        {
                $i++;
                if($i<5)
                {
                  $keywords = $keywords.", ".$kw["name"];
                  $description = $description.$kw["name"].", ";
                }
        }

$description = substr($description, 0, -2)."?";
get_header($title, $description, $keywords); 


$facebookShareLink="https://www.facebook.com/dialog/feed?app_id=188598501277677&link=http://www.tuneyourstartup.com/tag.php%3Ftag%3D".$tag['name']."&picture=http://www.tuneyourstartup.com/img/favicon/share_img.png&name=".$title."&caption=The%20most%20complete%20list%20of%20startup%20tools&description=".$description."&redirect_uri=http://www.tuneyourstartup.com/tag.php%3Ftag%3D".$tag['name'];

?>

<script>mixpanel.track("Tag Page");</script>
<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <h1 class="head-one"><?php echo $tag["name"];?></h1>
            <h2 class="head-two"><?php echo $tag["description"];?></h2>
         </div>
      </div>
   </div>
</div>

<div class="container">
        <ul class="breadcrumb">
          <li><a href="/">Home</a> <span class="divider">/</span></li>
          <li class="active"><?php echo $tag["name"];?></li>
        </ul>
</div>


<div class="container">
<h3>Best tools for <?php echo $tag["name"];?><a href="<?php echo $facebookShareLink; ?>" class="pull-right" style="font-size:16px;color: #EE5315;" rel="nofollow" target="_blank">share</a> </h3>


<div class="service">
<div class="row">
<?php printToolsList($toolsList, $tag["name"]); ?>
</div>
</div>
</div>
<?php //get_sidebar(); ?> 

<?php get_footer(); ?> 