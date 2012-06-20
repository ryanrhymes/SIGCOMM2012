<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="index.php"><img class="center conflogo" src="images/helsinki-logo.png"  alt="ACM SIGCOMM 2012, August 13-17, 2012, Helsinki, Finland" /></a>
		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li <?php if ($page_title=="Home") echo 'class="page-now"' ?> ><a href="index.php">Home</a></li>
			<li <?php if ($page_title=="Supporters") echo 'class="page-now"' ?> ><a href="supporters.php">Supporters</a></li>
			<li <?php if ($page_title=="Conference Program") echo 'class="page-now"' ?> ><a href="program.php">Program</a></li>
			<li <?php if ($page_title=="Workshops") echo 'class="page-now"' ?> ><a href="workshops.php">Workshops</a></li>
			<li <?php if ($page_title=="Tutorials") echo 'class="page-now"' ?> ><a href="tutorials.php">Tutorials</a></li>
			<li <?php if ($mypage=="cfd.php") echo 'class="page-now"' ?> ><a href="cfd.php">Posters &amp; Demos</a></li>
			<li <?php if ($mypage=="registration.php") echo 'class="page-now"' ?> ><a href="registration.php">Registration</a></li>
			<li <?php if ($mypage=="localinfo.php") echo 'class="page-now"' ?> ><a href="localinfo.php">Local Information</a></li>
			<li <?php if ($mypage=="travel_grant.php") echo 'class="page-now"' ?> ><a href="travel_grant.php">Student Travel Grants</a></li>
			<li <?php if ($mypage=="pclist.php") echo 'class="page-now"' ?> ><a href="pclist.php">Program Committee</a></li>
			<li <?php if ($mypage=="organization.php") echo 'class="page-now"' ?> ><a href="organization.php">Organization Committee</a></li>
			
			<li class="subnavlist" data-icon="plus" data-theme="c" ><a class=navlink href="">Older Information</a></li>
			<li class="subnavlink hidden" data-theme="c"><a href="cfp.php">Call for Papers</a></li>
			<li class="subnavlink hidden" data-theme="c"><a href="proposals.php">Call for Workshop Proposals</a></li>
			<li class="subnavlink hidden" data-theme="c"><a href="cft.php">Call for Tutorials</a></li>
			<li class="subnavlink hidden" data-theme="c"><a href="submission.php">Paper Submission</a></li>
			</ul>

		<div class="hostlogo border ui-corner-all ui-shadow">
			<div><a href="http://www.aalto.fi/en/"><img src="images/aalto.png" alt="Aalto University" /></a></div>
			<div><a href="http://www.nokia.com"><img src="images/nokia.png" alt="Nokia" /></a>	 </div>
		    <p class="ui-btn-text">SIGCOMM 2012 Hosts</p>
		</div>

		<div class="border ui-corner-all ui-shadow">
			<div class="center socialbuttons">
			<div class="fb-like" data-href="http://conferences.sigcomm.org/sigcomm/2012/" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
			<a href="https://twitter.com/share" class="twitter-share-button" data-related="sigcomm12" data-hashtags="sigcomm12">Tweet</a>
			<div class="g-plusone" data-size="medium"></div>
			</div>
		</div>
<!--
 		<div class="border ui-corner-all ui-shadow">
			<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'search',
			  search: 'test',
			  interval: 30000,
			  title: '',
			  subject: '#sigcomm12',
			  width: '100%',
			  height: 300,
			  theme: {
				shell: {
				  'text-shadow': 'none',
				  background: '#6ec8e8',
				  color: '#ffffff'
				},
				tweets: {
				  background: '#ffffff',
				  color: '#000000',
				  links: '#6ec8e8'
				}
			  },
			  features: {
				scrollbar: true,
				loop: false,
				live: true,
				behavior: 'default'
			  }
			}).render().start();
			</script>
		</div>
	</div>
-->