<?php
        $page_title="Conference Program";
        include("include/header.php");
?>


<h2 class="hcls">Conference Program</h2>


<div id="prog_ctrl" data-role="navbar">
	<ul>
		<li><a id="2" href="">Tuesday</a></li>
		<li><a id="3" href="">Wednesday</a></li>
		<li><a id="4" href="">Thursday</a></li>
		<li><a id="0" href="" class="ui-btn-active ui-state-persist">All</a></li>
	</ul>
</div><!-- /navbar -->


<div id="prog_tbl_2" class="prog_tbl">
	<h2 class="hcls">Tuesday, August 14, 2012</h2>
    <p>

	<ul data-role="listview" data-filter="true" data-inset="true" data-divider-theme="b">
		<?php tprog_add_session("8:30-10:30 WELCOME &amp; SIGCOMM AWARD KEYNOTE"); ?>
		
		<?php tprog_add_session("10:30-11:00 COFFEE BREAK"); ?>
		
		<?php tprog_add_session("11:00-12:30 SESSION 1: MIDDLEBOXES AND MIDDLEWARE"); ?>
		
		<?php
			tprog_add_item("Multi-Resource Fair Queueing for Packet Processing",
			"", 
			"Ali Ghodsi (UC Berkeley / KTH), Vyas Sekar (Intel Labs), Matei Zaharia (UC Berkeley), Ion Stoica (UC Berkeley)", 
			"");
		?>

		<?php
			tprog_add_item("Making Middleboxes Someone Else's Problem: Network Processing as a Cloud Service",
			"", 
			"Justine Sherry (UC Berkeley), Shaddi Hasan (UC Berkeley), Colin Scott (UC Berkeley), Arvind Krishnamurthy (University of Washington), Sylvia Ratnasamy (UC Berkeley), Vyas Sekar (Intel Labs)", 
			"");
		?>

		<?php
			tprog_add_item("HyperDex:  A Distributed, Searchable Key-Value Store",
			"", 
			"Robert Escriva (Cornell University), Bernard Wong (University of Waterloo), Emin G&uuml;n Sirer (Cornell University)",
			"");
		?>
		
		
		<?php tprog_add_session("12:30-14:00 LUNCH BREAK"); ?>

		<?php tprog_add_session("14:00-15:30 SESSION 2: WIRELESS COMMUNICATION"); ?>
		
		<?php
			tprog_add_item("Picasso: Flexible RF and Spectrum Slicing",
			"", 
			"Steven Hong (Stanford University), Jeff Mehlman (Stanford University), Sachin Katti (Stanford University)", 
			"");
		?>
		
		<?php
			tprog_add_item("Spinal Codes",
			"", 
			"Jonathan Perry (MIT), Peter A. Iannucci (MIT), Kermin Elliott Fleming (MIT), Hari Balakrishnan (MIT), Devavrat Shah (MIT)", 
			"");
		?>
		
		<?php
			tprog_add_item("Efficient and Reliable Low-Power Backscatter Networks",
			"", 
			"Jue Wang (MIT), Haitham Hassanieh (MIT), Dina Katabi (MIT), Piotr Indyk (MIT)", 
			"");
		?>
		
		
		<?php tprog_add_session("15:30-17:00 POSTER &amp; DEMO BREAK 1"); ?>

		<?php tprog_add_session("17:00-18:30 SESSION 3: DATA CENTERS: LATENCY"); ?>
		
		<?php
			tprog_add_item("Deadline-Aware Datacenter TCP (D<sup>2</sup>TCP)",
			"", 
			"Balajee Vamanan (Purdue University), Jahangir Hasan (Google Inc.), T. N. Vijaykumar (Purdue University)", 
			"");
		?>
		
		<?php
			tprog_add_item("Finishing Flows Quickly with Preemptive Scheduling",
			"", 
			"Chi-Yao Hong (University of Illinois at Urbana-Champaign), Matthew Caesar (University of Illinois at Urbana-Champaign), P. Brighten Godfrey (University of Illinois at Urbana-Champaign)", 
			"");
		?>
		
		<?php
			tprog_add_item("DeTail: Reducing the Flow Completion Time Tail in Datacenter Networks",
			"", 
			"David Zats (UC Berkeley), Tathagata Das (UC Berkeley), Prashanth Mohan (UC Berkeley), Dhruba Borthakur (Facebook), Randy Katz (UC Berkeley)", 
			"");
		?>
		
		<?php tprog_add_session("18:30-19:30 COMMUNITY FEEDBACK SESSION"); ?>

	</ul>
	</p>
