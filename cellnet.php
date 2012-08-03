<?php
        $page_title="Cellular Networks: Operations, Challenges, and Future Design (CellNet)";
        include("include/header.php");
?>

<h2 class="hcls">Cellular Networks: Operations, Challenges, and Future Design (CellNet)</h2>

<p>
Monday, August 13, 2012<br>
Helsinki, Finland<br>
Room: <b>Hall B</b>
</p>

<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("8:30-8:45", "Introductory Remarks", ""); ?>


		<?php tprog_add_session("8:45-10:30", "Cellular Network Design", "Li Erran Li (Bell Labs, Alcatel-Lucent)"); ?>

		<?php tprog_add_item("Wide-area Cellular Networks - Design Choices",
			"",
			"Zolt&aacute;n Tur&aacute;nyi (Ericsson Research)",
			"Tutorial");
		?>

		<?php tprog_add_item("Open Radio: Software Defined Wireless Networks",
			"",
			"Sachin Katti (Stanford University)",
			"Invited Talk");
		?>


		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("11:00-12:30", "Characterizing Cellular Networks", "Morley Mao (University of Michigan)"); ?>


		<?php tprog_add_item("Understanding Bufferbloat in Cellular Networks",
			"paper/cellnet/p1.pdf",
			"Haiqing Jiang (North Carolina State University), Zeyu Liu (North Carolina State University), Yaogong Wang (North Carolina State University), Kyunghan Lee (North Carolina State University), and Injong Rhee  (North Carolina State University)",
			"Paper");
		?>


		<?php tprog_add_item("Invited Paper: Characterizing Data Usage Patterns in Cellular Networks",
			"paper/cellnet/p7.pdf",
			"Yu Jin (AT&amp;T Research), Nick Duffield (AT&amp;T Research), Alexandre Gerber (AT&amp;T Research), Patrick Haffner (AT&amp;T Research), Wen-Ling Hsu (AT&amp;T Research), Guy Jacobson (AT&amp;T Research), Subhabrata Sen (AT&amp;T Research), Shobha Venkataraman (AT&amp;T Research), and Zhi-Li Zhang (University of Minnesota)",
			"Paper");
		?>

		<?php tprog_add_item("Invited Talk: Characterizing traffic dynamics in cellular data networks",
			"",
			"Jia Wang (AT&amp;T Research)",
			"Paper");
		?>

		<?php tprog_add_item("Understanding the Characteristics of Cellular Data Traffic",
			"paper/cellnet/p13.pdf",
			"Ying Zhang (Ericsson Research) and &Aring;ke Arvidsson (Ericsson Research)",
			"Paper");
		?>


		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>


		<?php tprog_add_session("14:00-15:30", "Leveraging WiFi", "Jia Wang (AT&amp;T Research)"); ?>

		<?php tprog_add_item("Making Use of All the Networks Around Us: A Case Study in Android",
			"paper/cellnet/p19.pdf",
			"Kok-Kiong Yap (Stanford University), Te-Yuan Huang (Stanford University), Masayoshi Kobayashi (NEC Corp.), Ioannis Yiakoumis (Stanford University), Nick McKeown (Stanford University), Sachin Katti (Stanford University), and Guru Parulkar (Stanford University)",
			"Paper");
		?>

		<?php tprog_add_item("Casting Doubts on the Viability of WiFi Offloading",
			"paper/cellnet/p25.pdf",
			"Shu Liu (University of Notre Dame) and Aaron D Striegel (University of Notre Dame)",
			"Paper");
		?>

		<?php tprog_add_item("Exploring Mobile/WiFi Handover with MultiPath TCP",
			"paper/cellnet/p31.pdf",
			"Christoph Paasch (Universit&eacute; Catholique de Louvain), Gregory Detal (Universit&eacute; Catholique de Louvain), Fabien Duchene (Universit&eacute; Catholique de Louvain), Costin Raiciu (University Politehnica of Bucharest), and Olivier Bonaventure (Universit&eacute; Catholique de Louvain)",
			"Paper");
		?>

		<?php tprog_add_item("Invited Paper: Policy-Based Network Management For Generalized Vehicle-To-Internet Connectivity",
			"paper/cellnet/p37.pdf",
			"Joshua Hare (University of Wisconsin), Lance Hartung (University of Wisconsin), and Suman Banerjee (University of Wisconsin)",
			"Paper");
		?>


		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("16:00-16:45", "Coverage and Location", "Suman Banerjee (University of Wisconsin)"); ?>

		<?php tprog_add_item("Improving Coverage Estimation for Cellular Networks with Spatial Bayesian Prediction based on Measurements",
			"paper/cellnet/p43.pdf",
			"Berna Sayrac (Orange Labs), Janne Riihij&auml;rvi (RWTH Aachen University), Petri M&auml;h&ouml;nen (RWTH Aachen University), Sana Ben Jemaa (Orange Labs), Eric Moulines (Ecole Nationale Sup&eacute;rieure des T&eacute;l&eacute;communications), S&eacute;bastien Grimoud (France Telecom R&amp;D)",
			"Paper");
		?>

		<?php tprog_add_item("Invited Talk: When Assistance Becomes Dependence: An Analysis of AGPS performance",
			"",
			"Konstantina Papagiannaki (T&eacute;l&eacute;fonica Research)",
			"Paper");
		?>


		<?php tprog_add_session("16:45-17:45", "Panel: Cellular Networks: Challenges and Future Design", ""); ?>

	</ul>


