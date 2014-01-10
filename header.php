<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DISTROTECH - Your technological distributor.</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css">
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.html">
<link rel="apple-touch-icon" href="img/apple-touch-icon.html">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.html">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.html">

<!-- JS
================================================== -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
<script src="js/jquery.custom.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
      }
  });
});
</script>

</head>

<?php
$a='';
$b='';
$c='';
switch(basename($_SERVER['PHP_SELF']))
{
  case 'index.php':
  $a='class="active"';
  break;
  case "portfolio1.php":
  $b='class="active"';
  break;
  case "portfolio2.php":
  $b='class="active"';
  break;
  case "contact.php":
  $c='class="active"';
  break;
}
?>

<body class="home">
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
        <div class="row header"><!-- Begin Header -->
            <!-- Logo
            ================================================== -->
            <div class="span5 logo">
            	<a href="index.php"><img src="img/distrotech-logo.png" alt=""></a>
            </div>
            <!-- Main Navigation
            ================================================== -->
            <div class="span7 navigation">
                <div class="navbar hidden-phone">
                    <ul class="nav">
                        <li <?php echo $a; ?>><a href="index.php">Home</a></li>
                        <li <?php echo $b; ?>><a href="portfolio1.php">Portfolio</a></li>
                        <li <?php echo $c; ?>><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <!-- Mobile Nav
                ================================================== -->
                <form action="#" id="mobile-nav" class="visible-phone">
                    <div class="mobile-nav-select">
                        <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                            <option value="">Navigate...</option>
                            <option value="index.php">Home</option>
                            <option value="portfolio1.php">Portfolio</option>
                            <option value="contact.php">Contact</option>
                        </select>
                    </div>
                </form>
            </div>
        </div><!-- End Header -->