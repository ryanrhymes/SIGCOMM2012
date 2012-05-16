<?php
    /* based on http://juicystudio.com/article/content-negotiation.php#php */

    /* but then google maps barfs */
    /*
    if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml"))  {
        header("Content-Type: application/xhtml+xml; charset=utf-8");
    } else if (stristr($_SERVER["HTTP_USER_AGENT"],"W3C_Validator")) {
        header("Content-Type: application/xhtml+xml; charset=utf-8");
    } else {
        header("Content-Type: text/html; charset=utf-8");
    }
    header("Vary: Accept");
    */

    /* triggers IE quirk mode...
    echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
    */
    include_once "functions.php";
    $mypage = current_pagename();
?>

<!DOCTYPE HTML>

<html>

<head>
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland
<?php
    if(isset($page_title)) {
        if (!empty($page_title)) {
            echo (" - $page_title");
        }
    } else {
        $filename = $_SERVER['SCRIPT_FILENAME'];
        $filename = preg_replace("/^.*\//","",$filename);
        $filename = preg_replace("/.php$/","",$filename);
        echo(" - $filename");
    }
?>
    </title>

    <!-- <link rel="stylesheet" href="<?php echo "$htmlroot/"; ?>css/style.css" type="text/css" /> -->
    <link rel="shortcut icon" href="<?php echo "$htmlroot/"; ?>images/sigcomm-icon.png" />
	<link rel="stylesheet" href="css/jquery.mobile-1.0b1.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<!--[if IE]>
		<link rel="stylesheet" href="css/jqm-docs.ie.css" />
	<![endif]-->
	<!--[if !IE]><!-->
		<link rel="stylesheet" href="css/jqm-docs.css" />
	<!-- <![endif]-->
	<script type="text/javascript" src="js/jqm-docs.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mobile.min.js"></script>
	<script type="text/javascript" src="js/supporters2.js"></script>
	<script>
		$('#jqm-home').live( 'pageinit',function(event){
		    try
		    {
				init_sps();
				ticker_tape();

				$(".subnavlist").click(
					function() {
						//$(".subnavlist").addClass("page-now");
						$(".subnavlist").find("span").toggleClass("ui-icon-plus");
						$(".subnavlist").find("span").toggleClass("ui-icon-minus");
						if( $(".subnavlink").css("display") == "none" )
						{
							$(".subnavlink").css("display", "block");
						}
						else
						{
							$(".subnavlink").css("display", "none");
						}
					}
				);
		    }
		    catch(err)
		    {
		    	//alert(err);
		    }

		});
  	</script>
</head>

<body>


<div data-role="page" id="jqm-home" class="type-home">

	<div data-role="header">
		<!-- <a href="index.php" data-role="button" data-icon="home">Home</a> -->
		<!-- <h1>SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland</h1> -->
	</div><!-- /header -->

	<div data-role="content">	

		<?php include ("menu.php"); ?>

		<!-- <div class="ui-block-b" style="width:75%; padding-left:2%"> -->
		<div class="content-primary">