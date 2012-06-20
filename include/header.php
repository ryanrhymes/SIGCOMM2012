<?php
    include_once "functions.php";
    $mypage = current_pagename();
?>

<!DOCTYPE HTML>

<!--
<html manifest="sigcomm.appcache">
-->
<head>
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="copyright" content="&copy; 2011-12 ACM SIGCOMM 2012 Organization Committee. If you reuse this web site template, we ask that you acknowledge ACM SIGCOMM 2012 as the source." />
	
	<title>
<?php
    if(isset($page_title)) {
        if (!empty($page_title)) {
            echo ("$page_title - ");
        }
    } else {
        $filename = $_SERVER['SCRIPT_FILENAME'];
        $filename = preg_replace("/^.*\//","",$filename);
        $filename = preg_replace("/.php$/","",$filename);
        echo("$filename - ");
    }
?>
	ACM SIGCOMM 2012
    </title>

	<link rel="apple-touch-icon-precomposed" href="images/icon.png" />
    <link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/jquery.mobile.min.css" />
	<link rel="stylesheet" href="css/jqm-docs.css" />
	<link rel="stylesheet" href="css/style.css" />
	
	<!-- make the CSS work with older IE -->
	<script src="js/css3-mediaqueries.js"></script>

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

	<!-- Grab CDN jquerymobile, with a protocol relative URL; fall back to local if offline -->
	<script src="//code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	<script>$.mobile || document.write('<script src="js/jquery.mobile.min.js"><\/script>')</script>

	<script type="text/javascript" src="js/jqm-docs.js"></script>
	<script type="text/javascript" src="js/supporters2.js"></script>
</head>

<body>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
	 chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div data-role="page" id="jqm-home" class="type-home">

	<div data-role="content" class="content">	

		<?php include ("menu.php"); ?>

		<div class="content-primary">
