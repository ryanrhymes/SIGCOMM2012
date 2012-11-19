<?php
        $page_title="Conference Program";
        include("include/header.php");
?>


<h2 class="hcls">Conference Program</h2>
<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>
<a href="http://www.meetecho.com/sigcomm2012" data-role="button" class="button">Live Stream</a>

<div id="prog_ctrl" data-role="navbar">
	<ul>
		<li><a href="#">Tuesday</a></li>
		<li><a href="#">Wednesday</a></li>
		<li><a href="#">Thursday</a></li>
		<li><a href="#" class="ui-btn-active ui-state-persist">All</a></li>
	</ul>
</div>


	<ul id="proglist" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a">
		<li class="heading" data-role="list-divider" style="display:block"><h3>Monday, August 13, 2012</h3></li>
		<?php
		    tprog_add_session("7:30-17:30", "Conference Registration", "", "a");
		    tprog_add_item("Conference Registration", "", 'Pick up your registration package at the Finlandia Hall congress wing (M1 entrance).', "");
		?>
		<?php
		    tprog_add_session("18:30-20:00", "Welcome Reception", "", "a");
		    tprog_add_item("Welcome Reception", "http://www.virka.fi/en/gallery/city-hall", 'Drinks and hors d\'oeuvre; hosted by the City of Helsinki at Helsinki City Hall.<br><b>Because of security restrictions, you MUST bring your invitation card in order to be allowed into City Hall.</b> The invitation card is part of your registration package, to be picked up at Finlandia Hall.', "");
		?>

		<li class="heading" data-role="list-divider" style="display:block"><h3>Tuesday, August 14, 2012</h3></li>
		<?php
		    tprog_add_session("7:30-17:30", "Conference Registration", "", "a");
		    tprog_add_item("Conference Registration", "", 'Pick up your registration package at the Finlandia Hall congress wing (M1 entrance).', "");
		?>

		<?php tprog_add_session("8:30-10:30", "Welcome &amp; SIGCOMM Award Keynote", ""); ?>
		<?php
			tprog_add_item("General Chairs' Welcome",
			"paper/sigcomm/welcome1.pdf",
			"Lars Eggert (NetApp) &amp; J&ouml;rg Ott (Aalto University)",
			"");
		?>
		<?php
			tprog_add_item("Hosts' Welcome Address",
			"",
			"Hannu Kauppinen (Head of Nokia Research Center)<br>Tuija Pulkkinen (Dean, School of Electrical Engineering, Aalto University)",
			"");
		?>
		<?php
			tprog_add_item("SIGCOMM Award Keynote",
			"slides/opening/01-keynote-McKeownSigcomm2012.pdf",
			"Nick McKeown",
			"Keynote");
		?>

		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>

		<?php tprog_add_session("11:00-12:30", "Session 1: Middlebox and Middleware", "Ramana Kompella"); ?>

		<?php
			tprog_add_item("Multi-Resource Fair Queueing for Packet Processing",
			"paper/sigcomm/p1.pdf",
			"Ali Ghodsi (UC Berkeley / KTH), Vyas Sekar (Intel Labs), Matei Zaharia (UC Berkeley), Ion Stoica (UC Berkeley)",
			"Paper",
			"slides/session1/01-sigcomm.pdf",
			"video/SIGCOMM-I-01-MultiResourceFairQueueingForPacketProcessing.mp4");
		?>

		<?php
			tprog_add_item("Making Middleboxes Someone Else's Problem: Network Processing as a Cloud Service",
			"paper/sigcomm/p13.pdf",
			"Justine Sherry (UC Berkeley), Shaddi Hasan (UC Berkeley), Colin Scott (UC Berkeley), Arvind Krishnamurthy (University of Washington), Sylvia Ratnasamy (UC Berkeley), Vyas Sekar (Intel Labs)",
			"Paper",
			"slides/session1/02-justine.pdf",
			"video/SIGCOMM-I-02-NetworkProcessingAsACloudService.mp4");
		?>

		<?php
			tprog_add_item("HyperDex:  A Distributed, Searchable Key-Value Store",
			"paper/sigcomm/p25.pdf",
			"Robert Escriva (Cornell University), Bernard Wong (University of Waterloo), Emin G&uuml;n Sirer (Cornell University)",
			"Paper",
			"slides/session1/03-hyperdex.pdf",
			"video/SIGCOMM-I-03-HyperDexADistributedSearchableKeyValueStore.mp4");
		?>


		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-15:30", "Session 2: Wireless Communication", "Jon Crowcroft"); ?>

		<?php
			tprog_add_item("Picasso: Flexible RF and Spectrum Slicing",
			"paper/sigcomm/p37.pdf",
			"Steven Hong (Stanford University), Jeff Mehlman (Stanford University), Sachin Katti (Stanford University)",
			"Paper",
			"slides/session2/01new-Picasso_v4_SIGCOMM.pdf",
			"video/SIGCOMM-II-01-PicassoFlexibleRFandSpectrumSlicing.mp4");
		?>

		<?php
			tprog_add_item("Spinal Codes",
			"paper/sigcomm/p49.pdf",
			"Jonathan Perry (MIT), Peter A. Iannucci (MIT), Kermin Elliott Fleming (MIT), Hari Balakrishnan (MIT), Devavrat Shah (MIT)",
			"Paper",
			"slides/session2/02new-Spinal_Sigcomm.pdf",
			"video/SIGCOMM-II-02-SpinalCodes.mp4");
		?>

		<?php
			tprog_add_item("Efficient and Reliable Low-Power Backscatter Networks",
			"paper/sigcomm/p61.pdf",
			"Jue Wang (MIT), Haitham Hassanieh (MIT), Dina Katabi (MIT), Piotr Indyk (MIT)",
			"Paper",
			"slides/session2/03new-RFID-SIGCOMM12-Aug14.pdf",
			"video/SIGCOMM-II-03-EfficientAndReliableLowPowerBackscatterNetworks.mp4");
		?>


		<?php tprog_add_session("15:30-17:00", "Poster &amp; Demo Break 1", ""); ?>

		<?php
			tprog_add_item("Network-Aware Service Placement in a Distributed Cloud Environment",
			"paper/sigcomm/p73.pdf",
			"Moritz Steiner (Bell Labs), Bob Gaglianello (Bell Labs), Vijay Gurbani (Bell Labs), Volker Hilt (Bell Labs), W. D. Roome (Bell Labs), Michael Scharf (Bell Labs), Thomas Voith (Bell Labs)",
			"Demo");
		?>

		<?php
			tprog_add_item("RaptorStream: Boosting Mobile Peer-to-Peer Streaming with Raptor Codes",
			"paper/sigcomm/p291.pdf",
			"Philipp M. Eittenberger (University of Bamberg)",
			"Poster");
		?>

		<?php
			tprog_add_item("SP4: Scalable Programmable Packet Processing Platform",
			"paper/sigcomm/p75.pdf",
			"Harjot Gill (University of Pennsylvania), Dong Lin (University of Pennsylvania), Lohit Sarna (University of Pennsylvania), Robert Mead (University of Pennsylvania), Kenton C.T. Lee (University of Pennsylvania), Boon Thau Loo (University of Pennsylvania)",
			"Demo");
		?>

		<?php
			tprog_add_item("Distributed Content Storage for Just-in-Time Streaming",
			"paper/sigcomm/p77.pdf",
			"Sourav Kumar Dandapat (Indian Institute of Technology Kharagpur), Sanyam Jain (Indian Institute of Technology Kharagpur), Romit Roy Choudhury (Duke University), Niloy Ganguly (Indian Institute of Technology Kharagpur",
			"Poster");
		?>

		<?php
			tprog_add_item("Blockmon: A High-Performance Composable Network Traffic Measurement System",
			"paper/sigcomm/p79.pdf",
			"Felipe Huici (NEC Europe Ltd.), Andrea di Pietro (CNIT), Brian Trammell (ETH Zurich), Jose Maria Gomez Hidalgo (OPTENET), Daniel Martinez Ruiz (OPTENET), Nico d'Heureuse (NEC Europe Ltd.)",
			"Demo");
		?>

		<?php
			tprog_add_item("PaDIS Emulator:An Emulator to Evaluate CDN-ISP Collaboration",
			"paper/sigcomm/p81.pdf",
			"Ingmar Poese (T-Labs/TU-Berlin), Benjamin Frank (T-Labs/TU-Berlin), Simon Knight (University of Adelaide), Niklas Semmler (T-Labs/TU-Berlin), Georgios Smaragdakis (T-Labs/TU-Berlin)",
			"Demo");
		?>

		<?php
			tprog_add_item("Signposts: End-to-End Networking in a World of Middleboxes",
			"paper/sigcomm/p83.pdf",
			"Amir Chaudhry (University of Cambridge), Anil Madhavapeddy (University of Cambridge), Charalampos Rotsos (University of Cambridge), Richard Mortier (University of Nottingham), Andrius Aucinas (University of Cambridge), Jon Crowcroft (University of Cambridge), Sebastian Probst Eide (University of Cambridge), Steven Hand (University of Cambridge), Andrew W Moore (University of Cambridge), Narseo Vallina-Rodriguez (University of Cambridge)",
			"Demo");
		?>

		<?php
			tprog_add_item("Towards SmartFlow: Case Studies on Enhanced Programmable Forwarding in OpenFlow Switches",
			"paper/sigcomm/p85.pdf",
			"Felici&aacute;n N&eacute;meth (Budapest University of Technology and Economics), &Aacute;d&aacute;m Stipkovits (Budapest University of Technology and Economics), Bal&aacute;zs Sonkoly (Budapest University of Technology and Economics), Andr&aacute;s Guly&aacute;s (Budapest University of Technology and Economics)",
			"Demo");
		?>

		<?php
			tprog_add_item("An OpenFlow-Based Energy-Efficient Data Center Approach",
			"paper/sigcomm/p87.pdf",
			"Michael Jarschel (University of W&uuml;rzburg), Rastin Pries (University of W&uuml;rzburg)",
			"Demo");
		?>

		<?php
			tprog_add_item("Reduction-based Analysis of BGP Systems with BGPVerif",
			"paper/sigcomm/p89.pdf",
			"Anduo Wang (University of Pennsylvania), Alexander J.T. Gurney (University of Pennsylvania), Xianglong Han (University of Pennsylvania), Jinyan Cao (University of Pennsylvania), Carolyn Talcot (SRI International), Boon Thau Loo (University of Pennsylvania), Andre Scedrov (University of Pennsylvania)",
			"Demo");
		?>

		<?php
			tprog_add_item("Route Shepherd: Stability Hints for the Control Plane",
			"paper/sigcomm/p91.pdf",
			"Alexander J. T. Gurney (University of Pennsylvania), Xianglong Han (University of Pennsylvania), Yang Li (University of Pennsylvania), Boon Thau Loo (University of Pennsylvania)",
			"Demo");
		?>

		<?php
			tprog_add_item("Efficiently Migrating Stateful Middleboxes",
			"paper/sigcomm/p93.pdf",
			"Vladimir Andrei Olteanu (University Politehnica of Bucharest), Costin Raiciu (University Politehnica of Bucharest)",
			"Demo");
		?>

		<?php
			tprog_add_item("A Demonstration of Ultra-Low-Latency Data Center Optical Circuit Switching",
			"paper/sigcomm/p95.pdf",
			"Nathan Farrington (UC San Diego), George Porter (UC San Diego), Pang-Chen Sun (UC San Diego), Alex Forencich (UC San Diego), Joseph Ford (UC San Diego), Yeshaiahu Fainman (UC San Diego), George Papen (UC San Diego), Amin Vahdat (UC San Diego)",
			"Demo");
		?>

		<?php
			tprog_add_item("Bulk of Interest: Performance Measurement of Content-Centric Routing",
			"paper/sigcomm/p99.pdf",
			"Matthias W&auml;hlisch (Freie Universit&auml;t Berlin), Thomas C. Schmidt (Hamburg University of Applied Sciences), Markus Vahlenkamp (Hamburg University of Applied Sciences)",
			"Poster");
		?>

		<?php
			tprog_add_item("User-level Data Center Tomography",
			"paper/sigcomm/p101.pdf",
			"Neil Alexander Twigg (University of Stirling), Marwan Fayed (University of Stirling), Colin Perkins (University of Glasgow), Dimitrios Pezaros (University of Glasgow), Posco Tso (University of Glasgow)",
			"Poster");
		?>

		<?php
			tprog_add_item("Towards Detecting BGP Route Hijacking using the RPKI",
			"paper/sigcomm/p103.pdf",
			"Matthias W&auml;hlisch (Freie Universit&auml;t Berlin), Olaf Maennel (Loughborough University), Thomas C. Schmidt (HAW Hamburg)",
			"Poster");
		?>

		<?php
			tprog_add_item("Choice as a Principle in Network Architecture",
			"paper/sigcomm/p105.pdf",
			"Tilman Wolf (University of Massachusetts), James Griffioen (University of Kentucky), Kenneth L Calvert (University of Kentucky), Rudra Dutta (North Carolina State University), George N Rouskas (North Carolina State University), Ilia Baldine (University of North Carolina), Anna Nagurney (University of Massachusetts)",
			"Poster");
		?>

		<?php
			tprog_add_item("A Frequency Adjustment Architecture for Energy Efficient Router",
			"paper/sigcomm/p107.pdf",
			"Wenliang Fu (Beijing Institute of Technology), Tian Song (Beijing Institute of Technology)",
			"Poster");
		?>

		<?php
			tprog_add_item("Detecting Third-party Addresses in Traceroute IP Paths",
			"paper/sigcomm/p109.pdf",
			"Pietro Marchetta (University of Napoli), Walter de Donato (University of Napoli), Antonio Pescap&eacute; (University of Napoli)",
			"Poster");
		?>

		<?php
			tprog_add_item("Reviving Delay-based TCP for Data Centers",
			"paper/sigcomm/p111.pdf",
			"Changhyun Lee (KAIST), Keon Jang (Microsoft Research), Sue Moon (KAIST)",
			"Poster");
		?>

		<?php
			tprog_add_item("FaaS: Filtering IP Spoofing Traffic as a Service",
			"paper/sigcomm/p113.pdf",
			"Bingyang Liu (Tsinghua University), Jun Bi (Tsinghua University), Xiaowei Yang (Duke University)",
			"Poster");
		?>


		<?php tprog_add_session("17:00-18:30", "Session 3: Data Centers: Latency", "Sachin Katti"); ?>

		<?php
			tprog_add_item("Deadline-Aware Datacenter TCP (D<sup>2</sup>TCP)",
			"paper/sigcomm/p115.pdf",
			"Balajee Vamanan (Purdue University), Jahangir Hasan (Google Inc.), T. N. Vijaykumar (Purdue University)",
			"Paper",
			"slides/session3/01-bvamanan-sigcomm12.pdf",
			"video/SIGCOMM-III-01-DeadlineAwareDatacenterTCP_D2TCP.mp4");
		?>

		<?php
			tprog_add_item("Finishing Flows Quickly with Preemptive Scheduling",
			"paper/sigcomm/p127.pdf",
			"Chi-Yao Hong (University of Illinois at Urbana-Champaign), Matthew Caesar (University of Illinois at Urbana-Champaign), P. Brighten Godfrey (University of Illinois at Urbana-Champaign)",
			"Paper",
			"slides/session3/02new-PDQ-Sigcomm.pdf",
			"video/SIGCOMM-III-02-FinishingFlowsQuicklyWithPreemptiveScheduling.mp4");
		?>

		<?php
			tprog_add_item("DeTail: Reducing the Flow Completion Time Tail in Datacenter Networks",
			"paper/sigcomm/p139.pdf",
			"David Zats (UC Berkeley), Tathagata Das (UC Berkeley), Prashanth Mohan (UC Berkeley), Dhruba Borthakur (Facebook), Randy Katz (UC Berkeley)",
			"Paper",
			"slides/session3/03-detail-sigcomm.pdf",
			"video/SIGCOMM-III-03-DeTail.mp4");
		?>

		<?php tprog_add_session("18:30-19:30", "Community Feedback Session", ""); ?>

		<?php
		    tprog_add_session("20:00-23:00", "Student Dinner", "", "a");
		    tprog_add_item("Student Dinner", "http://www.kaivohuone.fi/", 'Only for student attendees, PC + org committee members, SIG officers, and supporters; at restaurant Kaivohuone', "");
		?>

		<li class="heading" data-theme="a" data-role="list-divider" style="display:block"><h3>Wednesday, August 15, 2012</h3></li>

		<?php tprog_add_session("9:00-10:30", "Session 4: Measuring Networks", "Sergey Gorinsky"); ?>

		<?php
			tprog_add_item("Inferring Visibility: Who's (not) talking to whom?",
			"paper/sigcomm/p151.pdf",
			"Gonca Gursun (Boston University), Natali Ruchansky (Boston University), Evimaria Terzi (Boston University), Mark Crovella (Boston University",
			"Paper",
			"slides/session4/01new-sig12.pdf",
			"video/SIGCOMM-IV-01-InferringVisibility.mp4");
		?>

		<?php
			tprog_add_item("Anatomy of a Large European IXP",
			"paper/sigcomm/p163.pdf",
			"Bernhard Ager (ETH Zurich), Nikolaos Chatzis (TU Berlin / T-Labs), Anja Feldmann (TU Berlin / T-Labs), Nadi Sarrar (TU Berlin / T-Labs), Steve Uhlig (Queen Mary, University of London), Walter Willinger (AT&amp;T Labs-Research)",
			"Paper",
			"slides/session4/02new-sigcomm12_v11.pdf",
			"video/SIGCOMM-IV-02-AnatomyOfaLargeEuropeanIXP.mp4");
		?>

		<?php
			tprog_add_item("Measuring and Fingerprinting Click-Spam in Ad Networks",
			"paper/sigcomm/p175.pdf",
			"Vacha Dave (MSR India and UT Austin), Saikat Guha (Microsoft Research India), Yin Zhang (Univ. of Texas at Austin)",
			"Paper",
			"slides/session4/03new-Sigcomm-clickspam.pdf",
			"video/SIGCOMM-IV-03-MeasuringAndFingerprintingClickSpamInAdNetworks.mp4");
		?>

		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>

		<?php tprog_add_session("11:00-12:30", "Session 5: Data Centers: Resources Management", "Emin G&uuml;n Sirer"); ?>

		<?php
			tprog_add_item("FairCloud: Sharing The Network In Cloud Computing",
			"paper/sigcomm/p187.pdf",
			"Lucian Popa (HP Labs), Gautam Kumar (UC Berkeley), Mosharaf Chowdhury (UC Berkeley), Arvind Krishnamurthy (Univ. of Washington), Sylvia Ratnasamy (UC Berkeley), Ion Stoica (UC Berkeley)",
			"Paper",
			"slides/session5/01-faircloud_sigcomm.pdf",
			"video/SIGCOMM-V-01-FairCloudSharingtheNetworkInCloudComputing.mp4");
		?>

		<?php
			tprog_add_item("The Only Constant is Change: Incorporating Time-Varying Network
Reservations in Data Centers",
			"paper/sigcomm/p199.pdf",
			"Di Xie (Purdue University), Ning Ding (Purdue University), Y. Charlie Hu (Purdue University), Ramana Kompella (Purdue University)",
			"Paper",
			"slides/session5/02new-The-Only-Constant-is-Change.pdf",
			"video/SIGCOMM-V-02-TheOnlyConstantIsChange.mp4");
		?>

		<?php
			tprog_add_item("It's Not Easy Being Green",
			"paper/sigcomm/p211.pdf",
			"Peter Xiang Gao (University of Waterloo), Andrew R Curtis (University of Waterloo), Bernard Wong (University of Waterloo), S. Keshav (University of Waterloo)",
			"Paper",
			"slides/session5/03new-Peter-Xiang-Gao-It-is-not-easy-being-green.pdf",
			"video/SIGCOMM-V-03-ItSNotEasyBeingGreen.mp4");
		?>

		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-16:00", "Session 6: Wireless and Mobile Networking", "Srinivasan Seshan"); ?>

		<?php
			tprog_add_item("Flashback: Decoupled Lightweight Wireless Control",
			"paper/sigcomm/p223.pdf",
			"Asaf Cidon (Stanford University), Kanthi Nagaraj (Stanford University), Sachin Katti (Stanford University), Pramod Viswanath (UIUC)",
			"Paper",
			"slides/session6/01new-Sigcomm-final.pdf",
			"video/SIGCOMM-VI-01-FlashbackDecoupledLightweightWirelessControl.mp4");
		?>

		<?php
			tprog_add_item("MegaMIMO: Scaling Wireless Capacity with User Demand",
			"paper/sigcomm/p235.pdf",
			"Hariharan Rahul (MIT CSAIL), Swarun Suresh Kumar (MIT CSAIL), Dina Katabi (MIT CSAIL)",
			"Paper",
			"slides/session6/02new-megamimo-sigcomm2012-v2.pdf",
			"video/SIGCOMM-VI-02-JMBScalingWirelessCapacityWithUserDemands.mp4");
		?>

		<?php
			tprog_add_item("TUBE: Time Dependent Pricing for Mobile Data",
			"paper/sigcomm/p247.pdf",
			"Sangtae Ha (Princeton University), Soumya Sen (Princeton University), Carlee Joe-Wong (Princeton University), Youngbin Im (Seoul National University), Mung Chiang (Princeton University)",
			"Paper",
			"slides/session6/03new-TUBE_SIGCOMM_Meetecho.pdf",
			"video/SIGCOMM-VI-03-TUBETimeDependentPricingForMobileData.mp4");
		?>

		<?php
			tprog_add_item("CarSpeak: A Content-Centric Network for Autonomous Driving",
			"paper/sigcomm/p259.pdf",
			"Swarun Kumar (Massachusetts Institute of Technology), Lixin Shi (Massachusetts Institute of Technology), Stephanie Gil (Massachusetts Institute of Technology), Nabeel Ahmed (Massachusetts Institute of Technology), Dina Katabi (Massachusetts Institute of Technology), Daniela Rus (Massachusetts Institute of Technology)",
			"Paper",
			"slides/session6/04new-carspeak-v19.pdf",
			"video/SIGCOMM-VI-04-CarSpeakAContentCentricNetworkForAutonomousDriving.mp4");
		?>


		<?php tprog_add_session("16:00-17:30", "Poster &amp; Demo Break 2", ""); ?>

		<?php
			tprog_add_item("AutoNetkit: Simplifying Large Scale Open-Source Network Experimentation",
			"paper/sigcomm/p97.pdf",
			"Simon Knight (University of Adelaide), Askar Jaboldinov (Loughborough University), Olaf Maennel (Loughborough University), Iain Phillips (Loughborough University), Matthew Roughan (University of Adelaide)",
			"Poster");
		?>

		<?php
			tprog_add_item("Vitamin C for your Smartphone: The SKIMS Approach for Cooperative and Lightweight Security at Mobiles",
			"paper/sigcomm/p271.pdf",
			"Matthias W&auml;hlisch (Freie Universit&auml;t Berlin), Sebastian Trapp (Freie Universit&auml;t Berlin), Jochen Schiller (Freie Universit&auml;t Berlin), Benjamin Jochheim (HAW Hamburg), Theodor Nolte (HAW Hamburg), Thomas C. Schmidt (HAW Hamburg), Osman Ugus (HAW Hamburg), Dirk Westhoff (HAW Hamburg), Martin Kutscher (escrypt GmbH), Matthias K&uuml;ster (escrypt GmbH), Christian Keil (DFN-CERT Services GmbH), Jochen Sch&ouml;nfelder (DFN-CERT Services GmbH)",
			"Demo");
		?>

		<?php
			tprog_add_item("Energino: Energy Saving Tips For Your Wireless Network",
			"paper/sigcomm/p273.pdf",
			"Roberto Riggio (CREATE-NET), Cigdem Sengul (Telekom Innovation Labs, TU-Berlin), Karina Mabell Gomez (CREATE-NET), Tinku Rasheed (CREATE-NET)",
			"Demo");
		?>

		<?php
			tprog_add_item("MultiNet: Usable and Secure WiFi Device Association",
			"paper/sigcomm/p275.pdf",
			"Anthony Brown (University of Nottingham), Richard Mortier (University of Nottingham), Tom Rodden (University of Nottingham)",
			"Demo");
		?>

		<?php
			tprog_add_item("Runtime MAC Reconfiguration Using a Meta-compiler Assisted Toolchain",
			"paper/sigcomm/p277.pdf",
			"Xi Zhang (RWTH Aachen University), Junaid Ansari (RWTH Aachen University), Petri M&auml;h&ouml;nen (RWTH Aachen University",
			"Demo");
		?>

		<?php
			tprog_add_item("Programming Enterprise WLANs with Odin",
			"paper/sigcomm/p279.pdf",
			"Lalith Suresh (INESC-ID/Instituto Superior Tecnico), Julius Schulz-Zander (Telekom Innovation Laboratories/TU Berlin), Ruben Merz (Telekom Innovation Laboratories/TU Berlin), Anja Feldmann (Telekom Innovation Laboratories/TU Berlin)",
			"Demo");
		?>

		<?php
			tprog_add_item("Supporting Network Evolution and Incremental Deployment with XIA",
			"paper/sigcomm/p281.pdf",
			"Robert Grandl (University of Wisconsin-Madison), Dongsu Han (Carnegie Mellon University), Suk-Bok Lee (Carnegie Mellon University), Hyeontaek Lim (Carnegie Mellon University), Michel Machado (Boston University), Matthew Mukerjee (Carnegie Mellon University), David Naylor (Carnegie Mellon University)",
			"Demo");
		?>

		<?php
			tprog_add_item("Picasso: Flexible RF and Spectrum Slicing",
			"paper/sigcomm/p283.pdf",
			"Steven Hong (Stanford University) Jeffrey Mehlman (Stanford University), Sachin Katti (Stanford University)",
			"Demo");
		?>

		<?php
			tprog_add_item("Dismantling Intrusion Prevention Systems",
			"paper/sigcomm/p285.pdf",
			"Olli-Pekka Niemi (Stonesoft), Antti Levom&auml;ki (Stonesoft), Jukka Manner (Aalto University)",
			"Demo");
		?>

		<?php
			tprog_add_item("namehelp: Intelligent Client-Side DNS Resolution",
			"paper/sigcomm/p287.pdf",
			"John S Otto (Northwestern University), Mario A S&aacute;nchez (Northwestern University), John P Rula (Northwestern University), Ted Stein (Northwestern University), Fabi&aacute;n E Bustamante (Northwestern University)",
			"Demo");
		?>

		<?php
			tprog_add_item("Scalable Software Defined Network Controllers",
			"paper/sigcomm/p289.pdf",
			"Andreas Voellmy (Yale University), Junchang Wang (University of Science and Technology of China)",
			"Demo");
		?>

		<?php
			tprog_add_item("Enabling Dynamic Network Processing with ClickOS",
			"paper/sigcomm/p293.pdf",
			"Mohamed Ahmed (NEC Europe Ltd.), Felipe Huici (NEC Europe Ltd.), Armin Jahanpanah (NEC Europe Ltd.)",
			"Poster");
		?>

		<?php
			tprog_add_item("Predicting Location Using Mobile Phone Calls",
			"paper/sigcomm/p295.pdf",
			"Daqiang Zhang (Nanjing Normal Univeristy), Athanasios V. Vasilakos (National Technical University of Athens), Haoyi Xiong (Institute Mines Telecom -- Telecom SudParis)",
			"Poster");
		?>

		<?php
			tprog_add_item("SmartDiet: Offloading Popular Apps to Save Energy",
			"paper/sigcomm/p297.pdf",
			"Aki Saarinen (Aalto University, School of Science), Matti Siekkinen (Aalto University, School of Science), Yu Xiao (Aalto University, School of Science), Jukka K Nurminen (Aalto University, School of Science), Matti Kemppainen (Aalto University, School of Science), Pan Hui (Deutsche Telekom Labs",
			"Poster");
		?>

		<?php
			tprog_add_item("Revealing Contact Interval Patterns in Large Scale Urban Vehicular Ad Hoc Networks",
			"paper/sigcomm/p299.pdf",
			"Yong Li (Tsinghua University), Depeng Jin (Tsinghua University), Hui Pan (TU-Berlin), Li Su (Tsinghua University)
Lieguang Zeng (Tsinghua University)",
			"Poster");
		?>

		<?php
			tprog_add_item("fs-PGBR: A Scalable and Delay Sensitive Cloud Routing Protocol",
			"paper/sigcomm/p301.pdf",
			"Julien Mineraud (Waterford Institute of Technology), Sasitharan Balasubramaniam (Waterford Institute of Technology), Jussi Kangasharju (University of Helsinki), William Donnelly (Waterford Institute of Technology)",
			"Poster");
		?>

		<?php
			tprog_add_item("Accelerating Last-Mile Web Performance with Popularity-Based Prefetching",
			"paper/sigcomm/p303.pdf",
			"Srikanth Sundaresan (Georgia Institute of Technology), Nazanin Magharei (Georgia Institute of Technology), Nick Feamster (Georgia Institute of Technology), Renata Teixeira (CNRS/UPMC Sorbonne Universites)",
			"Poster");
		?>

		<?php
			tprog_add_item("First Insights from a Mobile Honeypot",
			"paper/sigcomm/p305.pdf",
			"Matthias W&auml;hlisch (Freie Universit&auml;t Berlin), Sebastian Trapp (Freie Universit&auml;t Berlin), Christian Keil (DFN-CERT Services GmbH), Jochen Sch&ouml;nfelder (DFN-CERT Services GmbH), Thomas C. Schmidt (HAW Hamburg), Jochen Schiller (Freie Universit&auml;t Berlin)",
			"Poster");
		?>

		<?php
			tprog_add_item("uvNIC: Rapid Prototyping Network Interface Controller Device Drivers",
			"paper/sigcomm/p307.pdf",
			"Matthew P. Grosvenor (University of Cambridge)",
			"Poster");
		?>

		<?php
			tprog_add_item("Policy Transformation in Software Defined Networks",
			"paper/sigcomm/p309.pdf",
			"Nanxi Kang (Princeton University), Joshua Reich (Princeton University), Jennifer Rexford (Princeton University), David Walker (Princeton University)",
			"Poster");
		?>


		<?php tprog_add_session("17:30-18:30", "\"Best Of CCR\" Session", "Srinivasan Keshav"); ?>

		<?php
			tprog_add_item("Forty Data Communications Research Questions",
			"paper/ccr-partridge.pdf",
			"Craig Partridge (Raytheon BBN Technologies)",
			"Paper",
			"slides/ccr/01-SIGCOMM12-40Questions-v4.pdf",
			"video/SIGCOMM-BESTOFCCR-01-FortyDataCommunicationsResearchQuestions.mp4");
		?>

		<?php
			tprog_add_item("Extracting Benefit from Harm: Using Malware Pollution to Analyze the Impact of Political and Geophysical Events on the Internet",
			"paper/ccr-dainotti.pdf",
			"Alberto Dainotti (University of Napoli Federico II), Roman Ammann (Auckland University of Technology), Emile Aben (RIPE NCC), Kimberly C. Claffy (CAIDA/UCSD)",
			"Paper",
			"slides/ccr/02-alberto-earthquakemm3.pdf",
			"video/SIGCOMM-BESTOFCCR-02-ExtractingBenefitFromHarm.mp4");
		?>

		<?php
			tprog_add_item("The Collateral Damage of Internet Censorship by DNS Injection",
			"paper/ccr-paper266.pdf",
			"Anonymous",
			"Paper",
			"slides/ccr/03-sigcomm.pdf",
			"video/SIGCOMM-BESTOFCCR-03-TheCollateralDamageOfInternetCensorshipByDNSInjection.mp4");
		?>

		<?php
		    tprog_add_session("19:00-23:00", "Conference Banquet", "", "a");
		    tprog_add_item("Conference Banquet", "http://www.marinacongresscenter.com/DowebEasyCMS/?Page=Homepage", 'At the Marina Congress Center', "");
		?>

		<li class="heading" data-theme="a" data-role="list-divider" style="display:block"><h3>Thursday, August 16, 2012</h3></li>

		<?php tprog_add_session("9:00-10:30", "Session 7: Network Formalism and Algorithmics", "Matt Caesar"); ?>

		<?php
			tprog_add_item("Perspectives on Network Calculus - No Free Lunch, But Still Good Value",
			"paper/sigcomm/p311.pdf",
			"Florin Ciucu (Telekom Innovation Laboratories / TU Berlin), Jens Schmitt (University of Kaiserslautern)",
			"Paper",
			"slides/session7/01new-gbu.pdf",
			"video/SIGCOMM-VII-01-PerspectivesOnNetworkCalculus.mp4");
		?>

		<?php
			tprog_add_item("Abstractions for Network Update",
			"paper/sigcomm/p323.pdf",
			"Mark Reitblatt (Cornell University), Nate Foster (Cornell University), Jennifer Rexford (Princeton University), Cole Schlesinger (Princeton University), David Walker (Princeton University)",
			"Paper",
			"slides/session7/02-2012-08-sigcomm.pdf",
			"video/SIGCOMM-VII-02-AbstractionsForNetworkUpdate.mp4");
		?>

		<?php
			tprog_add_item("A Smart Pre-Classifier to Reduce Power Consumption of TCAMs for
Multi-dimensional Packet Classification",
			"paper/sigcomm/p335.pdf",
			"Yadi Ma (University of Wisconsin-Madison), Suman Banerjee (University of Wisconsin-Madison)",
			"Paper",
			"slides/session7/03new-sigcomm12-yadi.pdf",
			"video/SIGCOMM-VII-03-ASmartPreClassifier.mp4");
		?>

		<?php tprog_add_session("10:30-11:00","Coffee Break", ""); ?>


		<?php tprog_add_session("11:00-12:30", "Session 8: Streaming and Content Networking", "Fabi&aacute;n Bustamante"); ?>

		<?php
			tprog_add_item("ShadowStream: Performance Evaluation as a Capability in Production Internet Live Streaming Networks",
			"paper/sigcomm/p347.pdf",
			"Chen Tian (Yale University), Richard Alimi (Google), Y. R. Yang (Yale University), David Zhang (PPLive)",
			"Paper",
			"slides/session8/01new-shadowstream-sigcomm12-send.pdf",
			"video/SIGCOMM-VIII-01-ShadowStream.mp4");
		?>

		<?php
			tprog_add_item("A Case for a Coordinated Internet-Scale Video Control Plane",
			"paper/sigcomm/p359.pdf",
			"Xi Liu (Conviva), Florin Dobrian (Conviva), Henry Milner (Conviva), Junchen Jiang (CMU), Vyas Sekar (Intel Labs), Ion Stoica (Conviva/UC Berkeley), Hui Zhang (Conviva/CMU)
",
			"Paper",
			"slides/session8/02new-CoordinatedVideoControlPlane.Final.pdf",
			"video/SIGCOMM-VIII-02-ACaseForACoordinatedInternetVideoControlPlane.mp4");
		?>

		<?php
			tprog_add_item("Optimizing Cost and Performance for Content Multihoming",
			"paper/sigcomm/p371.pdf",
			"Hongqiang Harry Liu (Yale University), Ye Wang (Yale University), Yang Richard Yang (Yale University), Hao Wang (Google), Chen Tian (Yale University)",
			"Paper",
			"slides/session8/03new-cmo-sigcomm2012-v12.pdf",
			"video/SIGCOMM-VIII-03-OptimizingCostAndPerformanceForContentMultihoming.mp4");
		?>

		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-15:30", "Session 9: Routing", "Craig Partridge"); ?>

		<?php
			tprog_add_item("Private and verifiable interdomain routing decisions",
			"paper/sigcomm/p383.pdf",
			"Mingchen Zhao (University of Pennsylvania), Wenchao Zhou (University of Pennsylvania), Alexander J. T. Gurney (University of Pennsylvania), Andreas Haeberlen (University of Pennsylvania), Micah Sherr (Georgetown University), Boon Thau Loo (University of Pennsylvania)",
			"Paper",
			"slides/session9/01new-Private-and-Verifiable-Interdomain-Routing-Decisions_SIGCOMM2012.pdf",
			"video/SIGCOMM-IX-01-PrivateAndVerifiableInterdomainRoutingDecisions.mp4");
		?>

		<?php
			tprog_add_item("LIFEGUARD: Practical Repair of Persistent Route Failures",
			"paper/sigcomm/p395.pdf",
			"Ethan Katz-Bassett (University of Washington / University of Southern California), Colin Scott (University of California, Berkeley), David R. Choffnes (University of Washington), &Iacute;talo Cunha (UFMG, Brazil), Vytautas Valancius (Georgia Tech), Nick Feamster (University of Maryland), Harsha V. Madhyastha (University of California, Riverside), Tom Anderson (University of Washington), Arvind Krishnamurthy (University of Washington)",
			"Paper",
			"slides/session9/02-katz-bassett_lifeguard_sigcomm_2012.pdf",
			"video/SIGCOMM-IX-02-LIFEGUARDPracticalRepairOfPersistentRouteFailures.mp4");
		?>

		<?php
			tprog_add_item("On-Chip Networks from a Networking Perspective: Congestion and Scalability in Many-Core Interconnects",
			"paper/sigcomm/p407.pdf",
			"George Nychis (Carnegie Mellon University), Chris Fallin (Carnegie Mellon University), Thomas Moscibroda (Microsoft Research Asia), Onur Mutlu (Carnegie Mellon University), Srinivasan Seshan (Carnegie Mellon University)",
			"Paper",
			"slides/session9/03-upload-this-one.pdf",
			"video/SIGCOMM-IX-03-OnChipNetworksFromANetworkingPerspective.mp4");
		?>

		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>

		<?php tprog_add_session("16:00-17:30","Session 10: Data Centers: Network Resilience", "Bruce Maggs"); ?>

		<?php
			tprog_add_item("NetPilot: Automating Datacenter Network Failure Mitigation",
			"paper/sigcomm/p419.pdf",
			"Xin Wu (Duke University), Daniel Turner (University of California, San Diego), Chao-Chih Chen (University of California, Davis), David A. Maltz (Microsoft), Xiaowei Yang (Duke University), Lihua Yuan (Microsoft), Ming Zhang (Microsoft)",
			"Paper",
			"slides/session10/01new-NetPilot.pdf",
			"video/SIGCOMM-X-01-NetPilotAutomatingDatacenterNetworkFailureMitigation.mp4");
		?>

		<?php
			tprog_add_item("Surviving Failures in Bandwidth-Constrained Datacenters",
			"paper/sigcomm/p431.pdf",
			"Peter Bodik (Microsoft Research), Ishai Menache (Microsoft Research), Mosharaf Chowdhury (UC Berkeley), Pradeepkumar Mani (Microsoft), David A. Maltz (Microsoft), Ion Stoica (UC Berkeley)",
			"Paper",
			"slides/session10/02new-SIGCOMM12-v2.pdf",
			"video/SIGCOMM-X-02-SurvivingFailuresInBandwidthConstrainedDatacenters.mp4");
		?>

		<?php
			tprog_add_item("Mirror Mirror on the Ceiling: Flexible Wireless Links for Data Centers",
			"paper/sigcomm/p443.pdf",
			"Xia Zhou (UC Santa Barbara), Zengbin Zhang (UC Santa Barbara), Yibo Zhu (UC Santa Barbara), Yubo Li (Xi'an Jiaotong University, China), Saipriya Kumar (UC Santa Barbara), Amin Vahdat (Google/UC San Diego), Ben Y. Zhao (UC Santa Barbara), Haitao Zheng (UC Santa Barbara)",
			"Paper",
			"slides/session10/03new-beam3d-sigcomm-final.pdf",
			"video/SIGCOMM-X-03-MirrorMirrorOnTheCeiling.mp4");
		?>
		<?php tprog_add_session("17:30-18:00", "Closing", ""); ?>

	</ul>


<p>
Please email the <a class="lnkcls" href="mailto:sigcomm2012-gen-chairs@acm.org">general chairs</a> with any questions you may have.
</p>



<?php
    include ("include/footer.php");
?>
