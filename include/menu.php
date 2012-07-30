<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="index.php"><img class="center conflogo" src="images/helsinki-logo.png" alt="ACM SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland" /></a>

		<a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls">Site Menu</h2></a>

		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>
			<li data-icon="false" <?php if ($mypage=="supporters.php") echo 'class="navselected"' ?> ><a href="supporters.php">Supporters</a></li>
			<li data-icon="false" <?php if ($mypage=="program.php") echo 'class="navselected"' ?> ><a href="program.php">Program</a></li>

			<li class="navheader-a" data-icon="plus" data-theme="c" ><a href="#">Workshops</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="cellnet.php") echo 'navselected' ?>" data-theme="c"><a href="cellnet.php">CellNet</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="hotsdn.php") echo 'navselected' ?>" data-theme="c"><a href="hotsdn.php">HotSDN</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="medcomm.php") echo 'navselected' ?>" data-theme="c"><a href="medcomm.php">MedCOMM</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="mobigame.php") echo 'navselected' ?>" data-theme="c"><a href="mobigame.php">MobiGames</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="icn.php") echo 'navselected' ?>" data-theme="c"><a href="icn.php">ICN</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="mcc.php") echo 'navselected' ?>" data-theme="c"><a href="mcc.php">MCC</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="wmust.php") echo 'navselected' ?>" data-theme="c"><a href="wmust.php">W-MUST</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="wosn12.php") echo 'navselected' ?>" data-theme="c"><a href="wosn12.php">WOSN</a></li>

			<li class="navheader-b" data-icon="plus" data-theme="c" ><a href="#">Tutorials</a></li>
			<li data-icon="false" class="subnav-b <?php if ($mypage=="nasg.php") echo 'navselected' ?>" data-theme="c"><a href="nasg.php">NASG</a></li>
			<li data-icon="false" class="subnav-b <?php if ($mypage=="sora.php") echo 'navselected' ?>" data-theme="c"><a href="sora.php">SORA</a></li>
			<li data-icon="false" class="subnav-b <?php if ($mypage=="hci.php") echo 'navselected' ?>" data-theme="c"><a href="hci.php">HCI</a></li>
			<li data-icon="false" class="subnav-b <?php if ($mypage=="pwn.php") echo 'navselected' ?>" data-theme="c"><a href="pwn.php">PWN</a></li>

			<li data-icon="false" <?php if ($mypage=="registration.php") echo 'class="navselected"' ?> ><a href="registration.php">Registration</a></li>
			<li data-icon="false" <?php if ($mypage=="localinfo.php") echo 'class="navselected"' ?> ><a href="localinfo.php">Local Information</a></li>
			<li data-icon="false" <?php if ($mypage=="pclist.php") echo 'class="navselected"' ?> ><a href="pclist.php">Program Committee</a></li>
			<li data-icon="false" <?php if ($mypage=="organization.php") echo 'class="navselected"' ?> ><a href="organization.php">Organization Committee</a></li>

			<li class="navheader-c" data-icon="plus" data-theme="c" ><a href="#">Older Information</a></li>
			<li data-icon="false" class="subnav-c <?php if ($mypage=="cfd.php") echo 'navselected' ?>" data-theme="c"><a href="cfd.php">Call for Posters &amp; Demos</a></li>
			<li data-icon="false" class="subnav-c <?php if ($mypage=="cfp.php") echo 'navselected' ?>" data-theme="c"><a href="cfp.php">Call for Papers</a></li>
			<li data-icon="false" class="subnav-c <?php if ($mypage=="proposals.php") echo 'navselected' ?>" data-theme="c"><a href="proposals.php">Call for Workshop Proposals</a></li>
			<li data-icon="false" class="subnav-c <?php if ($mypage=="cft.php") echo 'navselected' ?>" data-theme="c"><a href="cft.php">Call for Tutorials</a></li>
			<li data-icon="false" class="subnav-c <?php if ($mypage=="submission.php") echo 'navselected' ?>" data-theme="c"><a href="submission.php">Paper Submission</a></li>
			<li data-icon="false" class="subnav-c <?php if ($mypage=="travel_grant.php") echo 'navselected' ?>" data-theme="c"><a href="travel_grant.php">Student Travel Grants</a></li>
			</ul>

		<div class="hostlogo border ui-corner-all ui-shadow">
			<div><a href="http://www.aalto.fi/en/"><img src="images/aalto.png" alt="Aalto University" /></a></div>
			<div><a href="http://www.nokia.com"><img src="images/nokia.png" alt="Nokia" /></a>	 </div>
		    <p class="ui-btn-text">SIGCOMM 2012 Hosts</p>
		</div>

		<div class="border ui-corner-all ui-shadow socialbuttons">
			<iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		</div>
 		<div style="margin-top: 2em" class="tweetlist">
			<iframe src="include/tweetlist.php" scrolling="no" height="380" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		</div>
	</div>
