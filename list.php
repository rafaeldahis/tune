<?php require_once 'parts.php';
require_once 'model.php';
?>

<?php
$list=getListBySlug($_GET['list']);
$listTools=getListToolsById($list['listId']);

//$list=array("name"=>"10 best tools for lean startups", "creator"=>"Rafael Dahis", "dateCreated"=>"2012-11-10", "introduction"=>"this list bla bla bla", "creatorTwitter"=>"rafaeldahis", "slug"=>"10-best-tools-for-lean-startups");
/*$listTools=array(
                array("name"=>"Mailchimp","url"=>"http://www.mailchimp.com","pitch"=>"the best email ever","icon"=>"beaker"),
                array("name"=>"Veeflow","url"=>"http://www.mailchimp.com","pitch"=>"the best email ever","icon"=>"beaker"),
                );
*/                

?> 

<?php 
$title = $list['name']." | by ".$list['creator']." - Startup Tools";
$description = $list['name'];
$keywords = "Startup Tools, ".$list['name'].", ".$list['creator'].", lists, ";
foreach($listTools as $t)
        {
          $keywords = $keywords.", ".$t["name"];
        }
        
  
get_header($title, $description, $keywords); 

$facebookShareLink="https://www.facebook.com/dialog/feed?app_id=188598501277677&link=http://www.tuneyourstartup.com/list.php%3Flist%3D".$list['slug']."&picture=http://www.tuneyourstartup.com/img/favicon/share_img.png&name=".$title."&caption=".$description."&description=".$list['introduction']."&redirect_uri=http://www.tuneyourstartup.com/list.php%3Flist%3D".$list['slug'];

?>

<script>mixpanel.track("List Page");</script>


 
<!-- Heading -->
<div class="head">
   <div class="container">
      <div class="row">
         <div class="span12">
            <!-- Some text -->
            <h1 class="head-one"><?php echo $list["name"];?></h1>
            <h2 class="head-two"><span style="font-size: 0.8em;">by</span> <?php echo $list["creator"];?>,&nbsp<span style="font-size: 0.8em;"><?php echo $list["creatorTitle"];?></span>&nbsp&nbsp&nbsp<a rel="nofollow" <?php echo "href='http://www.twitter.com/".$list['creatorTwitter']."'";?> target="_blank" style="color:#fff;"><i class="icon-twitter"></i></a><a href="<?php echo $facebookShareLink; ?>" class="pull-right" style="font-size:16px;color: #fff;font-weight:400;" rel="nofollow" target="_blank">share this list</a> </h2>
           
         </div>
      </div>
   </div>
</div>

<div class="container">
        <ul class="breadcrumb">
          <li><a href="/">Home</a> <span class="divider">/</span></li>
          <li><a href="lists.php">All lists</a> <span class="divider">/</span></li>
          <li class="active"><?php echo $list["name"];?></li>
        </ul>
</div>

<div class="container">
   <div class="service">
      <div class="row">
      <div class="span12">
        <h5><?php echo $list['introduction']; ?></h5>
       </div>
       </div>
       
        <?php $k=0; foreach($listTools as $tool): ?>
         <div class="row" style="border-bottom:2px dashed #EEE;">      
                <div class="span1" style="font-size:50px;color:#ccc;padding:4% 0%;"><b><?php echo ++$k; ?>.</b></div>

                <div class="span4">
                <?php echo '<a href="tool.php?tool='.$tool["name"].'" title="'.$tool["name"].'"><div class="img"><i class="icon-'.$tool["icon"].'"></i></div></a>
                <div class="info">
                <a href="tool.php?tool='.$tool["name"].'" title="'.$tool["name"].'"><h4>'.$tool["name"].'</h4></a>
                <h5>'.$tool["pitch"].'</h5>
                <!--<a href="tool.php?tool='.$tool["name"].'#disqus_thread" title="'.$tool["name"].'"></a>-->
                </div>'; ?>
                </div>
 
                <div class="span6"><p><?php echo $tool['text'] ?></p></div>
         </div>
        <?php endforeach; ?>
      </div>
      <br/><br/>
    

        
      <div class="row">
      <div class="span12">
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
        
    </div>
</div>


<?php //get_sidebar(); ?> 

<?php get_footer(); ?> 