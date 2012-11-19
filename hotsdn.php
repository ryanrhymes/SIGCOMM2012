<?php
        $page_title="Hot Topics in Software Defined Networking (HotSDN)";
        include("include/header.php");
?>

<h2 class="hcls">Hot Topics in Software Defined Networking (HotSDN)</h2>

<p>
Monday, August 13, 2012<br>
Helsinki, Finland<br>
Room: <b>Hall A</b>
</p>
<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>
<a href="http://www.meetecho.com/sigcomm2012" data-role="button" class="button">Live Stream</a>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("8:45-9:00", "Introductory Remarks", ""); ?>

		<?php tprog_add_session("9:00-10:30", "Session 1: Controller and Switch Design", ""); ?>

		<?php
			tprog_add_item("Logically Centralized? State Distribution Tradeoffs in Software Defined Networks",
			"paper/hotsdn/p1.pdf",
			"Dan Levin (TU Berlin / Telekom Innovation Laboratories), Andreas Wundsam (ICSI / UC Berkeley), Brandon Heller and Nikhil Handigol (Stanford University), and Anja Feldmann (TU Berlin / Telekom Innovation Laboratories)",
			"Paper",
			"slides/sdn/session1/01-Dan_Levin.pd",
			"video/HotSDN-I-01-LogicallyCentralized.mp4");
		?>

		<?php
			tprog_add_item("The Controller Placement Problem",
			"paper/hotsdn/p7.pdf",
			"Brandon Heller (Stanford University), Rob Sherwood (Big Switch Networks), and Nick McKeown (Stanford University)",
			"Paper",
			"slides/sdn/session1/02-Heller_CPP_HotSDN.pdf",
			"video/HotSDN-I-02-TheControllerPlacementProblem.mp4");
		?>

		<?php
			tprog_add_item("Revisiting Routing Control Platforms with the Eyes and Muscles of Software- Defined Networking",
			"paper/hotsdn/p13.pdf",
			"Christian Esteve Rothenberg, Marcelo Ribeiro Nascimento, and Marcos Rogerio Salvador (CPqD - R&amp;D Center for Telecommunications), Carlos N. A. Correa and Sidney C. de Lucena (Federal University of the Rio de Janeiro State (UniRio)), and Robert Raszuk (NTT MCL)",
			"Paper",
			"slides/sdn/session1/03-hotsdn12-routeflow-120812-final.pdf",
			"video/HotSDN-I-03-RevisitingRoutingControlPlatforms.mp4");
		?>

		<?php
			tprog_add_item("Kandoo: A Framework for Efficient and Scalable Offloading of Control Application",
			"paper/hotsdn/p19.pdf",
			"Soheil Hassas Yeganeh and Yashar Ganjali (University of Toronto)",
			"Paper",
			"slides/sdn/session1/04-Kandoo.pdf",
			"video/HotSDN-I-04-KANDOO.mp4");
		?>

		<?php
			tprog_add_item("Hey, You Darned Counters! Get Off my ASIC!",
			"paper/hotsdn/p25.pdf",
			"Jeffrey C. Mogul (HP Labs) and Paul Congdon (HP Labs/UC Davis)",
			"Paper",
			"slides/sdn/session1/05-MogulCountersHotSDN2012.pdf",
			"video/HotSDN-I-05-HeyYouDarnedCounters.mp4");
		?>

		<?php
			tprog_add_item("Using CPU as a Traffic Co-processing Unit in Commodity Switches",
			"paper/hotsdn/p31.pdf",
			"Guohan Lu (Microsoft Research Asia), Rui Miao (Tsinghua University), and Yongqiang Xiong and Chuanxiong Guo (Microsoft Research Asia)",
			"Paper",
			"slides/sdn/session1/06-tpu-hotsdn12.pdf",
			"video/HotSDN-I-06-CPUasTrafficCoProcessingUnit.mp4");
		?>
		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>

		<?php tprog_add_session("11:00-12:30", "Session 2: Programming and Debugging", ""); ?>

		<?php
			tprog_add_item("Hierarchical Policies for Software Defined Networks",
			"paper/hotsdn/p37.pdf",
			"Andrew D. Ferguson, Arjun Guha, Chen Liang, Rodrigo Fonseca, and Shriram Krishnamurthi (Brown University)",
			"Paper",
			"slides/sdn/session2/01-HotSDN 2012 presentation.pdf",
			"video/HotSDN-II-01-HierarchicalPoliciesForSoftwareDefinedNetworks.mp4");
		?>

		<?php
			tprog_add_item("Procera: A Language for High-Level Reactive Network Control",
			"paper/hotsdn/p43.pdf",
			"Andreas Voellmy (Yale University) and Hyojoon Kim (Georgia Tech) and Nick Feamster (University of Maryland)",
			"Paper",
			"slides/sdn/session2/02-talk.pdf",
			"video/HotSDN-II-02-Procera.mp4");
		?>

		<?php
			tprog_add_item("VeriFlow: Verifying Network-Wide Invariants in Real Time",
			"paper/hotsdn/p49.pdf",
			"Ahmed Khurshid, Wenxuan Zhou, Matthew Caesar, and P. Brighten Godfrey (University of Illinois at Urbana-Champaign)",
			"Paper",
			"slides/sdn/session2/03-Veriflow.pdf",
			"video/HotSDN-II-03-VeriFlow.mp4");
		?>

		<?php
			tprog_add_item("Where is the debugger for my Software-Defined Network?<br/> <span style='color:red;font-style:italic;'>Winner of the \"Best Student Presentation\" award</span>",
			"paper/hotsdn/p55.pdf",
			"Nikhil Handigol, Brandon Heller, Vimalkumar Jeyakumar, David Mazi&#232;res, and Nick McKeown (Stanford University)",
			"Paper",
			"slides/sdn/session2/04-new-NDB-HotSDN2012.pdf",
			"video/HotSDN-II-04-WhereIsTheDebuggerForMySoftwareDefinedNetwork.mp4");
		?>

		<?php
			tprog_add_item("A Safe, Efficient Update Protocol for OpenFlow Networks",
			"paper/hotsdn/p61.pdf",
			"Rick McGeer (HP Labs)",
			"Paper",
			"slides/sdn/session2/05-HotSDN.pdf",
			"video/HotSDN-II-05-AnOpenFlowSafeUpdateProtocol.mp4");
		?>

		<?php
			tprog_add_item("Walk the Line: Consistent Network Updates with Bandwidth Guarantees",
			"paper/hotsdn/p67.pdf",
			"Soudeh Ghorbani and Matthew Caesar (UIUC)",
			"Paper",
			"slides/sdn/session2/06-Walk_the_line.pdf",
			"video/HotSDN-II-06-WalkTheLine.mp4");
		?>

		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-15:30", "Session 3: Support for Network Services", ""); ?>

		<?php
			tprog_add_item("Outsourcing Network Functionality",
			"paper/hotsdn/p73.pdf",
			"Glen Gibb, Hongyi Zeng, and Nick McKeown (Stanford University)",
			"Paper",
			"slides/sdn/session3/01-HotSDN2012OutsourcingNetwork FunctionalityiPad.pdf",
			"video/HotSDN-III-01-OutsourcingNetworkFunctionality.mp4");
		?>

		<?php
			tprog_add_item("Splendid Isolation: A Slice Abstraction for Software-Defined Networks",
			"paper/hotsdn/p79.pdf",
			"Stephen Gutz and Alec Story (Cornell), Cole Schlesinger (Princeton), and Nate Foster (Cornell)",
			"Paper",
			"slides/sdn/session3/02-Splendid_Isolation.pdf",
			"video/HotSDN-III-02-SplendidIsolation.mp4");
		?>

		<?php
			tprog_add_item("Fabric: A Retrospective on Evolving SDN",
			"paper/hotsdn/p85.pdf",
			"Martin Casado and Teemu Koponen (Nicira), Scott Shenker (ICSI &amp; UCB), and Amin Tootoonchian (University of Toronto &amp; ICSI)",
			"Paper",
			"slides/sdn/session3/03-hotsdn-koponen.pdf",
			"");
		?>

		<?php
			tprog_add_item("A Management Method of IP Multicast in Overlay Networks using OpenFlow",
			"paper/hotsdn/p91.pdf",
			"Yukihiro Nakagawa, Kazuki Hyoudou, and Takeshi Shimizu (Fujitsu Laboratories Ltd.)",
			"Paper",
			"slides/sdn/session3/04-hot07-nakagawa-slides.pdf",
			"video/HotSDN-III-04-AManagementMethodOfIPMulticastInOverlayNetworksUsingOpenFlow.mp4");
		?>

		<?php
			tprog_add_item("Dynamic Graph Query Primitives for SDN-based Cloud Network Management",
			"paper/hotsdn/p97.pdf",
			"Ramya Raghavendra, Jorge Lobo, and Kang-won Lee (IBM Research)",
			"Paper",
			"slides/sdn/session3/05-Raghavendra_hotsdn12.pdf",
			"video/HotSDN-III-05-DynamicGraphQueryPrimitives.mp4");
		?>

		<?php
			tprog_add_item("Programming Your Network at Run-time for Big Data Applications",
			"paper/hotsdn/p103.pdf",
			"Guohui Wang (IBM T.J. Watson Research Center), T. S. Eugene Ng (Rice University), and Anees Shaikh (IBM T.J. Watson Research Center)",
			"Paper",
			"slides/sdn/session3/06-hotsdn-talk-v3.pdf",
			"video/HotSDN-III-06-ProgrammingYourNetworkAtRunTime.mp4");
		?>

		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>

		<?php tprog_add_session("16:00-17:00", "Session 4: Wireless and Security", ""); ?>

		<?php
			tprog_add_item("OpenRadio: A Programmable Wireless Dataplane",
			"paper/hotsdn/p109.pdf",
			"Manu Bansal, Jeffrey Mehlman, Sachin Katti, and Philip Levis (Stanford University)",
			"Paper",
			"slides/sdn/session4/01-openradio-hotsdn12-talk.pdf",
			"video/HotSDN-IV-01-OpenRadio.mp4");
		?>

		<?php
			tprog_add_item("Towards Programmable Enterprise WLANs With Odin",
			"paper/hotsdn/p115.pdf",
			"Lalith Suresh (Instituto Superior Tecnico), Julius Schulz-Zander, Ruben Merz, and Anja Feldmann (Telekom Innovation Laboratories/TU Berlin), and Teresa Vazao (INESC-ID/Instituto Superior Tecnico)",
			"Paper",
			"slides/sdn/session4/02-Towards-programmable-enterprise-wlans.pdf",
			"video/HotSDN-IV-02-TowardsProgrammableEnterpriseWLANswithOdin.mp4");
		?>

		<?php
			tprog_add_item("A Security Enforcement Kernel for OpenFlow Networks",
			"paper/hotsdn/p121.pdf",
			"Phillip Porras (SRI International), Seungwon Shin (Texas A&amp;M University), Vinod Yegneswaran, Martin Fong, and Mabry Tyson (SRI International), and Guofei Gu (Texas A&amp;M University)",
			"Paper",
			"slides/sdn/session4/03-FortNoX-HotSDN.pdf",
			"video/HotSDN-IV-03-ASecurityEnforcementKernelForOpenFlowNetworks.mp4");
		?>

		<?php
			tprog_add_item("OpenFlow Random Host Mutation: Transparent Moving Target Defense using Software Defined Networking",
			"paper/hotsdn/p127.pdf",
			"Jafar Haadi Jafarian, Ehab Al-Shaer, and Qi Duan (UNC Charlotte)",
			"Paper",
			"slides/sdn/session4/04-HotSDN-SIGCOMM-1-bak.pdf",
			"video/HotSDN-IV-04-OpenFlowRandomHostMutation.mp4");
		?>


		<?php tprog_add_session("17:00-18:00","Panel", ""); ?>

