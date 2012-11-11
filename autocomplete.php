<?php
require_once "parts.php";
require_once "model.php";
?>


<?php 
$allTools =getAllTools();
$toolsNames=array();
foreach ($allTools as $tool){
        array_push($toolsNames,$tool['name']);
}
$toolsNames="['".implode("','", $toolsNames)."']";

?>

<html>
<head>

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
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

<script type="text/javascript">

</script>

</head>
<body>


</body>
</html>
