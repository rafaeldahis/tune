<?php require_once 'parts.php';
require_once 'model.php';
?>

<?php
$lists = getAllLists();
/*$lists=array(
        array("name"=>"10 best tools for lean startups", "creator"=>"Rafael Dahis", "dateCreated"=>"2012-11-10", "introduction"=>"this list bla bla bla", "creatorTwitter"=>"rafaeldahis", "creatorTitle"=>"creator of TuneYourStartup", "slug"=>"10-best-tools-for-lean-startups"),
        array("name"=>"10 best tools for lean startups", "creator"=>"Rafael Dahis", "dateCreated"=>"2012-11-10", "introduction"=>"this list bla bla bla", "creatorTwitter"=>"rafaeldahis", "creatorTitle"=>"creator of TuneYourStartup", "slug"=>"10-best-tools-for-lean-startups")
        );
*/        

?> 


<?php 
$title="Lists of Startup Tools and Resources";
$description="Tools to help you build, run and grow a startup: ";
get_header($title, $description); 
?>

<script>mixpanel.track("All Lists Page");</script>

<?php
printHeroUnit();
?>
<div class="container"><br/></div>


<div class="container">
        <ul class="breadcrumb">
          <li><a href="/">Home</a> <span class="divider">/</span></li>
          <li class="active">All lists</li>
        </ul>
</div>


<div class="container">
<h2>See all curated lists of Tools for Startups
<div class="pull-right" style="margin-top: -4px;"><a href="contact.php" title="be a curator" class="btn" rel="nofollow">Be a curator</a>
</div></h2><hr/>

      
<div class="service">
<div class="row">
<?php $k=0; foreach($lists as $list): ?>
               
                <div class="span12">
                <a <?php echo "href='list.php?list=".$list["slug"]."'";?> style="font-size:30px;"><h3><?php echo $list["name"]; ?><h3></a><h5 style="margin-top:-10px;">by <?php echo $list["creator"]; ?>, <?php echo $list["creatorTitle"]; ?></h5>
                </div>
         <?php endforeach; ?>
</div>
</div>


</div>

<?php get_footer(); ?> 