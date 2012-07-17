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
	print('<li data-icon="false">');
	if ($link) {
		printf('<a href="%s" rel="external">', $link);
	}
	printf('<div class="ui-grid-a"><div class="ui-block-a"><p>%s</p></div><div class="ui-block-b"><p>%s</p></div></div>',
		   $name, $organization);
	if ($link) {
		printf('</a>');
	}
	print('</li>');
}

function add_dateitem($date, $info)
{
	printf('<li data-icon="false"><div class="ui-grid-a"><div class="ui-block-a"><h2>%s</h2></div><div class="ui-block-b"><p>%s</p></div></div></li>',
		   $date, $info);
}

function tprog_add_session($time, $title, $chair="")
{
	printf('<li class="ui-bar-%s" data-role="list-divider"><h3>%s %s</h3>',
	       (preg_match('/lunch|coffee/i', $title) ? "d" : "b"), $time, $title);
	if ($chair) {
		$chair = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $chair);
		printf('<p>Session Chair: %s</p>', $chair);
	}
	print("</li>\n");

}

function tprog_add_item($paper, $link, $authors, $info)
{
	/* the spaces after various "%s" below are important for correct list filtering! */
	$authors = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $authors);
	print('<li data-icon="false">');
	if ($link) {
		printf('<a href="%s" rel="external">', $link);
	}
	if ($paper) {
		printf('<h3>%s </h3>', $paper);
	}
	if ($authors) {
		if (preg_match('/^\s*\<p\>/i', $authors)) {
			printf('%s ', $authors);
		} else {
			printf('<p>%s </p>', $authors);
		}	
	}
	if($info) {
		printf('<p class="ui-li-count prog-%s">%s </p>',
			   preg_replace('/\s/', '', strtolower($info)), $info);
	}
	if ($link) {
		print('</a>');
	}
	print("</li>\n");
}

?>

