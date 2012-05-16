<?php
#$result = file_get_contents("https://www.google.com/cse?cx=012399979458248589958:lpem1r75tsw&q=liang");
$qkw = preg_replace('/\ /', '+', trim($_POST['qkw']));
$qkw = "liang";
$site = '+site:http%3A%2F%2Fconferences.sigcomm.org%2Fsigcomm%2F2012%2F';
//$result = file_get_contents("http://www.google.com/search?rls=en&ie=UTF-8&oe=UTF-8&q=" . $qkw . $site);
$result = file_get_contents("http://www.google.fi/search?q=wang");
echo '===', $result;
$pattern = '/<li class="g"[^>]*>(.*)<\/li>/sU';
preg_match_all($pattern, $result, $matches, PREG_SET_ORDER);
$rstr = "";

foreach ($matches as $val) {
	$p2 = '/<h3 class="r">(.*)<\/h3>/s';
	//echo "+++<br>" . $val[0];
	preg_match_all($p2, $val[0], $m2, PREG_SET_ORDER);
	$p4 = '/url\?q=(.*)\&/sU';
	preg_match_all($p4, $val[0], $m4, PREG_SET_ORDER);
	$lnk = $m4[0][1];
	$lnk = "<a href=\"" . $m4[0][1] . "\">" . $m4[0][1] . "</a>";

	$p3 = '/<div class="s">(.*)<div>/s';
	preg_match_all($p3, $val[0], $m3, PREG_SET_ORDER);
	$cnt = $m3[0][1];
	$rstr = $rstr . "<li>" . $lnk . "</li>";
	echo '---';
}

//$rstr = '<ul data-role="listview" data-inset="true" data-theme="c" class="datetbl">' . $rstr . '</ul>';
echo $rstr;

?>