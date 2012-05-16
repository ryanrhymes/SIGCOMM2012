<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="." rel="external"><img src="<?php echo "$htmlroot/"; ?>images/helsinki-logo.png" style="display:block; margin:auto; width:50%; padding-bottom:1em;" alt="SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland" /></a>
		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li <?php if ($page_title=="Home") echo 'class="page-now"' ?> ><a href="index.php" rel="external">Home</a></li>
			<li <?php if ($mypage=="supporters.php") echo 'class="page-now"' ?> ><a href="supporters.php" rel="external">Supporters</a></li>
			<li <?php if ($mypage=="cfd.php") echo 'class="page-now"' ?> ><a href="cfd.php" rel="external">Call for Posters and Demos</a></li>
			<li <?php if ($page_title=="Workshops") echo 'class="page-now"' ?> ><a href="workshops.php" rel="external">Workshops</a></li>
			<li <?php if ($page_title=="Tutorials") echo 'class="page-now"' ?> ><a href="tutorials.php" rel="external">Tutorials</a></li>
			<li <?php if ($mypage=="registration.php") echo 'class="page-now"' ?> ><a href="registration.php" rel="external">Registration</a></li>
			<li <?php if ($mypage=="localinfo.php") echo 'class="page-now"' ?> ><a href="localinfo.php" rel="external">Local Information</a></li>
			<li <?php if ($mypage=="travel_grant.php") echo 'class="page-now"' ?> ><a href="travel_grant.php" rel="external">Travel Grants</a></li>
			<li <?php if ($mypage=="pclist.php") echo 'class="page-now"' ?> ><a href="pclist.php" rel="external">Program Committee</a></li>
			<!--  <li><a href="conference.php" rel="external">Conference</a></li> -->
			<!-- <li><a href="schedule.php" style="padding-left:2em; font-size:0.8em; color:green;">Schedule</a></li> -->
			<!-- <li><a href="schedule.php" style="padding-left:2em; font-size:0.8em; color:green;">Poster Program</a></li> -->
			<li <?php if ($mypage=="organization.php") echo 'class="page-now"' ?> ><a href="organization.php" rel="external">Organization Committee</a></li>
			<!-- <li <?php if ($mypage=="localinfo.php") echo 'class="page-now"' ?> ><a href="localinfo.php" rel="external">Local Information</a></li> -->

			<li class="subnavlist" data-icon="plus" data-theme="c" ><a class=navlink href="">Other Information</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="cfp.php" rel="external">Call for Papers</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="proposals.php" rel="external">Call for Workshop Proposals</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="cft.php" rel="external">Call for Tutorials</a></li>
			<li class="subnavlink" style="display:none;" data-theme="c"><a href="submission.php" rel="external">Paper Submission</a></li>
			<li></li>
		</ul>
<br/>

		<span style="margin:0 auto 0 auto; display:block; text-align:center; "><a class="lnkcls" href="supporters.php" rel="external">Conference Hosts</a></span>

		<a href="http://www.aalto.fi/en/"><img style="width:26%; margin:12%; vertical-align:middle;" src="images/aalto.png" alt="Aalto" /></a>
		<a href="http://www.nokia.com"><img style="width:49%; margin:auto; vertical-align:middle;" src="images/nokia.png" alt="Nokia" /></a>


	<a href="mailto:sigcomm2012-gen-chairs@acm.org" data-role="button" data-mini="true" style="margin:auto; width:50%">Contact us</a>
	
	</div>

<?php 
#include ("supporters.php");
?>
