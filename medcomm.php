<?php
        $page_title="Workshop on Medical Communication Systems (MedCOMM)";
        include("include/header.php");
?>


<h2 class="hcls">Workshop on Medical Communication Systems (MedCOMM)</h2>

<p>
Monday, August 13, 2012<br>
Helsinki, Finland<br>
Rooms: <b>#25-26</b>
</p>
<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("9:00-9:15", "Welcoming Remarks", ""); ?>

		<?php tprog_add_item("Welcoming Remarks by Prof. Kevin Fu",
			"",
			"",
			"");
		?>


		<?php tprog_add_session("9:15-10:00", "Keynote", ""); ?>

		<?php tprog_add_item("Open Access to My Heart's Data",
			"",
			"<a href=\"http://medicinex.stanford.edu/portfolio/hugo-campos/\">Hugo Campos</a>",
			"Keynote");
		?>


		<?php tprog_add_session("10:00-10:30", "Wireless Neural Interfaces", ""); ?>

		<?php tprog_add_item("",
			"",
			"<a href=\"http://nurmikko.engin.brown.edu/?q=node/1\">Prof. Arto Nurmikko</a> (Brown University, Engineering and Physics)",
			"Invited Talk");
		?>


		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("11:00-12:30", "Session 1: Wireless Medical Devices: Implanted and Worn", ""); ?>

		<?php tprog_add_item("Emerging Wireless Applications in Biomedicine",
			"",
			"<a href=\"http://www.adapoon.com/wp/adapoon/\">Prof. Ada Poon</a> (Stanford University, Electrical Engineering)",
			"Invited Talk");
		?>


		<?php tprog_add_item("Electronics on Contact Lenses and Low Power Sensor Interfaces/Wireless for Peer-to-Peer Medical Communication",
			"",
			"<a href=\"http://www.ee.washington.edu/faculty/otis_brian/\">Prof. Brian Otis</a> (University of Washington, Electrical Engineering)",
			"Invited Talk");
		?>

		<?php tprog_add_item("Modulated Backscatter for Ultra-low Power Uplinks from Wearable and Implantable Devices",
			"paper/medcomm/p1.pdf",
			"Stewart J. Thomas, Jordan S. Besnoff, Matthew S. Reynolds (Duke University)",
			"Paper");
		?>


		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>


		<?php tprog_add_session("14:00-15:00", "Session 2: Medical Device Communication: Safety, Effectiveness, Security", ""); ?>

		<?php tprog_add_item("Microchip Based Sensors and Drug Delivery Systems",
			"",
			"<a href=\"http://www.nature.com/news/wireless-drug-implant-takes-the-trouble-out-of-treatment-1.10045\">Bob Farra</a> (<a href=\"http://www.mchips.com/\">MicroCHIPS</a> President, COO)",
			"Invited Talk");
		?>

		<?php tprog_add_item("Towards a Safe Integrated Clinical Environment: A Communication Security Perspective",
			"paper/medcomm/p7.pdf",
			"Denis Foo Kune, Yongdae Kim (Univ. Minnesota); Krishna Venkatasubramanian, Insup Lee (UPenn); Eugene Vasserman (Kansas State Univ.)",
			"Paper");
		?>


		<?php tprog_add_session("15:00-15:30", "Social Engineering Event", ""); ?>


		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("16:00-17:00", "Session 3: Medical Communication: Radio Interference and Propagation", ""); ?>


		<?php tprog_add_item("Wireless Medical Devices and Electromagnetic Compatibility",
			"",
			"<a href=\"http://www.fda.gov/MedicalDevices/DeviceRegulationandGuidance/GuidanceDocuments/ucm077210.htm\">Don Witters*</a> (Center for Devices and Radiological Health [CDRH] at the U.S. Food and Drug Administration [FDA])",
			"Invited Talk");
		?>

		<?php tprog_add_item("RF Propagation in Body Area Networks",
			"",
			"<a href=\"http://www.oaee.umd.edu/facstaff/sayrafian.html\">Kamran Sayrafian</a> (U.S. Information Technology Laboratory of the National Institute of Standards and Technology [NIST])",
			"Invited Talk");
		?>

	</ul>

<p>* pending federal approval</p>

<p><a href="workshops/MedCOMM-program-draft-2012.pdf" rel="external" class="lnkcls">Printable program</a></p>


<h2 class="hcls">Introduction</h2>


<p>ACM MedCOMM invites papers that stimulate research in communications or computer networks with application to medical device communication
  systems. Key properties include safety, effectiveness, reliability, and security.</p>