<h2 class="hcls">Introduction</h2>

<p>
With the popularity of smart phones and tablets, we are living in an
increasingly mobile world. Third-party mobile applications such as
Apple Siri, iCloud, and Yelp are rapidly growing everyday and greatly
enrich our lives. The eco-system for mobile applications is vibrant
and conducive to open innovation. Even one of the most popular mobile
OS -- Android operation system is open source. This allows many phone
and tablet vendors to innovate on the hardware and
firmware. Underpinning this mobile world, it is the cellular
networks. Unfortunately, the cellular networks present a rather
disheartening picture. They are closed, mostly proprietary, and
constructed using closed monolithic equipments. The innovation is
limited to a very small number of equipment vendors, not open to the
general research community. As a result, cellular networks are prone
to outages, dropped calls, performance problems, and hard to
manage. The closed nature of cellular networks threatens to derail the
mobile revolution or limit its true potential.</p>

<p>
Research innovation in mobile cellular networks is hampered by the
fact that most academic researchers have no access to cellular radios,
source codes of cellular network equipments, cellular network
management tools, and realistic network traces at scale. As a result,
most wireless research is conducted using WiFi. We believe this
situation much change. To effect change, this workshop brings network
operators, and academic researchers together to address the
problems. First, we would like academic researchers to understand
operational aspects of cellular network. Second, we would like
researchers from academia and industry to jointly identify the
challenges, and propose future designs so that cellular networks can
evolve to meet the growing challenges of a mobile world.
</p>

<p>
We encourage submission of both position papers
and work-in-progress papers on previously unpublished work on cellular networks.
</p>

<!--<p> <a href="" rel="external">PDF version</a> <a href="" rel="external">Text version</a> </p>-->

<h2 class="hcls">Topics</h2>

<p>We solicit submissions on topics including, but not limited to, the following:</p>

<ul>
<li>Operation aspects:</li>
<ul>
   <li>Radio resource allocation and usage profiling</li>
   <li>Cellular network architecture characterization</li>
   <li>Understanding and modeling cellular data traffic</li>
   <li>Cellular network security</li>
</ul>

<li>Challenges facing today's cellular networks:</li>
<ul>
   <li>Cellular network management</li>
   <li>Mobility</li>
   <li>Energy efficiency</li>
   <li>Spectrum shortage</li>
</ul>

<li>Future cellular network design:</li>
<ul>
   <li>Architectures</li>
   <li>Protocols</li>
   <li>Algorithms</li>
   <li>Security and privacy</li>
</ul>
</ul>


<h2 class="hcls">Submission Instructions</h2>

<p>Each submission must be a single PDF file no longer than six (6)
pages in length (in two-column, 10-point format) including references,
following the <a
href="http://conferences.sigcomm.org/sigcomm/2011/sig-alternate-10pt.cls"
rel="external"> LaTeX style file</a>.  Papers should be submitted via
the <a href="http://edas.info/newPaper.php?c=12099"> submission
site</a>.  Papers must include the author name and affiliation for
single-blind peer reviewing by the program committee.  Authors of
accepted papers are expected to present their papers at the
workshop. Submissions must be original work not under review at any
other workshop, conference, or journal.<p>

<a href="mailto:cellnet2012-chairs@umich.edu" data-role="button" class="button">Email the Organizers</a>

<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
	<?php add_dateitem("Paper Registration", "<span class='linethrough'>March 23, 2012, 11:59 PM GMT</span>"); ?>
	<?php add_dateitem("Submissions Due", "<span class='linethrough'> March 30, 2012; extension: <em>April 11, 2012, 23:59 GMT</em></span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "<span class='linethrough'>May 11, 2012</span>"); ?>
	<?php add_dateitem("Camera-Ready", "June 1, 2012"); ?>
	<?php add_dateitem("Workshop Date", "August 13, 2012"); ?>
</ul>


<h2 class="hcls">Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Program Committee Co-Chairs</li>
	<?php
		add_listitem("Li Erran Li", "Bell Labs", "http://www.bell-labs.com/user/erranlli/");
		add_listitem("Z. Morley Mao", "Univ of Michigan", "http://web.eecs.umich.edu/~zmao/");
	?>

	<li data-role="list-divider">Program Committee Members</li>
	<?php
		add_listitem("Suman Banerjee", "Wisconsin", "");
		add_listitem("Andrew Campbell", "Dartmouth College", "");
		add_listitem("Xu Simon Chen", "AT&amp;T Research", "");
		add_listitem("Zihui Ge", "AT&amp;T Research", "");
		add_listitem("Marco Gruteser", "Winlab/Rutgers University", "");
		add_listitem("Edward Knightly", "Rice", "");
		add_listitem("Ulas Kozat", "Docomo", "");
		add_listitem("Haiyun Luo", "China Mobile Research, USA", "");
		add_listitem("Kobus Van Der Merwe", "AT&amp;T Research", "");
		add_listitem("Ram Ramjee", "Microsoft Research", "");
		add_listitem("Jennifer Rexford", "Princeton", "");
		add_listitem("Cedric Westphal", "Huawei", "");
		add_listitem("Hui Zang", "Sprint Labs", "");
		add_listitem("Yongguang Zhang", "Microsoft Research", "");
	?>

</ul>


<?php
    include ("include/footer.php");
?>
