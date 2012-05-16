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
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>
<?php
    if(isset($workshop_name)) {
        if (!empty($workshop_name)) {
            echo ("$workshop_name");
        }
    } else {
            echo ("SIGCOMM 2012 Workshop");
    }
?>
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

    
    <link rel="stylesheet" href="<?php echo "$htmlroot/"; ?>css/style.css" type="text/css" /> 
    <link rel="shortcut icon" href="<?php echo "$htmlroot/"; ?>images/sigcomm-icon.png" />
</head>

<body>
<div class="header">
<div class="left"></div>
<div class="right">
<h1><a href="<?php echo "$htmlroot/" ?>" style="text-decoration: none"><?php echo "$workshop_name"; ?></a></h1>
<p>An ACM SIGCOMM 2012 Workshop</p>
<h3><?php echo "$workshop_date"; ?>, HELSINKI, FINLAND</h3><br/>

</div>
</div>


<div id="container">
<div id="navcontainer">
<?php include ("menu-w.php"); ?>
</div>

<div id="contents">

