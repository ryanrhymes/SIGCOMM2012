<?php
	# Turn on zlib output compression. The apache installed on turing.acm.org
	# didn't honor the mod_deflate setting we enable in .htaccess for a while,
	# which made this neccessary. No longer needed, but left for information.
	# ini_set("zlib.output_compression", "On");
	
	# Transparently convert normal ASCII quotes into typographic punctuation HTML entities.
	# http://michelf.com/projects/php-smartypants/
	include_once "include/smartypants.php";
	ob_start();	

    include_once "include/functions.php";
    $info = "Download Paper Archive";

	if (!empty($_GET))
	{
		/* If code in the POST, check the validity */
		
		$code = $_GET["code"];
		if (check_downloadcode($code, "codes.txt"))
		{
			send_paper_archive("/home/lxwang/htdocs/SIGCOMM2012/archive.zip");
		}
		else
		{
			/* If the code is not valid, send the error message! */
			$info = "<span style='color:red;'>Error: Wrong Code!</span>";
			echo "<html><head></head><body><script type='text/javascript'> self.close(); </script></body></html>";
		}
	}
	else
	{
		/* If there is nothing in the POST, load the form */
?>

<!DOCTYPE HTML>

<html>
<head>
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="copyright" content="The ACM SIGCOMM 2012 Website by ACM SIGCOMM 2012 is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License." />
	
	<title>Download Archive Form</title>

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

	<script>
	$(document).bind("mobileinit", function(){
		// apply jquerymobile global overrides here
		$.mobile.listview.prototype.options.filterPlaceholder = "Filter program...";
	});
	</script>

	<!-- Grab CDN jquerymobile, with a protocol relative URL; fall back to local if offline -->
	<script src="//code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<script>$.mobile || document.write('<script src="js/jquery.mobile.min.js"><\/script>')</script>

	<script src="js/jqm-docs.js"></script>
	<script src="js/script.js"></script>

</head>

<body>

<div data-role="dialog">

<form action="archive.php" method="post" data-ajax="false">	
		<div data-role="header" data-theme="d">
			<h1><?php echo $info; ?></h1>
		</div>
		<div data-role="content" data-theme="c">
			<input type="text" name="code" id="code" value="" placeholder="Input download code here"/>
			<button type="submit" data-theme="b" name="submit" value="submit-value">Download</button>
			<a href="." data-role="button" data-theme="c" rel="external">Cancel</a>    
		</div>
	</div>
</form>

</body>
</html>

<?php
		}
?>
