<?php
        $page_title="Workshop on Measurements Up and Down the STack (W-MUST)";
        include("include/header.php");
?>


<h2 class="hcls">Workshop on Measurements Up and Down the STack (W-MUST)</h2>

<p>
Friday, August 17, 2012<br>
Helsinki, Finland<br>
Rooms: <b>#25-26</b>
</p>

<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">

		<?php tprog_add_session("9:00-9:10", "Welcome and Introduction", ""); ?>


		<?php tprog_add_session("9:10-10:30", "Session 1: Design From the Networking Perspective", ""); ?>

		<?php tprog_add_item("Measuring the Perceptual Quality of Skype Sources",
			"paper/w-must/p1.pdf",
			"Chien-nan Chen; Cing-Yu Chu; Su-Ling Yeh; Hao-hua Chu; Polly Huang (National Taiwan University)",
			"Paper");
		?>

		<?php tprog_add_item("Creating Relevant Network Measurements That Are Accessible to User-Facing Systems",
			"",
			"",
			"Panel");
		?>


		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("11:00-12:30", "Session 2: Design From the User Perspective", ""); ?>


		<?php tprog_add_item("Estimating Packet Loss Rate in the Access Through Application Level Measurements",
			"paper/w-must/p7.pdf",
			"Simone Basso (NEXA Center for Internet &amp; Society at Politecnico di Torino) Michela Meo (Politecnico di Torino) Antonio Servetti (Politecnico di Torino) Juan Carlos De Martin (NEXA Center for Internet &amp; Society at Politecnico di Torino)",
			"Paper");
		?>

		<?php tprog_add_item("Up, Down and Around the Stack: ISP Characterisation From Network Intensive Applications",
			"paper/w-must/p13.pdf",
			"Zachary S. Bischof; John S. Otto; Fabian E. Bustamante (Northwestern University)",
			"Paper");
		?>

		<?php tprog_add_item("Incorporating User Needs Into Network Measurement Design",
			"",
			"",
			"");
		?>


		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>


		<?php tprog_add_session("14:00-15:30", "Session 3: Co-Design, Considering the Network Stack and the End-User", ""); ?>


		<?php tprog_add_item("User-driven Dynamic Prioritisation In the Home",
			"paper/w-must/p19.pdf",
			"Jake Martin (Georgia Tech); Nick Feamster (University of Maryland)",
			"Paper");
		?>

		<?php tprog_add_item("Bridging the HCI and Networking Communities to Create User-Centered Systems",
			"",
			"",
			"Panel");
		?>


		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>



		<?php tprog_add_session("16:00-16:30", "Reflect and Wrap-Up", ""); ?>

	</ul>



<h2 class="hcls">Introduction</h2>


<p>
  Following the success of the first W-MUST workshop at SIGCOMM 2011, we are holding a second workshop this
  year. W-MUST aims to bring together researchers and practitioners in the networking and HCI communities to
  share new ideas and experiences addressing the challenges of measuring networked applications on end-user
  platforms for purposes related to performance, privacy, security, diagnosis, and troubleshooting. We are
  particularly interested in gathering context related to user activity or reflecting measurement-derived
  information to users. Work that solely considers network-level traces is out of scope. This workshop
  encourages work toward understanding how to gather the user view and correlate it with lower-level
  measurements.
</p>


  <a href="http://www.cs.nott.ac.uk/~rmm/research/2012-wmust/cfp.pdf" class="button" data-role="button" rel="external">PDF version</a>
  <a href="http://www.cs.nott.ac.uk/~rmm/research/2012-wmust/cfp.txt" class="button" data-role="button" rel="external">Text version</a>

<h2 class="hcls">Topics</h2>

<p>
  We solicit short papers describing positions and work-in-progress that will generate lively discussion.
  Topics of interest include, but are not limited to:
</p>
  <ul>
    <li>Incentivizing and providing feedback to users.</li>
    <li>Techniques for gathering individual user perspectives during measurement. </li>
    <li>Sampling users in the face of unpredictability.</li>
    <li>Data collection techniques that respect personalised user privacy.</li>
    <li>Correlating user experience with low level measurements.</li>
    <li>Disambiguating intentional from unintentional network activity.</li>
    <li>Disambiguating user-generated from non-user generated activity.</li>
    <li>Combining user, application, and network measurements on smartphone platforms. </li>
    <li>Exposing hidden activities, on the network and in the cloud, to users.</li>
    <li>Understanding tradeoffs in host data collection between performance impact and data quality.</li>
    <li>Annotating measurement of peoples' use of networked applications with context.</li>
    <li>Optimising network and system resources via context-aware user profiles.</li>
    <li>Quantifying user experience with both network-centric and user-centric metrics. </li>
    <li>Integration of formal and informal user-centric methodologies into measurement.</li>
  </ul>


<h2 class="hcls">Submission Instructions</h2>

<p>
  Submissions must be as PDF files no longer than 6 pages in length. They must include the authors' names and
  affiliations for single-blind peer reviewing by the program committee. Submissions must follow the <a
  href="http://conferences.sigcomm.org/sigcomm/2012/" >SIGCOMM formatting guidelines</a>.
  Authors of accepted papers are expected to present their papers at the workshop. Submissions must be
  original work not under review at any other workshop, conference, or journal. Papers should be submitted via the
  <a href="http://conferences.noise.gatech.edu/WMUST2012/" >submission site</a>.
</p>

<a href="mailto:richard.mortier@nottingham.ac.uk,marshini@cc.gatech.edu" class="button" data-role="button">Email the Organizers</a>


<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
	<?php add_dateitem("Abstract Registration", "<span class='linethrough'>March 30, 2012</span>"); ?>
	<?php add_dateitem("Submissions Due", "<span class='linethrough'>April 6, 2012; extension: <em>April 10, 2012, 23:59 PM PST)</em></span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "May 16, 2012"); ?>
	<?php add_dateitem("Workshop Date", "August 17, 2012"); ?>
</ul>


<h2 class="hcls">Program Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Program Committee Co-Chairs</li>
	<?php
		add_listitem("Marshini Chetty", "Georgia Tech", "http://marshini.net/");
		add_listitem("Richard Mortier", "University of Nottingham", "http://www.cs.nott.ac.uk/~rmm/");
	?>


	<li data-role="list-divider">Program Committee Members</li>
	<?php
		add_listitem("Suman Banerjee", "University of Wisconsin", "");
		add_listitem("AJ Brush", "Microsoft Research Redmond", "");
		add_listitem("Fabian Bustamante", "Northwestern University", "");
		add_listitem("Sean Goggins", "Drexel University", "");
		add_listitem("Tristan Henderson", "University of St. Andrews", "");
		add_listitem("Thomas Karagiannis", "Microsoft Research Cambridge", "");
		add_listitem("Janne Lindqvist", "Rutgers University", "");
		add_listitem("Nina Taft", "Technicolor", "");
		add_listitem("Renata Texeira", "CNRS", "");
	?>

</ul>



<?php
    include ("include/footer.php");
?>
