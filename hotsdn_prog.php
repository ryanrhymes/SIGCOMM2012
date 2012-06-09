<?php
        $page_title="Hot Topics in Software Defined Networking (HotSDN)";
        include("include/header.php");
?>

<h2 class="hcls">Hot Topics in Software Defined Networking (HotSDN)</h2>

<p>
<b>Helsinki, Finland (Monday, August 13, 2012)</b>
</p>

<p>Please refer <a href="hotsdn.php" class="lnkcls">here</a> for detailed information.</p>


<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("8:45-9:00 Introductory Remarks"); ?>
		
		<?php tprog_add_item("", "", "", ""); ?>
		
		
		<?php tprog_add_session("9:00-10:30 Session 1: Controller and Switch Design"); ?>
		
		<?php
			tprog_add_item("Logically Centralized? State Distribution Tradeoffs in Software Defined Networks",
			"", 
			"Authors: Dan Levin (TU Berlin / Telekom Innovation Laboratories), Andreas Wundsam (ICSI / UC Berkeley), Brandon Heller and Nikhil Handigol (Stanford University), and Anja Feldmann (TU Berlin / Telekom Innovation Laboratories)", 
			"");
		?>

		<?php
			tprog_add_item("The Controller Placement Problem",
			"", 
			"Authors: Brandon Heller (Stanford University), Rob Sherwood (Big Switch Networks), and Nick McKeown (Stanford University)", 
			"");
		?>
		
		<?php
			tprog_add_item("Revisiting Routing Control Platforms with the Eyes and Muscles of Software- Defined Networking",
			"", 
			"Authors: Christian Esteve Rothenberg, Marcelo Ribeiro Nascimento, and Marcos Rogerio Salvador (CPqD - R&amp;D Center for Telecommunications), Carlos N. A. Correa and Sidney C. de Lucena (Federal University of the Rio de Janeiro State (UniRio)), and Robert Raszuk (NTT MCL)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Kandoo: A Framework for Efficient and Scalable Offloading of Control Application", 
			"", 
			"Authors: Soheil Hassas Yeganeh and Yashar Ganjali (University of Toronto)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Hey, You Darned Counters! Get Off my ASIC!", 
			"", 
			"Authors: Jeffrey C. Mogul (HP Labs) and Paul Congdon (HP Labs/UC Davis)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Using CPU as a Traffic Co-processing Unit in Commodity Switches", 
			"", 
			"Authors: Guohan Lu (Microsoft Research Asia), Rui Miao (Tsinghua University), and Yongqiang Xiong and Chuanxiong Guo (Microsoft Research Asia)", 
			"");
		?>
		
		
		<?php tprog_add_session("11:00-12:30 Session 2: Programming and Debugging"); ?>
		
		<?php 
			tprog_add_item("Hierarchical Policies for Software Defined Networks", 
			"", 
			"Authors: Andrew D. Ferguson, Arjun Guha, Chen Liang, Rodrigo Fonseca, and Shriram Krishnamurthi (Brown University)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Procera: A Language for High-Level Reactive Network Control", 
			"", 
			"Authors: Andreas Voellmy (Yale University) and Hyojoon Kim and Nick Feamster (Georgia Tech)", 
			"");
		?>

		<?php 
			tprog_add_item("VeriFlow: Verifying Network-Wide Invariants in Real Time", 
			"", 
			"Authors: Ahmed Khurshid, Wenxuan Zhou, Matthew Caesar, and P. Brighten Godfrey (University of Illinois at Urbana-Champaign)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Where is the debugger for my Software-Defined Network?", 
			"", 
			"Authors: Brandon Heller, Nikhil Handigol, Vimalkumar Jeyakumar, Nick McKeown, and David Mazi&amp;#232;res (Stanford University)", 
			"");
		?>
		
		<?php 
			tprog_add_item("A Safe, Efficient Update Protocol for OpenFlow Networks", 
			"", 
			"Authors: Rick McGeer (HP Labs)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Walk the Line: Consistent Network Updates with Bandwidth Guarantees", 
			"", 
			"Authors: Soudeh Ghorbani and Matthew Caesar (UIUC)", 
			"");
		?>
		
		
		<?php tprog_add_session("2:00-3:30 Session 3: Support for Network Services"); ?>
		
		<?php 
			tprog_add_item("Outsourcing Network Functionality", 
			"", 
			"Authors: Glen Gibb, Hongyi Zeng, and Nick McKeown (Stanford University)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Splendid Isolation: A Slice Abstraction for Software-Defined Networks", 
			"", 
			"Authors: Stephen Gutz and Alec Story (Cornell), Cole Schlesinger (Princeton), and Nate Foster (Cornell)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Fabric: A Retrospective on Evolving SDN", 
			"", 
			"Authors: Martin Casado and Teemu Koponen (Nicira), Scott Shenker (ICSI &amp; UCB), and Amin Tootoonchian (University of Toronto &amp; ICSI)", 
			"");
		?>
		
		<?php 
			tprog_add_item("A Management Method of IP Multicast in Overlay Networks using OpenFlow", 
			"", 
			"Authors: Yukihiro Nakagawa, Kazuki Hyoudou, and Takeshi Shimizu (Fujitsu Laboratories Ltd.)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Dynamic Graph Query Primitives for SDN-based Cloud Network Management", 
			"", 
			"Authors: Ramya Raghavendra, Jorge Lobo, and Kang-won Lee (IBM Research)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Programming Your Network at Run-time for Big Data Applications", 
			"", 
			"Authors: Guohui Wang (IBM T.J. Watson Research Center), T. S. Eugene Ng (Rice University), and Anees Shaikh (IBM T.J. Watson Research Center)", 
			"");
		?>
		
		
		<?php tprog_add_session("4:00-5:00 Session 4: Wireless and Security"); ?>
		
		<?php 
			tprog_add_item("OpenRadio: A Programmable Wireless Dataplane", 
			"", 
			"Authors: Manu Bansal, Jeffrey Mehlman, Sachin Katti, and Philip Levis (Stanford University)", 
			"");
		?>
		
		<?php 
			tprog_add_item("Towards Programmable Enterprise WLANs With Odin", 
			"", 
			"Authors: Lalith Suresh (Instituto Superior Tecnico), Julius Schulz-Zander, Ruben Merz, and Anja Feldmann (Telekom Innovation Laboratories/TU Berlin), and Teresa Vazao (INESC-ID/Instituto Superior Tecnico)", 
			"");
		?>
		
		<?php 
			tprog_add_item("A Security Enforcement Kernel for OpenFlow Networks", 
			"", 
			"Authors: Phillip Porras (SRI International), Seungwon Shin (Texas A&amp;M University), Vinod Yegneswaran, Martin Fong, and Mabry Tyson (SRI International), and Guofei Gu (Texas A&amp;M University)", 
			"");
		?>
		
		<?php 
			tprog_add_item("OpenFlow Random Host Mutation: Transparent Moving Target Defense using Software Defined Networking", 
			"", 
			"Authors: Jafar Haadi Jafarian, Ehab Al-Shaer, and Qi Duan (UNC Charlotte)", 
			"");
		?>


		<?php tprog_add_session("5:00-6:00 Panel"); ?>
		
		<?php tprog_add_item("", "", "", ""); ?>

