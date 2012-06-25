<?php
/* some common functions and definitions */

/* read a specified number of lines from a file */
function read_lines($file,$num)
{
    $content = file_get_contents($file);
    $content = preg_replace("/<!--.*-->/Us", "", $content);
    $content = preg_replace("/\n\n/", "\n", $content);
    $lines = preg_split("/\n/", $content);
    $length = count($lines);
    $num = ($num > 0 && $num <= $length ? $num : $length);
    for ($i = 0; $i < $num; $i++) {
        echo "$lines[$i]\n";
    }
}

/* get the time a file was last modified */
function last_modified($file)
{
    if (!$file) {
        return;
    }
    echo "Last modified: ";
    if ($file==1) {
        echo date("c", filemtime($_SERVER["SCRIPT_FILENAME"]));
    } else {
        echo date("c", filemtime($file));
    }
    /*echo "Last modified: " . date("d M Y Hi T", filemtime($_SERVER["SCRIPT_FILENAME"]));*/

    }

function current_pagename()
{
	$currentFile = $_SERVER["PHP_SELF"];
	$parts = Explode('/', $currentFile);
	$mypage = $parts[count($parts) - 1];
	return $mypage;
}

function add_listitem($name, $organization, $link)
{
	print( "
	<li>
	   <div class=\"ui-grid-a\">
		<div class=\"ui-block-a\">
			$name
		</div>
		<div class=\"ui-block-b\">
			$organization
		</div>
	  </div><!-- /grid-a -->
	</li>
	");
}

function add_dateitem($date, $info)
{
	print( "
		<li>
			<div class=\"datetag_w\">$date</div>
			<p>$info</p>
		</li>
	");
}

function tprog_add_session($time, $title, $chair="")
{
	printf('<li class="ui-bar-%s" data-role="list-divider"><h3>%s %s</h3>',
	       (preg_match('/lunch|coffee/i', $title) ? "d" : "b"), $time, $title);
	if ($chair) {
		$chair = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $chair);
		printf('<p>Session Chair: %s</p>', $chair);
	}
	print('</li>');

}

function tprog_add_item($paper, $link, $authors, $info)
{
	$authors = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $authors);
	print('<li data-theme="d" data-icon="false">');
	if ($link) {
		printf('<a href="%s" rel="external">', $link);
	}
	printf('<h3>%s</h3><p>%s</p>', $paper, $authors);
	if($info) {
		printf('<p class="ui-li-aside prog-%s">%s</p>', strtolower($info), $info);
	}
	if ($link) {
		print('</a>');
	}
	print('</li>');
}

?>

