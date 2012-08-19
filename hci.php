<?php
        $page_title="Romancing the User: An Introduction to Human Computer Interaction
Techniques for Networking Researchers";
        include("include/header.php");
?>


<h2 class="hcls">Romancing the User: An Introduction to Human Computer Interaction
Techniques for Networking Researchers</h2>

<p>
<b>Presented by:</b> <a href="http://www.mrl.nott.ac.uk/people/101-dr-alan-chamberlain.html" rel="external">Alan Chamberlain</a>, University of Nottingham and <a href="http://www.cs.nott.ac.uk/~tar/">Tom Rodden</a>, University of Nottingham </p>

<p>
Friday, August 17, 2012 (half day)<br>
Helsinki, Finland<br>
Room: <b>#15</b>
</p>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("9:00-9:45", "Techniques for Understanding Users"); ?>
		<?php
			tprog_add_item("", "", "
<p>	<b>Interviews:</b> Basics of creating and using interview guides and the types of data best gathered through this technique. </p>
<p>	<b>Questionnaires:</b> Developing and deploying questionnaires. </p>
<p>	<b>Fieldwork:</b> Recruiting users, sample sizes, compensation, and incentives. </p>
<p>	<b>Probes:</b> Eliciting different kinds of user feedback, creating and using probes.</p>
<p>	<b>Observations: </b> Conducting observations, managing field notes and interpreting results.</p>
<p>	<b>Quantitative logs:</b> Using logging to understand user behavior and supplement qualitative techniques.</p>
			", "");
		?>

		<?php tprog_add_session("9:45-10:30", "Design and Development"); ?>
		<?php
			tprog_add_item("", "", "
<p>	<b>User-centered Development:</b> Basics of designing with the user in mind and end goals.</p>
<p>	<b>Lo-Fidelity and Hi-Fidelity Development:</b> Creating system mockups vs. functioning prototypes.</p>
			", "");
		?>

		<?php tprog_add_session("10:30-11:00", "Coffee Break"); ?>

		<?php tprog_add_session("11:00-11:45", "Evaluation Techniques"); ?>
		<?php
			tprog_add_item("", "", "
<p>	<b>Summative &amp; Formative Evaluation:</b> Goals of each approach, and interpreting the results. </p>
<p>	<b>In the lab:</b> Basics of experimental design, heuristic evaluation, and usability testing. </p>
<p>	<b>In the field:</b> Gaining access to research sites, field study design, and timeframes.</p>
<p>	<b>Analysis:</b> Making sense of data collected, basics of qualitative and quantitative analysis techniques.</p>
			", "");
		?>

		<?php tprog_add_session("11:45-12:30", "Ethics consent and privacy"); ?>
		<?php
			tprog_add_item("", "", "
<p>	<b>Ethical Foundations and History:</b> Key principles of ethics, how they have emerged, and why they are important. </p>
<p>	<b>Consent and user approval:</b> Basics of an Institutional Review Board (IRB) process, what constitutes human subjects research, and how to gain consent and user approval.</p>
<p>	<b>Privacy of data:</b> Protecting user data, anonymization and publishing results.</p>
<p>	<b>Legal restrictions:</b> Legal issues surrounding different types of user research. </p>
<p>	<b>Responsibilities of researchers:</b> Ethical conduct and setting expectations for users.</p>
<p>	<b>International differences and perspectives:</b> How ethics process and legal issues vary and what are the various ethical and legal issues in undertaking research in different countries.</p>
			", "");
		?>

		<?php tprog_add_session("12:30-14:00", "Lunch Break"); ?>
	</ul>


<h2 class="hcls">Motivation</h2>

<p>As the Internet has grown to underpin many aspects of modern life, the challenges in understanding the network and developing new network mechanisms have changed. Recent predictions by Cisco suggest that there will be 15 Billion network devices by 2015 and more than 3 billion Internet users.  Today, the network has become interwoven with human activities to the extent that broadband access has already become critical for many countries. For example, Finland made broadband access a legal right in July 2010 and has vowed to connect everyone to a 100Mbps connection by 2015.
</p>
<p>
As the network is made available to an increasingly diverse set of users each exploiting the infrastructure for a broad set of activities, the need to understand what people do with the network and how they do it becomes critical. Equally important, network systems not only need to be presented to a diverse set of non-expert users, they need to be understood and often managed by users who are not skilled network operators. The need to combine human and systems understanding of the network has already been recognized by the SIGCOMM community with the establishment of dedicated workshops such as Homenets (2010, 2011) and W-MUST (2011, 2012).
</p>
<p>
As well as highlighting the importance of understanding users and engaging in interdisciplinary projects, these workshops also recognize the critical need for SIGCOMM researchers to increase their understanding of Human Computer Interaction (HCI). This tutorial responds to this need by providing a synopsis of HCI targeted towards the networking community. We will provide an overview of techniques for understanding users and for designing and evaluating systems that are more user-focused. A particular emphasis will be on understanding how these approaches might be used within the context of networking, what the limits and scope of each approach are, and how researchers might select appropriate techniques for their research question.
.</p>

<h2 class="hcls">Tutorial Format</h2>

<p>Tutorial attendees will gain an appreciation of four critical features of HCI of importance to SIGCOMM researchers:

<ul>
<li>	The techniques they could use to understand the needs of users. We will introduce a range of techniques for gathering user needs including how to create research instruments such as interview guides and questionnaires, when to use these techniques, and how to interpret the results.</li>
<li>	How they might engage users in design and development. We will consider various methods for designing systems that focus on the user and the importance of iterative approaches to development ranging from mockups to fully functioning prototypes.</li>
<li>	How they might evaluate systems involving users. This topic will cover both formative and summative evaluation and cover the relative strengths and merits of a range of techniques including both quantitative and qualitative approaches.  </li>
<li>	How to undertake user centered research. The tutorial will cover the pragmatics of conducting human-centered research with particular focus on ethics and privacy issues and the responsibilities of the researchers. </li>
</ul>
<p>
Throughout the tutorial, we will use examples most relevant to the SIGCOMM community and participants will be provided with opportunities for hands-on engagement with the lecture material. No background knowledge is required.
</p>

<a class="button" data-role="button" href="mailto:marshini@cc.gatech.edu,tar@cs.nott.ac.uk">Email the Organizers</a>



<h2 class="hcls">About the Presenters</h2>

<p>Both presenters have an HCI background and have worked closely with members of the SIGCOMM community on projects exploring user issues in networking systems.</p>

<h3>Alan Chamberlain</h3>
<p><a href="http://www.mrl.nott.ac.uk/people/101-dr-alan-chamberlain.html" rel="external">Dr Alan Chamberlain</a> is currently a Senior Research Fellow in the Mixed Reality Lab at Nottingham. He has published numerous papers on many aspects of Human Computer Interaction and has successfully obtained funding for research projects. He is currently interested in the development of systems in real world settings (Research in the Wild) . His main research interests and other detailed information can be found on <a href="http://www.mrl.nott.ac.uk/people/101-dr-alan-chamberlain.html" rel="external">here</a>. </p>

<h3>Tom Rodden</h3>
<p><a href="http://www.cs.nott.ac.uk/~tar/">Tom Rodden</a> is Professor of Interactive Systems at the Mixed Reality Laboratory (MRL) at the University of Nottingham.  His research focuses on the development of interactive technologies to support users within the real world. This is a multi-disciplinary endeavor bringing together researchers in behavioral and social sciences and those involved in systems engineering, network infrastructures and interactive systems design. He has published widely in the areas of Computer Supported Cooperative Work (CSCW), HCI, and Ubiquitous computing. He has acted as research papers chair for all of the major international conferences in these areas and was elected as member of the ACM CHI Academy in 2009. He directed the Equator IRC from 2001-2006, a multi-site research endeavor in the area of Ubiquitous Computing involving 8 UK universities. He currently holds an EPSRC Senior Research Fellowship and is deputy director of the RCUK Horizon digital economy hub at Nottingham. He has previously given HCI tutorials at Pervasive Computing, CHI, and UK e-Science conferences.
</p>

<?php
    include ("include/footer.php");
?>
