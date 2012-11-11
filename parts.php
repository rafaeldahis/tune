<?php 

require_once "model.php";

$facebookShareLink='https://www.facebook.com/dialog/feed?app_id=188598501277677&link=http://www.tuneyourstartup.com?utm_source=websiteFacebookShare%26utm_medium=facebook%26utm_campaign=websiteLaunch&picture=http://www.tuneyourstartup.com/img/favicon/share_img.png&name=Tune%20Your%20Startup&caption=The%20most%20complete%20list%20of%20startup%20tools&description=Find%20every%20tool%20you%20need%20to%20help%20you%20build,%20run%20and%20grow%20your%20startup.&redirect_uri=http://www.tuneyourstartup.com';
               
$twitterShareLink='https://twitter.com/share?url=www.tuneyourstartup.com?utm_source=websiteTwitterShare%26utm_medium=twitter%26utm_campaign=websiteLaunch&text=TuneYourStartup:%20The%20most%20complete%20list%20of%20startup%20tools%20-%20find%20tools%20to%20help%20you%20build,%20run%20and%20grow%20your%20startup.%20www.tuneyourstartup.com&related=rafaeldahis';

function get_header($title="Tune Your Startup | Startup Tools and Resources", $description="Tools to help you build, run and grow a startup", $keywords="Startup Tools, Startups, Startup Resources", $script=""){
global $twitterShareLink, $facebookShareLink;
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8" />

  <title>'.$title.'</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="'.$description.'">
  <meta name="keywords" content="'.$keywords.'">
  <meta name="author" content="Rafael Dahis">
  
   <meta property="og:title" content="'.$title.'" />
   <meta property="og:type" content="website" />
   <meta property="og:image" content="http://www.tuneyourstartup.com/img/favicon/favicon.png" />
   <meta property="og:description" content="'.$description.'" />
   

  <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/js/html5shim.js"></script>
  <![endif]-->
		
  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <link href="style/animate.min.css" rel="stylesheet">
  <link href="style/flexslider.css" rel="stylesheet">
  <link href="style/prettyPhoto.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome.css">
  <!--[if IE 7]>
  <link rel="stylesheet" href="style/font-awesome-ie7.css">
  <![endif]-->		
  <link href="style/bootstrap-responsive.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
      
  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/favicon/favicon.png">

  <!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/jquery.tweet.js"></script>
<script src="js/jquery.cycle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/isotype.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/custom.js"></script>
<script src="js/jquery.jeditable.mini.js"></script>
'.$script.'

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-35898565-1"]);
  _gaq.push(["_trackPageview"]);

  (function() {
    var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<!-- start Mixpanel --><script type="text/javascript">(function(c,a){window.mixpanel=a;var b,d,h,e;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src=("https:"===c.location.protocol?"https:":"http:")+"//cdn.mxpnl.com/libs/mixpanel-2.1.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var g=a;"undefined"!==typeof f?
g=a[f]=[]:f="mixpanel";g.people=g.people||[];h="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config people.identify people.set people.increment".split(" ");for(e=0;e<h.length;e++)d(g,h[e]);a._i.push([b,c,f])};a.__SV=1.1})(document,window.mixpanel||[]);
mixpanel.init("bbd16f2254cacfe873741a6e10ab8bf4");</script><!-- end Mixpanel -->


</head>
<body class="animated fadeIn">

<!--Qualaroo-->
<script type="text/javascript">var _kiq = _kiq || [];</script>
<script type="text/javascript" src="//s3.amazonaws.com/ki.js/45238/8Wa.js" async="true"></script>


<!-- JS do Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=188598501277677";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>


<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
     <div class="container">
      <a class="brand" href="/">
        <span class="padd">TuneYourStartup</span>
      </a>
      
      <div class="pull-left" style="padding-top:2%;">
      <!--<a class="cta link" href="tools.php" title="top tool of the day">Today&rsquo;s Tool</a>-->
      <a class="cta link" href="tools.php" title="all tools for startups">All Tools</a>
      <a class="cta link" href="tags.php" title="list of startup tools by tag">All Tags</a>
      </div>
      
      <div class="icons pull-right">
               <a href="'.$facebookShareLink.'" target="_blank" rel="nofollow"><i class="icon-facebook"></i></a>
               <a href="'.$twitterShareLink.'" target="_blank" rel="nofollow"><i class="icon-twitter"></i></a>
              </div>
              
	
      <div class="cta share pull-right" style="color: #FAD233;">SHARE</div>
      </div>
  </div>
</div>
';
}




function get_footer(){
global $twitterShareLink, $facebookShareLink;


$tagsList=getAllTags();

echo '<!-- Footer -->
<div class="container"><div class="service">
    <div class="row">
      <div class="span12"><h4 class="pull-left">Join</h4><br/></div>
      <div class="span12">
      <a href="new-tool.php" title="add a tool" class="btn" rel="nofollow">Add a Tool</a>
      &nbsp&nbsp<a href="new-tool.php?befeatured=true" title="be a featured tool" class="btn" rel="nofollow">Be featured</a>
      </div><br/><br/><br/>
      <div class="span12"><div class="fb-like-box" data-href="http://www.facebook.com/tuneyourstartup" data-width="960" data-height="170" data-show-faces="true" data-stream="false" data-header="false"></div>
      </div>
</div>
</div>
</div>
</div>


  <footer>
  <div class="container">
    <div class="row">
      <div class="span4">
         <div class="widget">
            <div class="footer-headings"><span><b>SHARE</b> STARTUP TOOLS!</span></div>
            <div class="icons">
                <a href="'.$facebookShareLink.'" target="_blank" rel="nofollow"><i class="icon-facebook"></i></a>
                <a href="'.$twitterShareLink.'" target="_blank" rel="nofollow"><i class="icon-twitter"></i></a>
           </div>
         </div>
     
         
      </div>
            
      <!--
            <div class="span4">
         <div class="widget">
            <h3><span>Recent Stuffs</span></h3>
            <ul>
               <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
               <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
               <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
               <li>Maecenas hendrerit neque id ante dictum mattis</li>
            </ul>
         </div>
         <?php endif; ?>
      </div>
      -->

      
      
      <div class="span4">      
         <div class="widget">
      
      <div class="footer-headings"><span>Subscribe</span></div>
         <p>Be the first to know about "that new tool that can boost your productivity"</p>
            <div class="form">
               <form method="post" action="#" id="subscribeform" class="form-search">
                  <input type="text" value="" name="s" id="emailField" class="input-medium"/>
                  <input type="button" id="subscribeButton" value="Subscribe" class="btn btn-orange"/>
                  <div id="resposta"></div>
               </form>
            </div>
       </div>     
      </div>
      
      <div class="span4">      
      <div class="widget">
      <div class="footer-headings"><span>Add a tool</span></div>
         <a href="new-tool.php" rel="nofollow">Add it here</a>
        </div>     
      
      <div class="widget">
            <div class="footer-headings"><span>Contact Us</span></div>
                <a href="contact.php" rel="nofollow">Send a message</a>
           </div>
     
      </div>
    </div>
    
    
    <hr />
    <div class="row">
      <div class="span12">
         <p>Copyright &copy; - <a href="/">Tune Your Startup</a></p><p><strong>Top tools, services and resources to help you in:</strong></p>';
		 
		 foreach($tagsList as $tag){
        echo '<a href="tag.php?tag='.$tag["name"].'" title="Top tools for '.$tag["name"].'">'.$tag["name"].'</a> |';
        }

		echo '
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer>		';

echo '
<script>
$(document).ready(function() {
    $("#subscribeButton").click(function() {
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        
        var emailPost = $("#emailField").val();
        if(emailPost == "") {
            $("#subscribeButton").after("<br/><span>Please enter your email address.</span>");
            hasError = true;
        }
 
        else if(!emailReg.test(emailPost)) {
            $("#subscribeButton").after("<br/><span>Enter a valid email address.</span>");
            hasError = true;
        }
 
        if(hasError == true) { return false; }
    
    
        var actionPost = "simpleSubscribe";
        $.post("save.php", {email: emailPost, action: actionPost},
        function(data){
           $("#resposta").html("done!");
         });
    return false;
    });
});

$(document).ready(function() {
    $("#suggestionButton").click(function() {
        $(".error").hide();
        var hasError = false;
        
        var newToolPost = $("#newToolField").val();
        if(newToolPost == "") {
            $("#suggestionButton").after("<br/><span>Please enter the name.</span>");
            hasError = true;
        }
  
        if(hasError == true) { return false; }
    
        var actionPost = "simpleSuggestion";
        $.post("save.php", {toolSuggestion: newToolPost, action: actionPost},
        function(data){
           $("#respostaSuggestion").html("done!");
         });
    return false;     
    });
});


</script>

<script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = "tuneyourstartup"; // required: replace example with your forum shortname

        /* * * DON"T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement("script"); s.async = true;
            s.type = "text/javascript";
            s.src = "http://" + disqus_shortname + ".disqus.com/count.js";
            (document.getElementsByTagName("HEAD")[0] || document.getElementsByTagName("BODY")[0]).appendChild(s);
        }());
        </script>

        
<!-- HitTail -->
<script type="text/javascript">
	(function(){ var ht = document.createElement("script");ht.async = true;
	  ht.type="text/javascript";ht.src = "//97689.hittail.com/mlt.js";
	  var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ht, s);})();
</script>


</body>
</html>';
}

function printToolsList($toolsList, $sourceTag="", $nofollow=false){
$i=0;
$nofollowparam = "";
if($nofollow){$nofollowparam="rel='nofollow'";}

foreach($toolsList as $tool){
        $i++;
        if($i==4){echo '</div><div class="row">'; $i=1;}
        
        if($sourceTag){
        echo '
        <div class="span4">
                <a '.$nofollowparam.' href="tool.php?tool='.$tool["name"].'&src_tag='.$sourceTag.'" title="'.$tool["name"].'"><div class="img"><i class="icon-'.$tool["icon"].'"></i></div></a>
                <div class="info">
                <a '.$nofollowparam.' href="tool.php?tool='.$tool["name"].'&src_tag='.$sourceTag.'" title="'.$tool["name"].'"><h4>'.$tool["name"].'</h4></a>
                <h5>'.$tool["pitch"].'</h5>
                <!--<a '.$nofollowparam.' href="tool.php?tool='.$tool["name"].'&src_tag='.$sourceTag.'#disqus_thread" title="'.$tool["name"].'"></a>--> 
                </div>
        </div>
        ';
        }
        else{
        echo '
        <div class="span4">
                <a '.$nofollowparam.' href="tool.php?tool='.$tool["name"].'" title="'.$tool["name"].'"><div class="img"><i class="icon-'.$tool["icon"].'"></i></div></a>
                <div class="info">
                <a '.$nofollowparam.' href="tool.php?tool='.$tool["name"].'" title="'.$tool["name"].'"><h4>'.$tool["name"].'</h4></a>
                <h5>'.$tool["pitch"].'</h5>
                <!--<a '.$nofollowparam.' href="tool.php?tool='.$tool["name"].'#disqus_thread" title="'.$tool["name"].'"></a>-->
                
                
                </div>
        </div>
        ';
        }

}
        echo '<a href="tools.php" class="pull-right">see all tools</a>';
}



function printTodaysTool(){
$tool = getTodaysTool();

echo '
                <a href="tool.php?tool='.$tool["name"].'" title="'.$tool["name"].'"><div class="img"><i class="icon-'.$tool["icon"].'"></i></div></a>
                <div class="info">
                <a href="tool.php?tool='.$tool["name"].'" title="'.$tool["name"].'"><h4>'.$tool["name"].'</h4></a>
                <h5>'.$tool["pitch"].'</h5>
                </div>
';

}




function printHeroUnit(){
        echo '<!-- Hero Unit -->
        <div class="hero-content">
           <div class="container">
              <div class="row">
                 <div class="span12">
                    <div class="border"></div>
                    <!-- About Title -->
                    <p class="cap lcolor big">The most complete list of</p>
                    <!-- Title -->
                    <h1 class="">Startup Tools<span class="color">!</span></h1>  
                    <div class="h1bor"></div>
                    <!-- Small para -->
                    <p>There are just too many things to worry about when building a startup.<br/> Going crazy? Use the tools and resources here to help you build, run and grow your startup!</p><br/>
                    <!-- Rotating text. Using flex slider. -->
                    <!-- Social media icons 
                    <div class="icons">
                       <a href="#"><i class="icon-facebook"></i></a>
                       <a href="#"><i class="icon-twitter"></i></a>
                       <a href="#"><i class="icon-linkedin"></i></a>
                       <a href="#"><i class="icon-google-plus"></i></a>
                       <a href="#"><i class="icon-pinterest"></i></a>
                    </div>
                    -->
                 </div>
              </div>
           </div>
        </div>
        <div class="navbor2"></div>';
}

function printTagsListCta($tagsList, $home){
echo '<!-- Call to action -->
<div class="cta">
   <div class="container">'; 
      if($home==true){
      echo '
      <div class="row">
         <div class="span2">
            <!-- Some text -->
            <p class="big">hot tags:</p>
         </div>
         <div class="span10">
            <!-- Button -->
            <p>';
        }
        else
        {
        echo '
      <div class="row">
         <div class="span12">
            <!-- Button -->
            <p>';
        }
      
foreach($tagsList as $tag){
        echo '<h3><a href="tag.php?tag='.$tag["name"].'" class="cbutton pull-left" title="See tools for '.$tag["name"].'">'.$tag["name"].'</a></h3>';
        }         
        
        if($home==true){ echo '<a href="tags.php" class="more" style="font-size: 11px;letter-spacing: 0px;padding: 0px 5px;" title="see all types of startup tools">more...</a>'; }
            
   echo '</p>
         </div>
            

      </div>
   </div>
</div>
<div class="navbor2"></div>
<div class="border"></div>'; 
}

?>