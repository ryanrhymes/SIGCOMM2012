<?php
        $page_title="Information-Centric Networking(ICN)";
        include("include/header.php");
?>


<h2 class="hcls">Information-Centric Networking (ICN)</h2>

<p>
<b>Helsinki, Finland (Friday, August 17, 2012)</b>
</p>


<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		
		<?php tprog_add_session("9:00-10:30", "Session 1: ICN Architecture", "Giacomo Morabito (University of Cantabria)"); ?>
		
		<?php tprog_add_item("Pervasive Persistent Identification for Information Centric Networking", 
			"", 
			"Karen Sollins", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Exploit the known or explore the unknown? Hamlet-like doubts in ICN", 
			"", 
			"Raffaele Chiocchetti, Dario Rossi, Giuseppe Rossini, Giovanna Carofiglio; Diego Perino", 
			"Paper"); 
		?>

		<?php tprog_add_item("Mobility Support in Content Centric Networks", 
			"", 
			"Dohyung Kim, Jong-Hwan Kim, Yusung Kim, Hyun-Soo Yoon; Ikjun Yeom;", 
			"Paper"); 
		?>		

		<?php tprog_add_item("Transport-layer issues in Information Centric Networks", 
			"", 
			"Stefano Salsano, Andrea Detti, Matteo Pomposini, Matteo Cancellieri and Nicola Blefari Melazzi", 
			"Paper"); 
		?>
		
		
		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>
		
		
		<?php tprog_add_session("11:00-12:30", "Session 2: Specific System Designs", "George C. Polyzos (AUEB)"); ?>
		
		<?php tprog_add_item("An Open Content Delivery Infrastructure Using Data Lockers", 
			"", 
			"Richard Alimi, Leo Chen, Dirk Kutscher, Harry Liu, Akbar Rahman, Y. Richard Yang and David Zhang", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Coexist: A Hybrid Approach for Content Oriented Publish/Subscribe Systems", 
			"", 
			"Jiachen Chen, Mayutan Arumaithurai, Xiaoming Fu and K.K. Ramakrishnan", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Joint Hop-by-Hop and Receiver-Driven Interest Control Protocol for Content-Centric Networks", 
			"", 
			"Giovanna Carofiglio, Massimo Gallo and Luca Muscariello", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("A Multi-Level DHT Routing Framework with Aggregation", 
			"", 
			"Hang Liu", 
			"Paper"); 
		?>
		
		
		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>
		
		
		<?php tprog_add_session("14:00-15:30", "Session 3: Forwarding and Caching", "Ignacio Solis (PARC)"); ?>
		
		<?php tprog_add_item("CATT: Potential Based Routing with Content Caching for ICN", 
			"", 
			"Suyong Eum, Kiyohide Nakauchi, Masayuki Murata, Yozo Shoji and Nozomu Nishinaga", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("To Cache or Not To Cache: Probabilistic In-Network Caching for Information-Centric Networks", 
			"", 
			"Ioannis Psaras, Wei Koong Chai and George Pavlou", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Proactive Selective Neighbor Caching for enhancing Mobility Support in Information-Centric Networks", 
			"", 
			"Xenofon Vasilakos, Vasilios Siris, George Polyzos and Marios Pomonis", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("On the Effects of Caching in Access Aggregation Networks", 
			"", 
			"John Ardelius, Lars Westberg, &Aring;ke Arvidsson and Bj&ouml;rn Gr&ouml;nvall", 
			"Paper"); 
		?>
		
		
		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>
		
		
		<?php tprog_add_session("16:00-17:30", "Session 4: ICN Applications and Optimizations", "B&ouml;rje Ohlman (Ericsson Research)"); ?>
		
		<?php tprog_add_item("Caesar: a Content Router for High Speed Forwarding", 
			"", 
			"Matteo Varvello, Diego Perino and Jairo Esteban", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Information-Centric Networking Architecture for Data Centers", 
			"", 
			"Bong Jun Ko, Vasileios Pappas, Ramya Raghavendra, Yang Song, Raheleh B. Dilmaghani, Kang-Won Lee and Dinesh Verma", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Access Control Enforcement Delegation for Information-Centric Networking Architectures", 
			"", 
			"Nikos Fotiou, Giannis Marias and George Polyzos", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("ICN-RE: Redundancy Elimination for Information-Centric Networking", 
			"", 
			"Diego Perino, Matteo Varvello and Krishna P. N. Puttaswamy", 
			"Paper"); 
		?>
		
	</ul>



<h2 class="hcls">Introduction</h2>


<p>
	  The rapid development of Information-Centric Networking
	  (ICN) concepts in the last few years is one of the
	  significant results from multiple international Future
	  Internet research activities. Based on the ICN concepts, the
	  principal communication paradigm is no longer end-to-end
	  data delivery between hosts as in the current Internet
	  architecture. Instead, ICN-based network architectures focus
	  directly on retrieving information objects securely,
	  reliably, scalably, and efficiently.  These architectural
	  design efforts aim to directly address the network
	  challenges that arise from the increasing demand for highly
	  scalable content distribution, from accelerated growths of
	  mobile devices, and from wide deployment of
	  Internet-of-things (IoT).
	</p>

	<p>
	  The resulting network architectures are expected to leverage
	  in-network storage, multiparty communication through
	  replication and interaction models to provide effective and
	  efficient data distribution in the communication services,
	  and to provide effective solutions in securing the network
	  infrastructure as well as user data.
	  </p>

<p>
This workshop invites original contributions on Information-Centric
Networking architecture topics, specific algorithms and protocols, as
well as on results from implementations and experimentation.
</p>	

<a class="button" data-role="button" href="workshops/SIGCOMM-ICN-2012-CFP.pdf" rel="external">PDF version</a>
<a class="button" data-role="button" href="workshops/SIGCOMM-ICN-2012-CFP.txt" rel="external">Text version</a>


<h2 class="hcls">Topics</h2>

<ul>
  <li>Naming and addressing</li>
  <li>Routing and name resolution</li>
  <li>Routing and name resolution scalability</li>
  <li>Support for mobility</li>
  <li>Support for / avoidance of middle boxes </li>
  <li>Models and/or compensation schemes for user contribution to network resources (bandwidth, storage for caching, battery, processing, name resolution, etc.)</li>
  <li>Resource management (caching strategies, congestion control)</li>
  <li>Security, privacy and trust </li>
  <li>Testbeds and simulations frameworks </li>
  <li>Metadata and network extensions </li>
  <li>Real-time traffic over ICN (voice, video, etc)</li>
  <li>PDUs, fragmentation and "packet size" implications on design</li>
  <li>Should ICN be an overlay or an underlay?</li>
  <li>Performance evaluation</li>
  <li>Inter-domain operations (protocols, policies, etc.)</li>
  <li>Limitations of ICNs</li>
</ul>


<h2 class="hcls">Submission Instructions</h2>

	<p>
	  All submissions must be original work that has not been
	  submitted to any other workshop, conference, or journal. The
	  workshop will accept papers describing completed work as
	  well as work-in-progress and ongoing experiments. Papers
	  describing practical experiments are especially invited.
	  Submissions must be no greater than 6 pages in length and
	  must be in PDF format. Reviews will be single-blind: please
	  include authors name and affiliation in the submission
	</p>
	<p>
	  Submissions must follow the SIGCOMM formatting guidelines
	  that will be posted at
	  at <a href="http://conferences.sigcomm.org/sigcomm/2012/cfp.php">http://conferences.sigcomm.org/sigcomm/2012/cfp.php</a>. Authors
	  of accepted papers are expected to present their papers at
	  the workshop. 
	</p>
	<p>
	  Please submit your papers here:<br/>
	  <a href="https://www.easychair.org/conferences/?conf=acmsigcommicn2012">http://www.easychair.org/conferences/?conf=acmsigcommicn2012</a>
	</p>

<a class="button" data-role="button" href="mailto:icn2012-organizers@listserv.netlab.nec.de">Email the Organizers</a>


<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="c" class="datetbl">
	<?php add_dateitem("Abstract Registration", "<span class='linethrough'>March 18, 2012; extension: <em>(extended to March 22,2012)</em></span>"); ?>
	<?php add_dateitem("Submissions due", "<span class='linethrough'>March 25, 2012; extension: <em>(extended to April 1,2012)</em></span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "<span class='linethrough'>May 7, 2012</span>"); ?>
	<?php add_dateitem("Workshop Date", "August 17, 2012"); ?>
</ul>


<h2 class="hcls">Committees</h2>


<h3>Technical Program Chairs</h3>

<ul>
  <li>Dirk Kutscher, NEC Laboratories Europe &mdash;  Germany</li>
  <li>B&ouml;rje Ohlman, Ericsson &mdash; Sweden</li>
  <li>Ignacio Solis, PARC &mdash; USA</li>
</ul>


	<h3>Steering Committee</h3>

<ul>
  <li>Dirk Kutscher, NEC Laboratories Europe &mdash;  Germany</li>
  <li>Giacomo Morabito, University of Catania &mdash; Italy</li>
  <li>B&ouml;rje Ohlman, Ericsson &mdash; Sweden</li>
  <li>George C. Polyzos, AUEB &mdash; Greece</li>
  <li>Ignacio Solis, PARC &mdash; USA</li>
  <li>Lixia Zhang, UCLA &mdash; USA</li>
</ul>


<h3>Technical Program Committee</h3>

<ul>
  <li>Bengt Ahlgren, SICS</li>
  <li>Hitoshi Asaeda, Keio University</li>
  <li>Tohru Asami, The University of Tokyo</li>
  <li>Jun Bi, Tsinghua University</li>
  <li>Nicola Blefari-Melazzi, U Rome</li>
  <li>Giovanna Carofiglio, ALU</li>
  <li>Yanghee Choi, Seoul Nat. U</li>
  <li>Dave Clark, MIT</li>
  <li>Costas Courcoubetis, AUEB</li>
  <li>Andrea Detti, U Rome</li>
  <li>Stephen Farrell, Trinity College Dublin</li>
  <li>Volker Hilt, ALU</li>
  <li>Jussi Kangasharju, Helsinki University</li>
  <li>Holger Karl, Universitaet Paderborn</li>
  <li>Gunnar Karlsson, KTH</li>
  <li>Teemu Koponen, Nicira</li>
  <li>Anders Lindgren, SICS</li>
  <li>Daniel Massey, Colorado SU</li>
  <li>Christos Papadopoulos, Colorado SU</li>
  <li>George Pavlou, UCL</li>
  <li>Dave Oran, Cisco</li>
  <li>Joerg Ott, Aalto University</li>
  <li>Max Ott, NICTA</li>
  <li>Konstantinos Pentikousis, Huawei</li>
  <li>Jarno Rajahalme, NSN</li>
  <li>Thomas Schmidt, HAW Hamburg</li>
  <li>Scott Shenker, ICSI</li>
  <li>Karen Sollins, MIT</li>
  <li>Sasu Tarkoma, University of Helsinki</li>
  <li>Dirk Trossen, Cambridge Univ.</li>
  <li>Ryuji Wakikawa, Toyota ITC</li>
  <li>Lan Wang, U Memphis</li>
  <li>George Xylomenos, AUEB</li>
  <li>Tomohiko Yagyu, NEC</li>
  <li>Edmund Yeh, Yale University</li>
  <li>Beichuan Zhang, U Arizona</li>
</ul>


<?php
    include ("include/footer.php");
?>

