	</div><!-- /ui-block-b -->
		<?php include ("menu.php"); ?>
	</div><!-- /content -->


<?php if ($mypage != "supporters.php")
	echo('<div class="logobar" data-role="footer" data-position="fixed" data-theme="c"></div>');
?>
</div><!-- /page -->

<?php
	$jsstr = "sps = [\n";
	$supporters = array();
	$supporters["aalto"]	= array(50, "aalto.png", "http://www.aalto.fi/en/");
	$supporters["nokia"] 	= array(50, "nokia.png", "http://www.nokia.com/");
	$supporters["cisco"] 	= array(25, "cisco.png", "http://www.cisco.com/");
	$supporters["helsinki"]	= array(25, "helsinki.png", "http://www.hel.fi/hki/Helsinki/en/Etusivu");
	$supporters["ericsson"]	= array(25, "ericsson.png", "http://www.ericsson.com/");
	$supporters["nec"] 		= array(25, "nec.png", "http://www.nec.com/");
	$supporters["netapp"] 	= array(25, "netapp.png", "http://www.netapp.com/");
	$supporters["att"] 		= array(10, "att.png", "http://www.att.com/");
	$supporters["bell"] 	= array(10, "bell.png", "http://www.bell-labs.com/");
	$supporters["isoc"] 	= array(10, "isoc.png", "http://www.isoc.org/");
	$supporters["verisign"] = array(10, "verisign.png", "http://www.verisigninc.com/");
	$supporters["riverbed"] = array(10, "riverbed.png", "http://www.riverbed.com/");
	$supporters["tele"] 	= array(10, "tele.png", "http://www.tid.es/");
	$supporters["huawei"] 	= array(10, "huawei.png", "http://www.huawei.com/");
	$supporters["facebook"] = array(10, "facebook.png", "http://www.facebook.com/");
	$supporters["google"] 	= array(10, "google.png", "http://www.google.com/");
	$supporters["conviva"] 	= array(10, "conviva.png", "http://www.conviva.com/");
	//$supporters["akamai"] 	= array(10, "akamai.png", "http://www.akamai.com/");
	$supporters["comcast"] 	= array(10, "comcast.png", "http://www.comcast.com/");
	$supporters["hp"] 		= array(10, "hp.png", "http://www.hp.com/");
	$supporters["microsoftresearch"] = array(10,"microsoftresearch.png", "http://research.microsoft.com/");

	$numItems = count($supporters);
	$i = 0;
	foreach ($supporters as $supporter => $info)
	{
		list($money, $logo, $url) = $info;
		list($width, $height, $type, $attr)= getimagesize("images/$logo");
		echo "<img src='images/$logo' alt='cached' class='hidden'>";
		$jsstr = "$jsstr\t[$money, \"$logo\", \"$url\", \"$supporter\", 0, $height, $width]";
		if($i < $numItems-1) {
		      $jsstr = "$jsstr,";
  		}
		$jsstr = "$jsstr\n";
		$i++;
	}

	$jsstr = "<script type=\"text/javascript\">\n$jsstr ];</script>";
	echo $jsstr;
?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31902726-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>

</html>

<?php
	# Transparently convert normal ASCII quotes into typographic punctuation HTML entities.
	# http://michelf.com/projects/php-smartypants/
	print SmartyPants(ob_get_clean());
?>
