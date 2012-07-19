<?php
        $page_title="A Networking Approach to the Smart Grid";
        include("include/header.php");
?>


<h2 class="hcls">A Networking Approach to the Smart Grid</h2>

<p>
<b>Presented by:</b> <a href="mailto:keshav@uwaterloo.ca">S. Keshav</a>, <a href="mailto:cath@uwaterloo.ca">C. Rosenberg</a> (University of Waterloo)
</p>

<p>
Monday, August 13, 2012 (half day)<br>
Helsinki, Finland<br>
Room: <b>#15</b>
</p>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("9:00-9:05", "Introduction", ""); ?>

		<?php tprog_add_session("9:05-9:30", "Today's Grid", ""); ?>
		<?php
			tprog_add_item("", "", "
					<p>Generation</p>
					<p>Transmission</p>
					<p>Distribution</p>
			", "");
		?>

		<?php tprog_add_session("9:30-9:50", "Motivation for the Smart Grid", ""); ?>
		<?php
			tprog_add_item("", "", "
					<p>Reliability</p>
					<p>Carbon footprint</p>
					<p>Peak load reduction</p>
					<p>Dealing with new loads</p>
			", "");
		?>

		<?php tprog_add_session("9:50-10:30", "New Technologies for the Smart Grid", ""); ?>
		<?php
			tprog_add_item("", "", "
					<p>Distributed generation</p>
					<p>Renewable energy systems</p>
					<p>Electric vehicles</p>
					<p>Storage systems</p>
					<p>Sensing: smart meters and power measurement units</p>
			", "");
		?>

		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("11:00-11:20", "Similarities and Differences Between the Internet and the Smart Grid", ""); ?>

		<?php tprog_add_session("11:20-11:30", "Survey of Current Work, Open Issues and Challenges", ""); ?>
		<?php
			tprog_add_item("", "", "
					<p>Smart home</p>
					<p>Demand response</p>
					<p>Electric vehicles</p>
					<p>Storage sizing and operation</p>
			", "");
		?>

		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>
	</ul>


<h2 class="hcls">Motivation</h2>
<p>
Several factors have come together to make the Smart Grid a topic of great interest not just to researchers in power systems, but also to researchers in computer science and engineering, industry, policy makers, and the general public. These factors include:
</p>

<ol type="a">
<li>problems with the existing grid: unreliability, dependence on expensive or dirty energy sources, and aging infrastructure </li>
<li>new demands on the grid: lower carbon footprint, demanding new loads from electric vehicles, integration of renewable generation and need to respond quickly to outage</li>
<li>the availability of new computing and communications technology, such as the Internet and cellular telephony, that allows an unprecedented level of monitoring and control.  </li>
<li>the increasing availability of grid-scale storage</li>
</ol>

<p>
These factors are quickly coming together, spurred by the rapid deployment of smart meters as well as a huge governmental push to study, design, and deploy the grid in many countries around the world. This makes it likely that research advances made in the next decade will have a chance to greatly influence the structure and operations of the next power grid.
</p>

<p>
Computer networking researchers have the potential to play a critical role in the design of the smart grid. Our background in large-scale systems design, data-driven modeling and analysis, and our capacity to design systems that span multiple time-scales of control are precisely the skills needed to design the smart grid. This tutorial aims at exposing computer networking researchers and professionals to the challenges and opportunities raised by the Smart Grid.
</p>



<h2 class="hcls">Instructors</h2>

<p>
Profs Keshav and Rosenberg are both experts in computer networking and both are Professors and Canada Research Chairs at the University of Waterloo. Keshav is the author of two graduate textbooks on computer networking and Editor of ACM SIGCOMM Computer Communication Review. He has been awarded Best Paper prizes at both ACM SIGCOMM and ACM MOBICOMM and has co-founded three startup companies. Rosenberg is an IEEE Fellow and is on the Scientific Advisory Board of France-Telecom.  She has authored over 150 papers on broadband and wireless networking and traffic engineering and has been granted eight US patents.
</p>

<p>
Keshav and Rosenberg co-founded the Information Systems and Science for Energy (ISS4E) laboratory at the University of Waterloo in February 2010. Funded by the Canadian Federal Government, Hydro One, IBM, and Microsoft Research, this laboratory has a large team of graduate students and postdocs working on the intersection of the Internet and energy systems. Topics addressed at the laboratory include Smart Grid Architecture, Demand Management, Smart Homes, Applications, Electrical Vehicles, Storage, Distributed Generation, Pricing and Data Analytics.
</p>

<a class="button" data-role="button" href="mailto:sigcomm2012-gen-chairs@acm.org">Email the Organizers</a>

<?php
    include ("include/footer.php");
?>
