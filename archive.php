<?php
	include_once "include/functions.php";
	$code = $_POST["code"]
	if (check_downloadcode($code, "codes.txt"))
	{
		send_paper_archive("/home/lxwang/htdocs/SIGCOMM2012/archive.zip");
	}
	else
	{
		echo "You don't have valid code to download the archive!";
	}
?>