</ul>

<!--

<h2 class="hcls">Technical Program</h2>

<p>You can download all VISA papers as a single <a href="" rel="external">zip</a> file.</p>

<table class="wstbl">
        <tr class="cthm1a"><td>09:00 - 09:05</td><td> <b>Welcome</b> </td></tr>
        
        <tr class="cthm1b"><td>09:05 - 10:00</td><td> <b>Keynote Presentation</b> </td></tr>
        
        <tr class="cthm1a"><td>10:00 - 10:30</td><td> <b>Architecture</b> (Chair: )</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>

        <tr class="cthm1a"><td>10:30 - 11:00</td><td> <b>Coffee Break</b> </td></tr>
        
        <tr class="cthm1a"><td>11:00 - 12:30</td><td> <b>Architecture (continued)</b> (Chair: )</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>
        
        <tr class="cthm1a"><td>12:30 - 14:00</td><td> <b>Lunch</b> </td></tr>
        
        <tr class="cthm1a"><td>14:00 - 15:30</td><td> <b>Another Topic</b> (Chair: )</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>
        
        <tr class="cthm1a"><td>15:30 - 16:00</td><td> <b>Coffee Break</b> </td></tr>
        
        <tr class="cthm1a"><td>16:00 - 17:30</td><td> <b>Another Topic</b> (Chair: )</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>
        <tr class="cthm1b"><td> </td><td> PUT PAPER HERE, AND ALSO THE AUTHORS</td></tr>
</table>

-->

<!--
<p> <a href="" rel="external">PDF version</a> <a href="" rel="external">Text version</a> </p>
-->


<?php
    include ("include/footer.php");
?>