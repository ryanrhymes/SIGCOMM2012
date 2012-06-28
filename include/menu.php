<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="index.php"><img class="center conflogo" src="images/helsinki-logo.png" alt="ACM SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland" /></a>
		
		<a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls" id="sitenav">Site Navigation</h2></a>
		
		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li <?php if ($mypage=="index.php") echo 'class="page-now"' ?> ><a href="index.php">Home</a></li>
			<li <?php if ($mypage=="supporters.php") echo 'class="page-now"' ?> ><a href="supporters.php">Supporters</a></li>
			<li <?php if ($mypage=="program.php") echo 'class="page-now"' ?> ><a href="program.php">Program</a></li>
			<li <?php if ($mypage=="workshops.php") echo 'class="page-now"' ?> ><a href="workshops.php">Workshops &amp; Tutorials</a></li>
			<li <?php if ($mypage=="registration.php") echo 'class="page-now"' ?> ><a href="registration.php">Registration</a></li>
			<li <?php if ($mypage=="localinfo.php") echo 'class="page-now"' ?> ><a href="localinfo.php">Local Information</a></li>
			<li <?php if ($mypage=="pclist.php") echo 'class="page-now"' ?> ><a href="pclist.php">Program Committee</a></li>
			<li <?php if ($mypage=="organization.php") echo 'class="page-now"' ?> ><a href="organization.php">Organization Committee</a></li>
			
			<li class="subnavlist" data-icon="plus" data-theme="c" ><a class="navlink" href="#">Older Information</a></li>
			<li class="subnavlink hidden <?php if ($mypage=="cfd.php") echo 'page-now' ?>" data-theme="c"><a href="cfd.php">Call for Posters &amp; Demos</a></li>
			<li class="subnavlink hidden <?php if ($mypage=="cfp.php") echo 'page-now' ?>" data-theme="c"><a href="cfp.php">Call for Papers</a></li>
			<li class="subnavlink hidden <?php if ($mypage=="proposals.php") echo 'page-now' ?>" data-theme="c"><a href="proposals.php">Call for Workshop Proposals</a></li>
			<li class="subnavlink hidden <?php if ($mypage=="cft.php") echo 'page-now' ?>" data-theme="c"><a href="cft.php">Call for Tutorials</a></li>
			<li class="subnavlink hidden <?php if ($mypage=="submission.php") echo 'page-now' ?>" data-theme="c"><a href="submission.php">Paper Submission</a></li>
			<li class="subnavlink hidden <?php if ($mypage=="travel_grant.php") echo 'page-now' ?>" data-theme="c"><a href="travel_grant.php">Student Travel Grants</a></li>
			</ul>

		<div class="hostlogo border ui-corner-all ui-shadow">
			<div><a href="http://www.aalto.fi/en/"><img src="images/aalto.png" alt="Aalto University" /></a></div>
			<div><a href="http://www.nokia.com"><img src="images/nokia.png" alt="Nokia" /></a>	 </div>
		    <p class="ui-btn-text">SIGCOMM 2012 Hosts</p>
		</div>

		<div class="border ui-corner-all ui-shadow socialbuttons">
			<iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%"></iframe>
		</div>
 		<div style="margin-top: 2em" class="tweetlist">
			<iframe src="include/tweetlist.php" scrolling="no" height="380" width="100%"></iframe>
		</div>
	</div>
