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

	<ul data-role="listview" data-filter="true" data-inset="true" data-divider-theme="b">
		<?php tprog_add_session("8:30-10:30", "Welcome &amp; SIGCOMM Award Keynote", ""); ?>
		<?php
			tprog_add_item("General Chairs' Welcome",
			"", 
			"Lars Eggert (NetApp) &amp; J&ouml;rg Ott (Aalto University)", 
			"");
		?>
		<?php
			tprog_add_item("Hosts' Welcome Address",
			"", 
			"Hannu Kauppinen (Nokia) &amp; N.N. (Aalto University)", 
			"");
		?>
		<?php
			tprog_add_item("SIGCOMM Award Keynote",
			"", 
			"N.N.", 
			"Keynote");
		?>
		
		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>
		
		<?php tprog_add_session("11:00-12:30", "Session 1: Middlebox and Middleware", "Ramana Kompella"); ?>
		
		<?php
			tprog_add_item("Multi-Resource Fair Queueing for Packet Processing",
			"", 
			"Ali Ghodsi (UC Berkeley / KTH), Vyas Sekar (Intel Labs), Matei Zaharia (UC Berkeley), Ion Stoica (UC Berkeley)", 
			"Paper");
		?>

		<?php
			tprog_add_item("Making Middleboxes Someone Else's Problem: Network Processing as a Cloud Service",
			"", 
			"Justine Sherry (UC Berkeley), Shaddi Hasan (UC Berkeley), Colin Scott (UC Berkeley), Arvind Krishnamurthy (University of Washington), Sylvia Ratnasamy (UC Berkeley), Vyas Sekar (Intel Labs)", 
			"Paper");
		?>

		<?php
			tprog_add_item("HyperDex:  A Distributed, Searchable Key-Value Store",
			"", 
			"Robert Escriva (Cornell University), Bernard Wong (University of Waterloo), Emin G&uuml;n Sirer (Cornell University)",
			"Paper");
		?>
		
		
		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-15:30", "Session 2: Wireless Communication", "Jon Crowcroft"); ?>
		
		<?php
			tprog_add_item("Picasso: Flexible RF and Spectrum Slicing",
			"", 
			"Steven Hong (Stanford University), Jeff Mehlman (Stanford University), Sachin Katti (Stanford University)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Spinal Codes",
			"", 
			"Jonathan Perry (MIT), Peter A. Iannucci (MIT), Kermin Elliott Fleming (MIT), Hari Balakrishnan (MIT), Devavrat Shah (MIT)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Efficient and Reliable Low-Power Backscatter Networks",
			"", 
			"Jue Wang (MIT), Haitham Hassanieh (MIT), Dina Katabi (MIT), Piotr Indyk (MIT)", 
			"Paper");
		?>
		
		
		<?php tprog_add_session("15:30-17:00", "Poster &amp; Demo Break 1", ""); ?>
		
		<?php
			tprog_add_item("Network-Aware Service Placement in a Distributed Cloud Environment",
			"", 
			"Moritz Steiner (Bell Labs), Bob Gaglianello Gaglianello (Bell Labs), Vijay Gurbani (Bell Labs), Volker Hilt (Bell Labs), W. D. Roome (Bell Labs), Michael Scharf (Bell Labs), Thomas Voith (Bell Labs)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("SP4: Scalable Programmable Packet Processing Platform",
			"", 
			"Harjot Gill (University of Pennsylvania), Dong Lin (University of Pennsylvania), Lohit Sarna (University of Pennsylvania), Robert Mead (University of Pennsylvania), Kenton C.T. Lee (University of Pennsylvania), Boon Thau Loo (University of Pennsylvania)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Distributed Content Storage for Just-in-Time Streaming",
			"", 
			"Sourav Kumar Dandapat (Indian Institute of Technology Kharagpur), Sanyam Jain (Indian Institute of Technology Kharagpur), Romit Roy Choudhury (Duke University), Niloy Ganguly (Indian Institute of Technology Kharagpur", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Blockmon: A High-Performance Composable Network Traffic Measurement System",
			"", 
			"Felipe Huici (NEC Europe Ltd.), Andrea di Pietro (CNIT), Brian Trammell (ETH Zurich), Jose Maria Gomez Hidalgo (OPTENET), Daniel Martinez Ruiz (OPTENET), Nico d'Heureuse (NEC Europe Ltd.)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("PaDIS Emulator:An Emulator to Evaluate CDN-ISP Collaboration",
			"", 
			"Ingmar Poese (T-Labs/TU-Berlin), Benjamin Frank (T-Labs/TU-Berlin), Simon Knight (University of Adelaide), Niklas Semmler (T-Labs/TU-Berlin), Georgios Smaragdakis (T-Labs/TU-Berlin)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Signposts: End-to-End Networking in a World of Middleboxes",
			"", 
			"Amir Chaudhry (University of Cambridge), Anil Madhavapeddy (University of Cambridge), Charalampos Rotsos (University of Cambridge), Richard Mortier (University of Nottingham), Andrius Aucinas (University of Cambridge), Jon Crowcroft (University of Cambridge), Sebastian Probst Eide (University of Cambridge), Steven Hand (University of Cambridge), Andrew W Moore (University of Cambridge), Narseo Vallina-Rodriguez (University of Cambridge)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Towards SmartFlow: Case Studies on Enhanced Programmable Forwarding in OpenFlow Switches",
			"", 
			"Felici&aacute;n N&eacute;meth (Budapest University of Technology and Economics), &Aacute;d&aacute;m Stipkovits (Budapest University of Technology and Economics), Bal&aacute;zs Sonkoly (Budapest University of Technology and Economics), Andr&aacute;s Guly&aacute;s (Budapest University of Technology and Economics)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("An OpenFlow-Based Energy-Efficient Data Center Approach",
			"", 
			"Michael Jarschel (University of W&uuml;rzburg), Rastin Pries (University of W&uuml;rzburg)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Reduction-based Analysis of BGP Systems with BGPVerif",
			"", 
			"Anduo Wang (University of Pennsylvania), Alexander J.T. Gurney (University of Pennsylvania), Xianglong Han (University of Pennsylvania), Jinyan Cao (University of Pennsylvania), Carolyn Talcot (SRI International), Boon Thau Loo (University of Pennsylvania), Andre Scedrov (University of Pennsylvania)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Route Shepherd: Stability Hints for the Control Plane",
			"", 
			"Alexander J. T. Gurney (University of Pennsylvania), Xianglong Han (University of Pennsylvania), Yang Li (University of Pennsylvania), Boon Thau Loo (University of Pennsylvania)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Efficiently Migrating Stateful Middleboxes",
			"", 
			"Vladimir Andrei Olteanu (University Politehnica of Bucharest), Costin Raiciu (University Politehnica of Bucharest)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("A Demonstration of Ultra-Low-Latency Data Center Optical Circuit Switching",
			"", 
			"Nathan Farrington (UC San Diego), George Porter (UC San Diego), Pang-Chen Sun (UC San Diego), Alex Forencich (UC San Diego), Joseph Ford (UC San Diego), Yeshaiahu Fainman (UC San Diego), George Papen (UC San Diego), Amin Vahdat (UC San Diego)",
			"Demo");
		?>
		
		<?php
			tprog_add_item("AutoNetkit: Simplifying Large Scale Open-Source Network Experimentation",
			"", 
			"Simon Knight (University of Adelaide), Askar Jaboldinov (Loughborough University), Olaf Maennel (Loughborough University), Iain Phillips (Loughborough University), Matthew Roughan (University of Adelaide)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Bulk of Interest: Performance Measurement of Content-Centric Routing",
			"", 
			"Matthias W&auml;hlisch (Freie Universit&auml;t Berlin), Thomas C. Schmidt (Hamburg University of Applied Sciences), Markus Vahlenkamp (Hamburg University of Applied Sciences)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("User-level Data Center Tomography",
			"", 
			"Neil Alexander Twigg (University of Stirling), Marwan Fayed (University of Stirling), Colin Perkins (University of Glasgow), Dimitrios Pezaros (University of Glasgow), Posco Tso (University of Glasgow)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Towards Detecting BGP Route Hijacking using the RPKI",
			"", 
			"Matthias W&auml;hlisch (Freie Universität Berlin), Olaf Maennel (Loughborough University), Thomas C. Schmidt (HAW Hamburg)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Choice as a Principle in Network Architecture",
			"", 
			"Tilman Wolf (University of Massachusetts), James Griffioen (University of Kentucky), Kenneth L Calvert (University of Kentucky), Rudra Dutta (North Carolina State University), George N Rouskas (North Carolina State University), Ilia Baldine (University of North Carolina), Anna Nagurney (University of Massachusetts)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("A Frequency Adjustment Architecture for Energy Efficient Router",
			"", 
			"Wenliang Fu (Beijing Institute of Technology), Tian Song (Beijing Institute of Technology)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Detecting Third-party Addresses in Traceroute IP Paths",
			"", 
			"Pietro Marchetta (University of Napoli), Walter de Donato (University of Napoli), Antonio Pescap&eacute; (University of Napoli)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Reviving Delay-based TCP for Data Centers",
			"", 
			"Changhyun Lee (KAIST), Keon Jang (Microsoft Research), Sue Moon (KAIST)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("FaaS: Filtering IP Spoofing Traffic as a Service",
			"", 
			"Bingyang Liu (Tsinghua University), Jun Bi (Tsinghua University), Xiaowei Yang (Duke University)", 
			"Poster");
		?>
		

		<?php tprog_add_session("17:00-18:30", "Session 3: Data Centers: Latency", "Sachin Katti"); ?>
		
		<?php
			tprog_add_item("Deadline-Aware Datacenter TCP (D<sup>2</sup>TCP)",
			"", 
			"Balajee Vamanan (Purdue University), Jahangir Hasan (Google Inc.), T. N. Vijaykumar (Purdue University)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Finishing Flows Quickly with Preemptive Scheduling",
			"", 
			"Chi-Yao Hong (University of Illinois at Urbana-Champaign), Matthew Caesar (University of Illinois at Urbana-Champaign), P. Brighten Godfrey (University of Illinois at Urbana-Champaign)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("DeTail: Reducing the Flow Completion Time Tail in Datacenter Networks",
			"", 
			"David Zats (UC Berkeley), Tathagata Das (UC Berkeley), Prashanth Mohan (UC Berkeley), Dhruba Borthakur (Facebook), Randy Katz (UC Berkeley)", 
			"Paper");
		?>
		
		<?php tprog_add_session("18:30-19:30", "Community Feedback Session", ""); ?>

	</ul>
