<?php
        $page_title="Workshop on Online Social Networks (WOSN)";
        include("include/header.php");
?>


<h2 class="hcls">Workshop on Online Social Networks (WOSN'12)</h2>

<p>
Friday, August 17, 2012<br>
Helsinki, Finland<br>
Room: <b>Hall B</b>
</p>
<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("8:30-8:50", "Welcome Message and Opening Remarks", "Balachander Krishnamurthy (Organizer), Ben Zhao &amp; Stefan Saroiu (PC Chairs)"); ?>

		<?php tprog_add_session("8:50-10:30", "Session 1: Share at Your Own Risk", "Krishna Gummadi (MPI-SWS)"); ?>

		<?php tprog_add_item("Poultry Markets: On the Underground Economy of Twitter Followers",
			"paper/wosn/p1.pdf",
			"Gianluca Stringhini, Manuel Egele, Christopher Kruegel, and Giovanni Vigna (UC Santa Barbara)",
			"Paper");
		?>

		<?php tprog_add_item("Big Friend is Watching You: Analyzing the Tracking Capabilities of Online Social Networks",
			"paper/wosn/p7.pdf",
			"Abdelberi Chaabane (INRIA), Mohamed Ali Kaafar (INRIA, NICTA), and Roksana Boreli (NICTA, UNSW)",
			"Paper");
		?>

		<?php tprog_add_item("A Workflow for Differentially-Private Graph Synthesis",
			"paper/wosn/p13.pdf",
			"Davide Proserpio and Sharon Goldberg (Boston University), and Frank McScherry (Microsoft Research)",
			"Paper");
		?>

		<?php tprog_add_item("Is More Always Merrier? A Deep Dive Into Online Social Footprints",
			"paper/wosn/p67.pdf",
			"Terence Chen (NICTA and UNSW), Mohamed Ali Kaafar (INRIA and NICTA), Arik Friedman (NICTA), and Roksana Boreli (NICTA, UNSW)",
			"Paper");
		?>

		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("11:00-12:30", "Session 2: Locked in A Long-Distance Relationship", "Sue Moon (KAIST)"); ?>

		<?php tprog_add_item("Far from the Eyes, Close on the Web: Impact of Geographic Distance on Online Social Interactions",
			"paper/wosn/p19.pdf",
			"Andreas Kaltenbrunner (Barcelona Media Foundation), Salvatore Scellato (University of Cambridge), Yana Volkovich and David Laniado (Barcelona Media Foundation), Dave Currie and Erik J. Jutemar (Tuenti), and Cecilia Mascolo (University of Cambridge)",
			"Paper");
		?>

		<?php tprog_add_item("Coarse-Grained Topology Estimation via Graph Sampling",
			"paper/wosn/p25.pdf",
			"Maciej Kurant, Minas Gjoka, Yan Wang, Zack W. Almquist, Carter T. Butts, and Athina Markopoulou (UC Irvine)",
			"Paper");
		?>

		<?php tprog_add_item("The Importance of Being Placefriends: Discovering Location-focused Online Communities",
			"paper/wosn/p31.pdf",
			"Chlo&euml; Brown, Vincenzo Nicosia, Salvatore Scellato, Anastasios Noulas, Cecilia Mascolo (University of Cambridge)",
			"Paper");
		?>


		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>


		<?php tprog_add_session("14:00-15:30", "Session 3: Do Your Servers Social Network?", "Walter Willinger (AT&amp;T Labs--Research)"); ?>

		<?php tprog_add_item("Shortest Paths in Less Than a Millisecond",
			"paper/wosn/p37.pdf",
			"Rachit Agarwal, Matthew Caesar, and P. Brighten Godfrey (UIUC), and Ben Y. Zhao (UC Santa Barbara)",
			"Paper");
		?>

		<?php tprog_add_item("Navigation Characteristics of Online Social Networks and Search Engines Users.",
			"paper/wosn/p43.pdf",
			"Christopher W Dunn and Minaxi Gupta (Indiana University), and Oliver Spatscheck (AT&amp;T Labs-Research)",
			"Paper");
		?>

		<?php tprog_add_item("Keeping Information Safe from Social Networking Apps",
			"paper/wosn/p49.pdf",
			"Bimal Viswanath, MPI-SWS, Emre Kiciman and Stefan Saroiu (Microsoft Research)",
			"Paper");
		?>


		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("16:00-16:50", "Session 4: Think Before You Post", "James Salter (GCHQ)"); ?>

		<?php tprog_add_item("Inferring Who-is-Who in the Twitter Social Network",
			"paper/wosn/p55.pdf",
			"Saptarshi Ghosh and Naveen Sharma (IIT Kharagpur), Fabricio Benevenuto (Federal University of Ouro Preto, Brazil), Niloy Ganguly, IIT Kharagpur, and Krishna P. Gummadi (MPI-SWS)",
			"Paper");
		?>

		<?php tprog_add_item("Why Watching Movie Tweets Won't Tell the Whole Story",
			"paper/wosn/p61.pdf",
			"Felix Ming Fai Wong, Soumya Sen, and Mung Chiang (Princeton University)",
			"Paper");
		?>


		<?php tprog_add_session("16:50-17:30", "Panel: Future of Social Networking Research", ""); ?>


	</ul>


<h2 class="hcls">Introduction</h2>

<p>
With nearly half the world's population with access to the Internet
being present on an Online Social Network, the field has infiltrated
most walks of life. A significant fraction of mind-share in the form
of applications, diverse access interfaces, and a large economic
ecosystem has developed around this field. Going past the simple
characterization and enumeration of properties, the networking
research community has shown significant interest in attacking various
problems associated with OSNs. WOSN'12 will bring together networking
researchers and practitioners to discuss the challenges and important
questions posed by emerging social applications. Of particular
interest are problems related to system architecture design, explosion
of new media traffic, and mobile access. WOSN'12 will facilitate
cross-disciplinary discussion of relevance to computer networking
involving new ideas and applications and experimental results. The
workshop solicits original papers on ongoing work as well as
position papers. All papers are limited to 6 pages (10 pt).
</p>


<a href="workshops/WOSN2012CFP.txt" rel="external" class="button" data-role="button"> Text version </a>

<h2 class="hcls">Topics</h2>

<p>Topics of interest include, but are not limited to:</p>
<ul>
<li>Implications of social networking on network design
<li>Network architecture design to support large scale social applications
<li>Search strategies in social networks
<li>Reputation and trust systems
<li>Anonymity and privacy
<li>Economic incentives for privacy
<li>Architecture and design of external OSN applications
<li>Decentralized (ad hoc) network applications and services
<li>Measurement and analysis of online communities
</ul>


<h2 class="hcls">Submission Instructions</h2>

<p>All submissions must be original work not under review at any other
venue. Submissions must be no greater than 6 pages in length and author
names and affiliations should be included in the submission. Submissions
must follow the formatting guidelines at <a href="http://conferences.sigcomm.org/sigcomm/2012/" rel="external">http://conferences.sigcomm.org/sigcomm/2012/</a>.
Papers should be submitted via the <a href="http://cyclops.cs.ucsb.edu/WOSN12" rel="external">submission site</a>.
</p>

<a href="mailto:wosn12-chairs@cs.ucsb.edu" class="button" data-role="button">Email the Organizers</a>


<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
	<?php add_dateitem("Submissions Due", "<span class='linethrough'>March 14, 2012</span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "<span class='linethrough'>April 20, 2012</span>"); ?>
	<?php add_dateitem("Camera Ready", "<span class='linethrough'>June 4, 2012</span>"); ?>
	<?php add_dateitem("Workshop Date", "August 17, 2012"); ?>
</ul>



<h2 class="hcls">Committees</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Program Committee Co-Chairs</li>
	<?php
		add_listitem("Balachander Krishnamurthy", "AT&amp;T Labs - Research", "http://www2.research.att.com/~bala/papers/");
		add_listitem("Stefan Saroiu", "Microsoft Research", "");
		add_listitem("Ben Zhao", "UC Santa Barbara", "");
	?>


	<li data-role="list-divider">Program Committee Members</li>
	<?php
		add_listitem("Alessandro Acquisti", "CMU", "");
		add_listitem("Virgilio Almeida", "UFMG, Brazil", "");
		add_listitem("Landon Cox", "Duke University", "");
		add_listitem("Yafei Dai", "Peking University, China", "");
		add_listitem("Josh Elman", "Greylock Partners", "");
		add_listitem("Lixin Gao", "Univ of Massachusetts, Amherst", "");
		add_listitem("Krishna Gummadi", "Max-Planck Institute for Software Systems", "");
		add_listitem("Pankaj Gupta", "Twitter Inc.", "");
		add_listitem("Emre Kiciman", "Microsoft Research", "");
		add_listitem("Yongdae Kim", "University Minnesota", "");
		add_listitem("Cecilia Mascolo", "University of Cambridge", "");
		add_listitem("Alan Mislove", "Northeastern University", "");
		add_listitem("Sue Moon", "KAIST, Korea", "");
		add_listitem("Jennifer Neville", "Purdue University", "");
		add_listitem("Eamonn O'Neill", "University of Bath, U.K.", "");
		add_listitem("Reza Rejaie", "Univ of Oregon", "");
		add_listitem("Keith Ross", "NYU-Polytechnic University", "");
		add_listitem("Alessandra Sala", "Bell Labs, Ireland", "");
		add_listitem("James Salter", "Government Communications HQ, UK", "");
		add_listitem("Walter Willinger", "AT&amp;T Labs - Researc", "");
	?>

</ul>


<?php
    include ("include/footer.php");
?>