</div>	


<div id="prog_tbl_3" class="prog_tbl">
	<h2 class="hcls">Wednesday, August 15, 2012</h2>
    <p>

	<ul data-role="listview" data-filter="true" data-inset="true">
		<?php tprog_add_session("9:00-10:30 SESSION 4: MEASURING NETWORKS"); ?>
		
		<?php
			tprog_add_item("Inferring Visibility: Who's (not) talking to whom?",
			"", 
			"Gonca Gursun (Boston University), Natali Ruchansky (Boston University), Evimaria Terzi (Boston University), Mark Crovella (Boston University", 
			"");
		?>
		
		<?php
			tprog_add_item("Anatomy of a Large European IXP",
			"", 
			"Bernhard Ager (ETH Zurich), Nikolaos Chatzis (TU Berlin / T-Labs), Anja Feldmann (TU Berlin / T-Labs), Nadi Sarrar (TU Berlin / T-Labs), Steve Uhlig (Queen Mary, University of London), Walter Willinger (AT&amp;T Labs-Research)", 
			"");
		?>
		
		<?php
			tprog_add_item("Measuring and Fingerprinting ClickSpam in Online Ad Networks",
			"", 
			"Vacha Dave (The University of Texas at Austin), Saikat Guha (Microsoft Research India), Yin Zhang (The University of Texas at Austin)", 
			"");
		?>
		
		<?php tprog_add_session("10:30-11:00 COFFEE BREAK"); ?>
		
		<?php tprog_add_session("11:00-12:30 SESSION 5: DATA CENTERS: RESOURCE MANAGEMENT"); ?>
		
		<?php
			tprog_add_item("FairCloud: Sharing The Network In Cloud Computing",
			"", 
			"Lucian Popa (HP Labs), Gautam Kumar (UC Berkeley), Mosharaf Chowdhury (UC Berkeley), Arvind Krishnamurthy (Univ. of Washington), Sylvia Ratnasamy (UC Berkeley), Ion Stoica (UC Berkeley)", 
			"");
		?>
		
		<?php
			tprog_add_item("The Only Constant is Change: Incorporating Time-Varying Network
Reservations in Data Centers",
			"", 
			"Di Xie (Purdue University), Ning Ding (Purdue University), Y. Charlie Hu (Purdue University), Ramana Kompella (Purdue University)", 
			"");
		?>
		
		<?php
			tprog_add_item("It's Not Easy Being Green",
			"", 
			"Peter Xiang Gao (University of Waterloo), Andrew R Curtis (University of Waterloo), Bernard Wong (University of Waterloo), S. Keshav (University of Waterloo)", 
			"");
		?>
		
		<?php tprog_add_session("12:30-14:00 LUNCH BREAK"); ?>

		<?php tprog_add_session("14:00-16:00 SESSION 6: WIRELESS AND MOBILE NETWORKING"); ?>
		
		<?php
			tprog_add_item("Flashback: Decoupled Lightweight Wireless Control",
			"", 
			"Asaf Cidon (Stanford University), Kanthi Nagaraj (Stanford University), Sachin Katti (Stanford University), Pramod Viswanath (UIUC)", 
			"");
		?>
		
		<?php
			tprog_add_item("JMB: Scaling Wireless Capacity with User Demand",
			"", 
			"Hariharan Rahul (MIT CSAIL), Swarun Suresh Kumar (MIT CSAIL), Dina Katabi (MIT CSAIL)", 
			"");
		?>
		
		<?php
			tprog_add_item("TUBE: Time Dependent Pricing for Mobile Data",
			"", 
			"Sangtae Ha (Princeton University), Soumya Sen (Princeton University), Carlee Joe-Wong (Princeton University), Youngbin Im (Princeton University), Mung Chiang (Princeton University)", 
			"");
		?>
		
		<?php
			tprog_add_item("CarSpeak: A Content-Centric Network for Autonomous Driving",
			"", 
			"Swarun Kumar (Massachusetts Institute of Technology), Lixin Shi (Massachusetts Institute of Technology), Stephanie Gil (Massachusetts Institute of Technology), Nabeel Ahmed (Massachusetts Institute of Technology), Dina Katabi (Massachusetts Institute of Technology), Daniela Rus (Massachusetts Institute of Technology)", 
			"");
		?>
		
		<?php tprog_add_session("16:00-17:30 POSTER &amp; DEMO BREAK 2"); ?>
		
		<?php tprog_add_session("17:30-18:30 \"BEST OF CCR\" SESSION"); ?>
		
		<?php
			tprog_add_item("Forty Data Communications Research Questions",
			"", 
			"Craig Partridge (Raytheon BBN Technologies)", 
			"");
		?>
		
		<?php
			tprog_add_item("Extracting Benefit from Harm: Using Malware Pollution to Analyze the Impact of Political and Geophysical Events on the Internet",
			"", 
			"Alberto Dainotti (University of Napoli Federico II), Roman Ammann (Auckland University of Technology), Emile Aben (RIPE NCC), Kimberly C. Claffy (CAIDA/UCSD)", 
			"");
		?>
		
		<?php
			tprog_add_item("The Collateral Damage of Internet Censorship by DNS Injection",
			"", 
			"Sparks (Hovership Nebuchadnezzar Zion Virtual Labs), Neo (Hovership Nebuchadnezzar Zion Virtual Labs), Tank (Hovership Nebuchadnezzar Zion Virtual Labs), Smith (Hovership Nebuchadnezzar Zion Virtual Labs), Dozer (Hovership Nebuchadnezzar Zion Virtual Labs)", 
			"");
		?>
		
	</ul>
	</p>