</div>	


<div id="prog_tbl_3" class="prog_tbl">
	<h2 class="hcls">Wednesday, August 15, 2012</h2>

	<ul data-role="listview" data-filter="true" data-inset="true">
		<?php tprog_add_session("9:00-10:30", "Session 4: Measuring Networks", "Sergey Gorinsky"); ?>
		
		<?php
			tprog_add_item("Inferring Visibility: Who's (not) talking to whom?",
			"", 
			"Gonca Gursun (Boston University), Natali Ruchansky (Boston University), Evimaria Terzi (Boston University), Mark Crovella (Boston University", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Anatomy of a Large European IXP",
			"", 
			"Bernhard Ager (ETH Zurich), Nikolaos Chatzis (TU Berlin / T-Labs), Anja Feldmann (TU Berlin / T-Labs), Nadi Sarrar (TU Berlin / T-Labs), Steve Uhlig (Queen Mary, University of London), Walter Willinger (AT&amp;T Labs-Research)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Measuring and Fingerprinting ClickSpam in Online Ad Networks",
			"", 
			"Vacha Dave (The University of Texas at Austin), Saikat Guha (Microsoft Research India), Yin Zhang (The University of Texas at Austin)", 
			"Paper");
		?>
		
		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>
		
		<?php tprog_add_session("11:00-12:30", "Session 5: Data Centers: Resources Management", "Emin G&uuml;n Sirer"); ?>
		
		<?php
			tprog_add_item("FairCloud: Sharing The Network In Cloud Computing",
			"", 
			"Lucian Popa (HP Labs), Gautam Kumar (UC Berkeley), Mosharaf Chowdhury (UC Berkeley), Arvind Krishnamurthy (Univ. of Washington), Sylvia Ratnasamy (UC Berkeley), Ion Stoica (UC Berkeley)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("The Only Constant is Change: Incorporating Time-Varying Network
Reservations in Data Centers",
			"", 
			"Di Xie (Purdue University), Ning Ding (Purdue University), Y. Charlie Hu (Purdue University), Ramana Kompella (Purdue University)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("It's Not Easy Being Green",
			"", 
			"Peter Xiang Gao (University of Waterloo), Andrew R Curtis (University of Waterloo), Bernard Wong (University of Waterloo), S. Keshav (University of Waterloo)", 
			"Paper");
		?>
		
		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-16:00", "Session 6: Wireless and Mobile Networking", "Srinivasan Seshan"); ?>
		
		<?php
			tprog_add_item("Flashback: Decoupled Lightweight Wireless Control",
			"", 
			"Asaf Cidon (Stanford University), Kanthi Nagaraj (Stanford University), Sachin Katti (Stanford University), Pramod Viswanath (UIUC)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("MegaMIMO: Scaling Wireless Capacity with User Demand",
			"", 
			"Hariharan Rahul (MIT CSAIL), Swarun Suresh Kumar (MIT CSAIL), Dina Katabi (MIT CSAIL)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("TUBE: Time Dependent Pricing for Mobile Data",
			"", 
			"Sangtae Ha (Princeton University), Soumya Sen (Princeton University), Carlee Joe-Wong (Princeton University), Youngbin Im (Princeton University), Mung Chiang (Princeton University)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("CarSpeak: A Content-Centric Network for Autonomous Driving",
			"", 
			"Swarun Kumar (Massachusetts Institute of Technology), Lixin Shi (Massachusetts Institute of Technology), Stephanie Gil (Massachusetts Institute of Technology), Nabeel Ahmed (Massachusetts Institute of Technology), Dina Katabi (Massachusetts Institute of Technology), Daniela Rus (Massachusetts Institute of Technology)", 
			"Paper");
		?>
		
		
		<?php tprog_add_session("16:00-17:30", "Poster &amp; Demo Break 2", ""); ?>
		
		<?php
			tprog_add_item("Vitamin C for your Smartphone: The SKIMS Approach for Cooperative and Lightweight Security at Mobiles",
			"", 
			"Matthias W&auml;hlisch (Freie Universität Berlin), Sebastian Trapp (Freie Universität Berlin), Jochen Schiller (Freie Universität Berlin), Benjamin Jochheim (HAW Hamburg), Theodor Nolte (HAW Hamburg), Thomas C. Schmidt (HAW Hamburg), Osman Ugus (HAW Hamburg), Dirk Westhoff (HAW Hamburg), Martin Kutscher (escrypt GmbH), Matthias Küster (escrypt GmbH), Christian Keil (DFN-CERT Services GmbH), Jochen Schönfelder (DFN-CERT Services GmbH)",
			"Demo");
		?>
		
		<?php
			tprog_add_item("Energino: Energy Saving Tips For Your Wireless Network",
			"", 
			"Roberto Riggio (CREATE-NET), Cigdem Sengul (Telekom Innovation Labs, TU-Berlin), Karina Mabell Gomez (CREATE-NET), Tinku Rasheed (CREATE-NET)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("MultiNet: Usable and Secure WiFi Device Association",
			"", 
			"Anthony Brown (University of Nottingham), Richard Mortier (University of Nottingham), Tom Rodden (University of Nottingham)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Runtime MAC Reconfiguration Using a Meta-compiler Assisted Toolchain",
			"", 
			"Xi Zhang (RWTH Aachen University), Junaid Ansari (RWTH Aachen University), Petri Mähönen (RWTH Aachen University",
			"Demo");
		?>
		
		<?php
			tprog_add_item("Programming Enterprise WLANs with Odin",
			"", 
			"Lalith Suresh (INESC-ID/Instituto Superior Tecnico), Julius Schulz-Zander (Telekom Innovation Laboratories/TU Berlin), Ruben Merz (Telekom Innovation Laboratories/TU Berlin), Anja Feldmann (Telekom Innovation Laboratories/TU Berlin)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Supporting Network Evolution and Incremental Deployment with XIA",
			"", 
			"Robert Grandl (University of Wisconsin-Madison), Dongsu Han (Carnegie Mellon University), Suk-Bok Lee (Carnegie Mellon University), Hyeontaek Lim (Carnegie Mellon University), Michel Machado (Boston University), Matthew Mukerjee (Carnegie Mellon University), David Naylor (Carnegie Mellon University)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Picasso: Flexible RF and Spectrum Slicing",
			"", 
			"Steven Hong (Stanford University) Jeffrey Mehlman (Stanford University), Sachin Katti (Stanford University)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Dismantling Intrusion Prevention Systems",
			"", 
			"Olli-Pekka Niemi (Stonesoft), Antti Levom&auml;ki (Stonesoft), Jukka Manner (Aalto University)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("namehelp: Intelligent Client-Side DNS Resolution",
			"", 
			"John S Otto (Northwestern University), Mario A S&aacute;nchez (Northwestern University), John P Rula (Northwestern University), Ted Stein (Northwestern University), Fabi&aacute;n E Bustamante (Northwestern University)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("Scalable Software Defined Network Controllers",
			"", 
			"Andreas Voellmy (Yale University), Junchang Wang (University of Science and Technology of China)", 
			"Demo");
		?>
		
		<?php
			tprog_add_item("RaptorStream: Boosting Mobile Peer-to-Peer Streaming with Raptor Codes",
			"", 
			"Philipp M. Eittenberger (University of Bamberg)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Enabling Dynamic Network Processing with ClickO",
			"", 
			"Mohamed Ahmed (NEC Europe Ltd.), Felipe Huici (NEC Europe Ltd.), Armin Jahanpanah (NEC Europe Ltd.)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Predicting Location Using Mobile Phone Calls",
			"", 
			"Daqiang Zhang (Nanjing Normal Univeristy), Athanasios V. Vasilakos (National Technical University of Athens), Haoyi Xiong (Institute Mines Telecom -- Telecom SudParis)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("SmartDiet: Offloading Popular Apps to Save Energy",
			"", 
			"Aki Saarinen (Aalto University, School of Science), Matti Siekkinen (Aalto University, School of Science), Yu Xiao (Aalto University, School of Science), Jukka K Nurminen (Aalto University, School of Science), Matti Kemppainen (Aalto University, School of Science), Pan Hui (Deutsche Telekom Labs", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Revealing Contact Interval Patterns in Large Scale Urban Vehicular Ad Hoc Networks",
			"", 
			"Yong Li (Tsinghua University), Depeng Jin (Tsinghua University), Hui Pan (TU-Berlin), Li Su (Tsinghua University)
Lieguang Zeng (Tsinghua University)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("fs-PGBR: A Scalable and Delay Sensitive Cloud Routing Protocol",
			"", 
			"Julien Mineraud (Waterford Institute of Technology), Sasitharan Balasubramaniam (Waterford Institute of Technology), Jussi Kangasharju (University of Helsinki), William Donnelly (Waterford Institute of Technology)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Accelerating Last-Mile Web Performance with Popularity-Based Prefetching",
			"", 
			"Srikanth Sundaresan (Georgia Institute of Technology), Nazanin Magharei (Georgia Institute of Technology), Nick Feamster (Georgia Institute of Technology), Renata Teixeira (CNRS/UPMC Sorbonne Universites)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("First Insights from a Mobile Honeypot",
			"", 
			"Matthias W&auml;hlisch (Freie Universit&auml;t Berlin), Sebastian Trapp (Freie Universit&auml;t Berlin), Christian Keil (DFN-CERT Services GmbH), Jochen Sch&ouml;nfelder (DFN-CERT Services GmbH), Thomas C. schmidt (HAW Hamburg), Jochen Schiller (Freie Universit&auml;t Berlin)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("uvNIC: Rapid Prototyping Network Interface Controller Device Drivers",
			"", 
			"Matthew P. Grosvenor (University of Cambridge)", 
			"Poster");
		?>
		
		<?php
			tprog_add_item("Policy Transformation in Software Defined Networks",
			"", 
			"Nanxi Kang (Princeton University), Joshua Reich (Princeton University), Jennifer Rexford (Princeton University), David Walker (Princeton University)", 
			"Poster");
		?>

		
		<?php tprog_add_session("17:30-18:30", "\"Best Of CCR\" Session", "Srinivasan Keshav"); ?>
		
		<?php
			tprog_add_item("Forty Data Communications Research Questions",
			"paper/ccr-partridge.pdf", 
			"Craig Partridge (Raytheon BBN Technologies)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Extracting Benefit from Harm: Using Malware Pollution to Analyze the Impact of Political and Geophysical Events on the Internet",
			"paper/ccr-dainotti.pdf", 
			"Alberto Dainotti (University of Napoli Federico II), Roman Ammann (Auckland University of Technology), Emile Aben (RIPE NCC), Kimberly C. Claffy (CAIDA/UCSD)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("The Collateral Damage of Internet Censorship by DNS Injection",
			"paper/ccr-paper266.pdf", 
			"Anonymous", 
			"Paper");
		?>
		
	</ul>

</div>


<div id="prog_tbl_4" class="prog_tbl">
	<h2 class="hcls">Thursday, August 16, 2012</h2>

	<ul data-role="listview" data-filter="true" data-inset="true">
		<?php tprog_add_session("9:00-10:30", "Session 7: Network Formalism and Algorithmics", "Matt Caesar"); ?>
		
		<?php
			tprog_add_item("Perspectives on Network Calculus - No Free Lunch, But Still Good Value",
			"", 
			"Florin Ciucu (Telekom Innovation Laboratories / TU Berlin), Jens Schmitt (University of Kaiserslautern)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Abstractions for Network Update",
			"", 
			"Mark Reitblatt (Cornell University), Nate Foster (Cornell University), Jennifer Rexford (Princeton University), Cole Schlesinger (Princeton University), David Walker (Princeton University)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("A Smart Pre-Classifier to Reduce Power Consumption of TCAMs for
Multi-dimensional Packet Classification",
			"", 
			"Yadi Ma (University of Wisconsin-Madison), Suman Banerjee (University of Wisconsin-Madison)", 
			"Paper");
		?>
		
		<?php tprog_add_session("10:30-11:00","Coffee Break", ""); ?>

		
		<?php tprog_add_session("11:00-12:30", "Session 8: Streaming and Content Networking", "Fabi&aacute;n Bustamante"); ?>
		
		<?php
			tprog_add_item("ShadowStream: Performance Evaluation as a Capability in Production Internet Live Streaming Networks",
			"", 
			"Chen Tian (Yale University), Richard Alimi (Google), Y. R. Yang (Yale University), David Zhang (PPLive)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("A Case for a Coordinated Internet-Scale Video Control Plane",
			"", 
			"Xi Liu (Conviva), Florin Dobrian (Conviva), Henry Milner (Conviva), Junchen Jiang (CMU), Vyas Sekar (Intel Labs), Ion Stoica (Conviva/UC Berkeley), Hui Zhang (Conviva/CMU)
", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Optimizing Cost and Performance for Content Multihoming",
			"", 
			"Hongqiang Harry Liu (Yale University), Ye Wang (Yale University), Yang Richard Yang (Yale University), Hao Wang (Google), Chen Tian (Yale University)", 
			"Paper");
		?>
		
		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-15:30", "Session 9: Routing", "Craig Partridge"); ?>
		
		<?php
			tprog_add_item("Private and verifiable interdomain routing decisions",
			"", 
			"Mingchen Zhao (University of Pennsylvania), Wenchao Zhou (University of Pennsylvania), Alexander J. T. Gurney (University of Pennsylvania), Andreas Haeberlen (University of Pennsylvania), Micah Sherr (Georgetown University), Boon Thau Loo (University of Pennsylvania)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("LIFEGUARD: Practical Repair of Persistent Route Failures",
			"", 
			"Ethan Katz-Bassett (University of Washington / University of Southern California), Colin Scott (University of California, Berkeley), David R. Choffnes (University of Washington), &Iacute;talo Cunha (UFMG, Brazil), Vytautas Valancius (Georgia Tech), Nick Feamster (University of Maryland), Harsha V. Madhyastha (University of California, Riverside), Tom Anderson (University of Washington), Arvind Krishnamurthy (University of Washington)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("On-Chip Networks from a Networking Perspective: Congestion and Scalability in Many-Core Interconnects",
			"", 
			"George Nychis (Carnegie Mellon University), Chris Fallin (Carnegie Mellon University), Thomas Moscibroda (Microsoft Research Asia), Onur Mutlu (Carnegie Mellon University), Srinivasan Seshan (Carnegie Mellon University)", 
			"Paper");
		?>

		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>
		
		<?php tprog_add_session("16:00-17:30","Session 10: Data Centers: Network Resilience", "Bruce Maggs"); ?>
		
		<?php
			tprog_add_item("NetPilot: Automating Datacenter Network Failure Mitigation",
			"", 
			"Xin Wu (Duke University), Daniel Turner (University of California, San Diego), Chao-Chih Chen (University of California, Davis), David A. Maltz (Microsoft), Xiaowei Yang (Duke University), Lihua Yuan (Microsoft), Ming Zhang (Microsoft)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Surviving Failures in Bandwidth-Constrained Datacenters",
			"", 
			"Peter Bodik (Microsoft Research), Ishai Menache (Microsoft Research), Mosharaf Chowdhury (UC Berkeley), Pradeepkumar Mani (Microsoft), David A. Maltz (Microsoft), Ion Stoica (UC Berkeley)", 
			"Paper");
		?>
		
		<?php
			tprog_add_item("Mirror Mirror on the Ceiling: Flexible Wireless Links for Data Centers",
			"", 
			"Xia Zhou (UC Santa Barbara), Zengbin Zhang (UC Santa Barbara), Yibo Zhu (UC Santa Barbara), Yubo Li (Xi'an Jiaotong University, China), Saipriya Kumar (UC Santa Barbara), Amin Vahdat (Google/UC San Diego), Ben Y. Zhao (UC Santa Barbara), Haitao Zheng (UC Santa Barbara)", 
			"Paper");
		?>
		<?php tprog_add_session("17:30-18:00", "Closing", ""); ?>
		
	</ul>

</div>


<p>
Please email the <a class="lnkcls" href="mailto:sigcomm2012-gen-chairs@acm.org">general chairs</a> with any questions you may have.
</p>



<?php
    include ("include/footer.php");
?>