</ul>


<h2 class="hcls">Introduction</h2>

<p>
Software Defined Networking (SDN) refactors the relationship between network
devices and the software that controls them. Open interfaces to network
switches enable more flexible and predictable network control, and they make it
easier to extend network function. During the past few years, several router
vendors have introduced software development kits for programming their network
devices, and several commercial switches now support the emerging OpenFlow
standard. Researchers have proposed new applications that can run on top of a
software defined network, including dynamic access control, server load
balancing, energy-efficient networking, and seamless client mobility and
virtual-machine migration.  Many research and industry groups worldwide are
pursuing different aspects of software defined networking, and experimental and
production deployments exist.</p>

<p>
Still, many important research challenges remain: how to design switches and
APIs that offer greater flexibility without compromising performance; how to
design a software platform for the control and management of software defined
networks; how to design new applications that capitalize on the programmability
of the network; how to lower the barrier to creating, testing, and evaluating
new applications; how to transition an existing network to SDN, and how a
software defined network can interoperate with existing protocols and devices;
and many others.</p>

<p>
The goal of the workshop is to explore recent research and developments related
to SDN; to allow an exchange of ideas; to encourage broad interaction between
industry and academia; and to help build a wider community to explore and
realize the potential of SDN.
</p>

<p>
We encourage submission of both position papers
and work-in-progress papers on previously unpublished work on Software Defined
Networking.
</p>

