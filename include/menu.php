<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="index.php"><img src="images/helsinki-logo.png" style="display:block; margin:auto; width:50%; padding-bottom:1em;" alt="SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland" /></a>
		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li <?php if ($page_title=="Home") echo 'class="page-now"' ?> ><a href="index.php">Home</a></li>
			<li <?php if ($mypage=="supporters.php") echo 'class="page-now"' ?> ><a href="supporters.php">Supporters</a></li>
			<li <?php if ($page_title=="Workshops") echo 'class="page-now"' ?> ><a href="workshops.php">Workshops</a></li>
			<li <?php if ($page_title=="Tutorials") echo 'class="page-now"' ?> ><a href="tutorials.php">Tutorials</a></li>
			<li <?php if ($mypage=="cfd.php") echo 'class="page-now"' ?> ><a href="cfd.php">Posters & Demos</a></li>
			<li <?php if ($mypage=="registration.php") echo 'class="page-now"' ?> ><a href="registration.php">Registration</a></li>
			<li <?php if ($mypage=="localinfo.php") echo 'class="page-now"' ?> ><a href="localinfo.php">Local Information</a></li>
			<li <?php if ($mypage=="travel_grant.php") echo 'class="page-now"' ?> ><a href="travel_grant.php">Student Travel Grants</a></li>
			<li <?php if ($mypage=="pclist.php") echo 'class="page-now"' ?> ><a href="pclist.php">Program Committee</a></li>
			<!--  <li><a href="conference.php">Conference</a></li> -->
			<!-- <li><a href="schedule.php" style="padding-left:2em; font-size:0.8em; color:green;">Schedule</a></li> -->
			<!-- <li><a href="schedule.php" style="padding-left:2em; font-size:0.8em; color:green;">Poster Program</a></li> -->
			<li <?php if ($mypage=="organization.php") echo 'class="page-now"' ?> ><a href="organization.php">Organization Committee</a></li>
			<!-- <li <?php if ($mypage=="localinfo.php") echo 'class="page-now"' ?> ><a href="localinfo.php">Local Information</a></li> -->

			<li class="subnavlist" data-icon="plus" data-theme="c" ><a class=navlink href="">Other Information</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="cfp.php">Call for Papers</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="proposals.php">Call for Workshop Proposals</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="cft.php">Call for Tutorials</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="submission.php">Paper Submission</a></li>
			
			<li>
			<div class="center socialbuttons">
			<div class="fb-like" data-href="http://conferences.sigcomm.org/sigcomm/2012/" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="sigcomm12" data-hashtags="SIGCOMM">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<div class="g-plusone" data-size="medium"></div>
			</div>
			</li>
		</ul>
<br/>

		<p class="center">Conference Hosts</p>
		<div  class="hostlogo center" >
		<a href="http://www.aalto.fi/en/"><img style="width:30%" src="images/aalto.png" alt="Aalto" /></a>
		<a href="http://www.nokia.com"><img style="width:45%" src="images/nokia.png" alt="Nokia" /></a>
		</div>


	<a href="mailto:sigcomm2012-gen-chairs@acm.org" data-role="button" style="margin:3em auto 3em auto; width:50%">Contact us</a>
	
	</div>

<?php 
#include ("supporters.php");
?>