<p>There is an increasing trend toward the convergence of wireless communication, Internet connectivity, and medicine. Devices with advanced computer communication range from body-worn health monitors to implantable medical devices to remote robotic medical devices in the battlefield. A growing list of such devices includes artificial vision, brain-computer interfaces for prosthetics, cardiac monitors, defibrillators, digital mammography, glucose monitors, infusion pumps, insulin pumps,  neurostimulators, pacemakers, radiological electronic picture archiving and communication systems,  and smart stents. All these systems depend on the safe, effective, reliable, and secure communication and computer networking. Advanced research on medical communication systems will help innovators of next-generation medical technologies that aim to improve public health in the digital age.</p>

<a href="workshops/Medcomm_one_pager_final.pdf" rel="external" data-role="button" class="button">Flyer</a>
<a href="workshops/MedCOMM12_cfp.pdf" rel="external" data-role="button" class="button">PDF Version</a>


<h2 class="hcls">Topics</h2>

We solicit submissions on topics including, but not limited to, the
following:

<ul>
  <li>Safe and effective network architectures and protocols for highly interoperable wireless medical
devices</li>
  <li>Applications of cognitive radio to maximize spectrum utilization and spectrum sharing on unlicensed
bands</li>
  <li>Data integrity and reliability issues in allocated or unlicensed spectrum</li>
  <li>Mobile phones as medical sensor gateways</li>
  <li>Ultra-low power communications</li>
  <li>Deployment of open medical communication systems</li>
  <li>Communications and computer networks designed for  validation, formal<br />
verification, or hazard analysis</li>
  <li>Usability issues, security/privacy issues, regulatory/policy issues</li>
  <li>Industrial experiences, provider experiences, regulator experiences</li>
</ul>


<h2 class="hcls">Submission Instructions</h2>

<p>
Papers should  fall into one of the following categories: position paper or early-stage systems/measurement paper.
MedCOMM does not seek papers of already sufficient maturity for full-length conference papers. Rather, the workshop seeks
innovative papers that discuss early-stage research or consider unconventional ideas for medical
communication systems. The program committee will favor papers that are likely to generate
healthy debate at the workshop. We recognize that early-stage papers will not necessarily have completed all experiments,  simulation, or analysis. However, papers must have credible motivation
and reasonable evidence of feasibility with clearly stated evaluation criteria.</p>
<p>
Papers may not exceed 6 pages (including references) and must be in PDF format. Text must be in two-column, 10pt format.  	Reviews will be single-blind:
please include author names and affiliation in the submission. Submissions must be original work not under review at any other workshop, conference, or journal. Papers not adhering to the guidelines will be rejected without review.</p>
<p>
Authors of accepted papers are expected to present their papers at the workshop; at least one author must register to join the interactive workshop.
Papers should be submitted via the <a href="https://pain.cs.umass.edu/" >submission site</a>. Information about student stipends will appear in late Spring.</p>

<a href="mailto:medcomm12-chair@cs.umass.edu" data-role="button" class="button">Email the Organizers</a>

<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
	<?php add_dateitem("Paper Registration", "<span class='linethrough'>March 16, 2012</span>"); ?>
	<?php add_dateitem("Submissions Due", "<span class='linethrough'>March 23, 2012</span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "<span class='linethrough'>May 1, 2012</span>"); ?>
	<?php add_dateitem("Workshop Date", "August 13, 2012"); ?>
</ul>


<h2 class="hcls">Organization</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Program Committee Chair</li>
	<?php
		add_listitem("Kevin Fu", "University of Massachusetts Amherst", "http://www.cs.umass.edu/~kevinfu/");
	?>


	<li data-role="list-divider">Program Committee Members</li>
	<?php
		add_listitem("Srdjan Capkun", "ETH Z&uuml;rich", "http://www.syssec.ethz.ch/people/capkun");
		add_listitem("Nicolas Christin", "Carnegie Mellon University", "http://www.andrew.cmu.edu/user/nicolasc/");
		add_listitem("Prabal Dutta", "University of Michigan", "http://www.cs.berkeley.edu/~prabal/");
		add_listitem("Nick Feamster", "University of Maryland", "http://www.cc.gatech.edu/~feamster/");
		add_listitem("Shyamnath Gollakota", "Massachusetts Institute of Technology", "http://people.csail.mit.edu/gshyam/");
		add_listitem("Matt Reynolds", "Duke University", "http://alumni.media.mit.edu/~matt/");
		add_listitem("Joshua Smith", "University of Washington", "http://sensor.cs.washington.edu/jrs.html");
		add_listitem("Jacob Sorber", "Dartmouth College", "http://www.cs.dartmouth.edu/~sorber/");
		add_listitem("John Stankovic", "University of Virginia", "http://www.cs.virginia.edu/people/faculty/stankovic.html");
		add_listitem("Desney Tan", "Microsoft Research", "http://research.microsoft.com/en-us/um/people/desney/");
		add_listitem("Keith Winstein", "Massachusetts Institute of Technology", "");
	?>

</ul>


<?php
    include ("include/footer.php");
?>