<h2 class="hcls">Topics</h2>

<p>We solicit submissions on topics including, but not limited to, the
following:</p>

<ul>

  <li>Applications of SDN in home, wireless, cellular, enterprise, data-center,
   and backbone networks</li>

 <li>Application of SDN to network management, performance monitoring,
  security, etc.</li>

  <li> Virtual appliances (e.g., firewalls, intrusion detection systems, load
  balancers, etc.) on SDN</li>

  <li>Virtualization support in software-defined networks</li>

  <li> Switch designs for SDN</li>

  <li> Application Programming Interfaces for SDN</li>

  <li> Control and management software stack for SDN</li>

  <li> Programming languages, verification techniques, and tools for SDN</li>

  <li> Performance evaluation of SDN network elements and controllers</li>

  <li> Experiences deploying SDN technology and applications in operational networks</li>

  <li> Hybrid SDN approaches (integration with other control planes)</li>

  <li> Transitioning existing networks to SDN</li>

  <li> Placement and factoring of SDN control logic</li>
</ul>

<h2 class="hcls">Submission Instructions</h2>

<p>Each submission must be a single PDF file no longer than six (6) pages in length
(in two-column, 10-point format) including references, following the <a
 href="http://conferences.sigcomm.org/sigcomm/2011/sig-alternate-10pt.cls" rel="external">