</div>


<div id="prog_tbl_4" class="prog_tbl">
	<h2 class="hcls">Thursday, August 16, 2012</h2>
    <p>

	<ul data-role="listview" data-filter="true" data-inset="true">
		<?php tprog_add_session("9:00-10:30 SESSION 7: NETWORK FORMALISM AND ALGORITHMICS"); ?>
		
		<?php
			tprog_add_item("Perspectives on Network Calculus - No Free Lunch, But Still Good Value",
			"", 
			"Florin Ciucu (Telekom Innovation Laboratories / TU Berlin), Jens Schmitt (University of Kaiserslautern)", 
			"");
		?>
		
		<?php
			tprog_add_item("Abstractions for Network Update",
			"", 
			"Mark Reitblatt (Cornell University), Nate Foster (Cornell University), Jennifer Rexford (Princeton University), Cole Schlesinger (Princeton University), David Walker (Princeton University)", 
			"");
		?>
		
		<?php
			tprog_add_item("A Smart Pre-Classifier to Reduce Power Consumption of TCAMs for
Multi-dimensional Packet Classification",
			"", 
			"Yadi Ma (University of Wisconsin-Madison), Suman Banerjee (University of Wisconsin-Madison)", 
			"");
		?>
		
		<?php tprog_add_session("10:30-11:00 COFFEE BREAK"); ?>

		
		<?php tprog_add_session("11:00-12:30 SESSION 8: STREAMING AND CONTENT NETWORKING"); ?>
		
		<?php
			tprog_add_item("ShadowStream: Performance Evaluation as a Capability in Production Internet Live Streaming Networks",
			"", 
			"Chen Tian (Yale University), Richard Alimi (Google), Y. R. Yang (Yale University), David Zhang (PPLive)", 
			"");
		?>
		
		<?php
			tprog_add_item("A Case for a Coordinated Internet-Scale Video Control Plane",
			"", 
			"Xi Liu (Conviva), Florin Dobrian (Conviva), Henry Milner (Conviva), Junchen Jiang (CMU), Vyas Sekar (Intel Labs), Ion Stoica (Conviva/UC Berkeley), Hui Zhang (Conviva/CMU)
", 
			"");
		?>
		
		<?php
			tprog_add_item("Optimizing Cost and Performance for Content Multihoming",
			"", 
			"Hongqiang Harry Liu (Yale University), Ye Wang (Yale University), Yang Richard Yang (Yale University), Hao Wang (Google), Chen Tian (Yale University)", 
			"");
		?>
		
		<?php tprog_add_session("12:30-14:00 LUNCH BREAK"); ?>

		<?php tprog_add_session("14:00-15:30 SESSION 9: ROUTING"); ?>
		
		<?php
			tprog_add_item("Private and verifiable interdomain routing decisions",
			"", 
			"Mingchen Zhao (University of Pennsylvania), Wenchao Zhou (University of Pennsylvania), Alexander J. T. Gurney (University of Pennsylvania), Andreas Haeberlen (University of Pennsylvania), Micah Sherr (Georgetown University), Boon Thau Loo (University of Pennsylvania)", 
			"");
		?>
		
		<?php
			tprog_add_item("LIFEGUARD: Practical Repair of Persistent Route Failures",
			"", 
			"Ethan Katz-Bassett (University of Washington / University of Southern California), Colin Scott (University of California, Berkeley), David R. Choffnes (University of Washington), &Iacute;talo Cunha (UFMG, Brazil), Vytautas Valancius (Georgia Tech), Nick Feamster (University of Maryland), Harsha V. Madhyastha (University of California, Riverside), Tom Anderson (University of Washington), Arvind Krishnamurthy (University of Washington)", 
			"");
		?>
		
		<?php
			tprog_add_item("On-Chip Networks from a Networking Perspective: Congestion and Scalability in Many-Core Interconnects",
			"", 
			"George Nychis (Carnegie Mellon University), Chris Fallin (Carnegie Mellon University), Thomas Moscibroda (Microsoft Research Asia), Onur Mutlu (Carnegie Mellon University), Srinivasan Seshan (Carnegie Mellon University)", 
			"");
		?>

		<?php tprog_add_session("15:30-16:00 COFFEE BREAK"); ?>
		
		<?php tprog_add_session("16:00-17:30 SESSION 10: DATA CENTERS: NETWORK RESILIENCE"); ?>
		
		<?php
			tprog_add_item("NetPilot: Automating Datacenter Network Failure Mitigation",
			"", 
			"Xin Wu (Duke University), Daniel Turner (University of California, San Diego), Chao-Chih Chen (University of California, Davis), David A. Maltz (Microsoft), Xiaowei Yang (Duke University), Lihua Yuan (Microsoft), Ming Zhang (Microsoft)", 
			"");
		?>
		
		<?php
			tprog_add_item("Surviving Failures in Bandwidth-Constrained Datacenters",
			"", 
			"Peter Bodik (Microsoft Research), Ishai Menache (Microsoft Research), Mosharaf Chowdhury (UC Berkeley), Pradeepkumar Mani (Microsoft), David A. Maltz (Microsoft), Ion Stoica (UC Berkeley)", 
			"");
		?>
		
		<?php
			tprog_add_item("Mirror Mirror on the Ceiling: Flexible Wireless Links for Data Centers",
			"", 
			"Xia Zhou (UC Santa Barbara), Zengbin Zhang (UC Santa Barbara), Yibo Zhu (UC Santa Barbara), Yubo Li (Xi'an Jiaotong University, China), Saipriya Kumar (UC Santa Barbara), Amin Vahdat (Google/UC San Diego), Ben Y. Zhao (UC Santa Barbara), Haitao Zheng (UC Santa Barbara)", 
			"");
		?>
		<?php tprog_add_session("17:30-18:00 CLOSING"); ?>
		
	</ul>
	</p>

</div>


<p>
Please email the <a class="lnkcls" href="mailto:sigcomm2012-gen-chairs@acm.org">general chairs</a> with any questions you may have.
</p>



<?php
    include ("include/footer.php");
?>