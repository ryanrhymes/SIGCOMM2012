<?php
	# Turn on zlib output compression. The apache installed on turing.acm.org
	# didn't honor the mod_deflate setting we enable in .htaccess for a while,
	# which made this neccessary. No longer needed, but left for information.
	# ini_set("zlib.output_compression", "On");

	# Transparently convert normal ASCII quotes into typographic punctuation HTML entities.
	# http://michelf.com/projects/php-smartypants/
	include_once "include/smartypants.php";
	ob_start();

    include_once "functions.php";
    $mypage = current_pagename();
?>

<!DOCTYPE HTML>

<html manifest="sigcomm.appcache">
<head>
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="copyright" content="The ACM SIGCOMM 2012 Website by ACM SIGCOMM 2012 is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License." />

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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

	<script>
	$(document).bind("mobileinit", function(){
		// apply jquerymobile global overrides here
		$.mobile.listview.prototype.options.filterPlaceholder = "Filter program...";
	});
	</script>

	<!-- Grab CDN jquerymobile, with a protocol relative URL; fall back to local if offline -->
	<script src="//code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.js"></script>
	<script>$.mobile || document.write('<script src="js/jquery.mobile.min.js"><\/script>')</script>

	<script src="js/jqm-docs.js"></script>
	<script src="js/script.js"></script>
</head>

<body>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
	 chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div data-role="page" id="jqm-home" class="type-home">

	<div class="header" data-role="header" data-theme="c" data-position="inline">
		<div><a href="index.php"><img src="images/helsinki-logo-vert.png" style="height:40px" alt="ACM SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland"></a></div>
		<a href="#" onclick="$.mobile.silentScroll($.mobile.activePage.find('.navselected').position().top)" class="ui-btn-right" data-icon="grid">Site Menu</a>
	</div>

	<div data-role="content" class="content">

		<div class="content-primary">