LaTeX style file</a>.  Papers should be submitted via the
<a href="http://conferences.noise.gatech.edu/HotSDN2012/" >submission
site</a>.  Papers must include the author name and affiliation for single-blind
peer reviewing by the program committee.  Authors of accepted papers are
expected to present their papers at the workshop.<p>

<a href="mailto:hotsdn2012-chairs@lists.noise.gatech.edu" data-role="button" class="button">Email the Organizers</a>

<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
	<?php add_dateitem("Submissions Due", "<span class='linethrough'>April 6, 2012; extension: <em>April 10, 2012, 11:59 PM GMT</em></span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "<span class='linethrough'>May 25, 2012</span>"); ?>
	<?php add_dateitem("Camera-Ready", "June 15, 2012"); ?>
	<?php add_dateitem("Workshop Date", "August 13, 2012"); ?>
</ul>


<h2 class="hcls">Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Program Committee Co-Chairs</li>
	<?php
		add_listitem("Nick Feamster", "University of Maryland", "http://www.cc.gatech.edu/~feamster/");
		add_listitem("Jennifer Rexford", "Princeton", "http://www.cs.princeton.edu/~jrex/");
	?>

	<li data-role="list-divider">Program Committee Members</li>
	<?php
		add_listitem("Katerina Argyraki", "EPFL", "");
		add_listitem("Jun Bi", "Tsinghua University", "");
		add_listitem("Marco Canini", "EPFL", "");
		add_listitem("Martin Casado", "Nicira", "");
		add_listitem("Anja Feldmann", "T-Labs/TU Berlin", "");
		add_listitem("Nate Foster", "Cornell", "");
		add_listitem("Yashar Ganjali", "U. Toronto", "");
		add_listitem("Sachin Katti", "Stanford", "");
		add_listitem("Teemu Koponen", "Nicira", "");
		add_listitem("Jeff Mogul", "HP Labs", "");
		add_listitem("Richard Mortier", "University of Nottingham", "");
		add_listitem("Nick McKeown", "Stanford", "");
		add_listitem("Rob Sherwood", "BigSwitch", "");
		add_listitem("Amin Vahdat", "UCSD/Google", "");
		add_listitem("Andreas Voellmy", "Yale", "");
		add_listitem("Dave Ward", "Cisco", "");
	?>

	<li data-role="list-divider">Steering Committee</li>
	<?php
		add_listitem("Bruce Davie", "Nicira", "");
		add_listitem("Nick Feamster", "University of Maryland", "");
		add_listitem("Guru Parulkar", "Stanford", "");
		add_listitem("Jennifer Rexford", "Princeton", "");
	?>

</ul>

<?php
    include ("include/footer.php");
?>
