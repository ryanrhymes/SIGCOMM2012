<?php
        $page_title="Mobile Cloud Computing (MCC)";
        include("include/header.php");
?>


<h2 class="hcls">Mobile Cloud Computing (MCC)</h2>

<p>
Friday, August 17, 2012<br>
Helsinki, Finland<br>
Rooms: <b>#22-24</b>
</p>
<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">

		<?php tprog_add_session("8:30-8:45", "Welcoming Remarks", ""); ?>

		<?php tprog_add_item("",
			"",
			"Mario Gerla and Dijiang Huang",
			"");
		?>


		<?php tprog_add_session("8:45-9:30", "Session 1: Mobile Cloud Architecture I", "Mario Gerla"); ?>

		<?php tprog_add_item("On Cloud-Centric Network Architecture for Multi-Dimensional Mobility",
			"paper/mcc/p1.pdf",
			"K. Kim, S. Lee, P. Congdon",
			"Paper");
		?>

		<?php tprog_add_item("SCAMPI: Service platform for soCial Aware Mobile and Pervasive computing",
			"paper/mcc/p7.pdf",
			"M. Pitk&auml;nen, A. Passarella, S. Giordano, F. Legendre, T. Spyropoulos, J. Ott, T. K&auml;rkk&auml;inen, M. Conti, D. Puccinelli, M. May, N. Hedge, K. Hummel, S. Trifunovic",
			"Paper");
		?>


		<?php tprog_add_session("9:30-10:30", "Keynote", "Mario Gerla"); ?>


		<?php tprog_add_item("NyMoTe: Personal Mobile Cloud",
			"",
			"<p>Jon Crowcroft (Cambridge University, UK)</p>
			<p>In this keynote, a personal mobile cloud called NyMoTe is presented. There are several levels of this system: a small footprint cloud OS called Mirage is established; signposts support the mobile devices to connect to each other; a set of services including a decentralized store and approaches to distribute Applications.</p>",
			"Keynote");
		?>


		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("11:00-12:30", "Session 1: Mobile Cloud Architecture II", "Yevgeni Koucheryavy"); ?>

		<?php tprog_add_item("Scalability of a Mobile Cloud Management System",
			"paper/mcc/p17.pdf",
			"R. Bifulco, M. Brunner, R. Canonico, P. Hesselmeyer, F. Mir",
			"Paper");
		?>

		<?php tprog_add_item("Computing in Cirrus Clouds: The Challenge of Intermittent Connectivity",
			"paper/mcc/p23.pdf",
			"C. Shi, M. Ammar, E. Zegura, M. Naik",
			"Paper");
		?>

		<?php tprog_add_item("SNARF: A Social Networking-inspired Accelerator Remoting Framework",
			"paper/mcc/p29.pdf",
			"H. Eom, P. Juste, R. Figueiredo, O. Tickoo, R. Illikkal, R. Iyer",
			"Paper");
		?>

		<?php tprog_add_item("Characterization of the Impact of Resource Availability on Opportunistic Computing",
			"paper/mcc/p35.pdf",
			"A. Ferrari, D. Puccinelli, S. Giordano",
			"Paper");
		?>


		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>


		<?php tprog_add_session("14:00-15:30", "Panel: Mobile Cloud Computing: Open the Pandora's Box", ""); ?>

		<?php tprog_add_item("",
			"",
			"<p>Mobile Cloud Computing (MCC) research has attracted more research efforts in recent years in both industry and academia. An increasing demand for highly scalable, timely and efficient resource management, content delivery, and mobile sensing has motivated the development of MCC architectures that focus on mobility management, mobile service composition, resource offloading, and mobile device-assistant sensing in various MCC application domains. The MCC research emerges as a key paradigm, receiving increasing attention and departing from the traditional pure mobile computing and sensor networking models.</p>
			<p>This panel of distinguished researchers from both academia and industry will try to establish the state-of-the-art in MCC and pose key open questions and future research directions in the area.</p>
			<p>The panel participants: </p>
			<p>
				Fan Bai, General Motors Research &amp; Development, USA<br />
				Kyu-Han Kim, Hewlett-Packard Laboratories, USA<br />
				Gunnar Karlsson,  Kungliga Tekniska h&ouml;gskolan, Sweden<br />
				J&ouml;rg Ott, Aalto University, Finland<br />
				Yevgeni Koucheryavy, Tampere University of Technology, Finland<br />
			</p>",
			"Panel");
		?>


		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("16:00-17:45", "Session 2: Mobile Cloud Sensing", "Mario Di Francesco"); ?>

		<?php tprog_add_item("A Cloud-Assisted Design for Autonomous Driving",
			"paper/mcc/p41.pdf",
			"S. Kumar, S. Gollakota, D. Katabi",
			"Paper");
		?>

		<?php tprog_add_item("Fog Computing and Its Role in the Internet of Things",
			"paper/mcc/p13.pdf",
			"F. Bonomi, S. Addepalli, R. Milito, J. Zhu",
			"Paper");
		?>

		<?php tprog_add_item("The Case for Cloud-Enabled Mobile Sensing Services",
			"paper/mcc/p53.pdf",
			"S. Sen, A. Misra, R. Balan, L. Lim",
			"Paper");
		?>

		<?php tprog_add_item("An Integrated Cloud-based Framework for Mobile Phone Sensing",
			"paper/mcc/p47.pdf",
			"R. Fakoor, M. Raj, A. Nazi, M. Di Francesco, S. K. Das",
			"Paper");
		?>

		<?php tprog_add_item("Energy-Aware Keyword Search on Mobile Phones",
			"paper/mcc/p59.pdf",
			"W. Rao, K. Zhao, E. Lagerspetz, P. Hui, S. Tarkoma",
			"Paper");
		?>



	</ul>



<h2 class="hcls">Introduction</h2>

<p>
Today the Internet Web Service is the main way we access any kind of information from fixed or mobile terminals. Some of the information is stored in the Internet Cloud, where computing, communication, and storage services are main services provided for Internet users. In a non-distant future many of our queries will be beyond current Internet scope and will be about the people, the physical environments that surround us, and virtual environments that we will be involved. Having witnessed the phenomenal burst of research in cloud computing, Mobile Cloud Computing (MCC) is to extend cloud computing functions, services and results to the world of future mobile applications. MCC will address issues that current Internet Clouds or Mobile Computing Technologies alone cannot effectively or efficiently address.
</p>

<p>
The MCC workshop is intended to bring together researchers, developers, and practitioners in current mobile computing and cloud computing from academia, industry, and service providers, to share ideas, experiences, and practical implementations related to new MCC technologies and applications. Both position and working-in-progress papers are encouraged. Workshop participants will discuss emerging and future trends in research and application that integrate the cloud computing paradigm into mobile devices, mobile applications, security and privacy, and mobile services, evaluating the impact of mobile applications on cloud computing techniques. To that end, papers are solicited from all MCC related areas involving the interactions or integrations of mobile techniques and cloud computing solutions, including, but not limited to the following topics.
</p>

<a class="button" data-role="button" href="workshops/mcc_cfp.pdf" rel="external">PDF version</a>
<a class="button" data-role="button" href="workshops/mcc_cfp.doc" rel="external">Text version</a>



<h2 class="hcls">Topics</h2>

<ul>
  <li>MCC service architecture and designs</li>
  <li>MCC data and storage architecture</li>
  <li>MCC performance evaluation and measurement of MCC services and applications</li>
  <li>MCC software development platform and enabled new applications</li>
  <li>MCC service platform and Quality of Experience (QoE) studies</li>
  <li>MCC content/context-based sensing, routing, and networking</li>
  <li>MCC enabled individual and collective sensing and applications (e.g.,
  in the application domains such as environment, energy, transportation, smart
  grid, healthcare, etc.)</li>
  <li>MCC security and privacy protection related research issues</li>
  <li>MCC data and information management for MCC service providers and end
  users</li>
  <li>MCC supported social media and networks, virtual community and virtual
  humans</li>
  <li>MCC supported multimedia services, advertisements, games, and entertainments</li>
  <li>Virtualization and programmable infrastructure for MCC</li>
</ul>

<h2 class="hcls">Submission Instructions</h2>

<p>All submissions must be original work not under review at any other workshop,
  conference, or journal. The workshop will accept papers describing completed
  work as well as work-in-progress, so long as the promise of the approach is
  demonstrated. Radical ideas, potentially of a controversial nature, are strongly
  encouraged. Submissions must be no greater than 6 pages in length and must be
  a pdf file. Reviews will be single-blind: authors name and affiliation should
  be included in the submission. Submissions must follow the formatting guidelines
  at <a href="http://conferences.sigcomm.org/sigcomm/2012/" >http://conferences.sigcomm.org/sigcomm/2012/</a>. </p>

<p>
Papers should be submitted via the <a href="http://www.sheridanprinting.com/typedept/mcc.htm" rel="external" >submission site</a>. Papers must include the author name and affiliation for single-blind peer reviewing by the program committee. Authors of accepted papers are expected to present their papers at the workshop.
</p>

<a href="mailto:dijiang@asu.edu,gerla@cs.ucla.edu" class="button" data-role="button">Email the Organizers</a>


<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
	<?php add_dateitem("Paper Registration", "<span class='linethrough'>March 19, 2012; extension: <em>April 2,2012</em></span>"); ?>
	<?php add_dateitem("Submissions Due", "<span class='linethrough'>March 26, 2012; extension: <em>April 11,2012</em></span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "<span class='linethrough'>May 7, 2012</span>"); ?>
	<?php add_dateitem("Camera Ready", "Jun 17, 2012"); ?>
	<?php add_dateitem("Workshop Date", "August 17, 2012"); ?>
</ul>


<h2 class="hcls">Program Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Program Committee Co-Chairs</li>
	<?php
		add_listitem("Mario Gerla", "University of California Los Angeles", "http://www.cs.ucla.edu/people/faculty/mario-gerla");
		add_listitem("Dijiang Huang", "Arizona State University", "http://snac.eas.asu.edu/");
	?>


	<li data-role="list-divider">Program Committee Members</li>
	<?php
		add_listitem("Nath Badri", "Rutgers, USA", "");
		add_listitem("Paolo Bellavista", "DEIS University of Bologna, Italy", "");
		add_listitem("Thomas Michael Bohnert", "ZHAW, Switzerland", "");
		add_listitem("Samia Bouzefrane", "CNAM, France", "");
		add_listitem("Andrew T. Campbell", "Rutgers, USA", "");
		add_listitem("Marco Conti", "IIT-CNR, Italy", "");
		add_listitem("Christophe Diot", "Technicolor, France", "");
		add_listitem("Falko Dressler", "University of Innsbruck, Austria", "");
		add_listitem("Serge Fdida", "Paris VI, France", "");
		add_listitem("Jeffrey R. Foerster", "Intel, USA", "");
		add_listitem("Silvia Giordano", "University of Lugano, Switzerland", "");
		add_listitem("Robert A. Greenes", "ASU, USA", "");
		add_listitem("Myong Kang", "Naval Research Lab, USA", "");
		add_listitem("Andreas Kassler", "Karlstad University, Sweden", "");
		add_listitem("Robin Kravets", "UIUC, USA", "");
		add_listitem("Jeongkeun Lee", "HP Lab, USA", "");
		add_listitem("G&eacute;rard Le Lann", "INRIA Paris, France", "");
		add_listitem("Liviu Lftode", "Rutgers, USA", "");
		add_listitem("Huan Liu", "ASU, USA", "");
		add_listitem("Songwu Lu", "UCLA, USA", "");
		add_listitem("Gregorio Martinez", "University of Murcia, Spain", "");
		add_listitem("Peng Ning", "NCSU, USA", "");
		add_listitem("Giovanni Pau", "UCLA, USA", "");
		add_listitem("Guy Pujolle", "Paris VI, France", "");
		add_listitem("Marco Roccetti", "University of Bologna, Italy", "");
		add_listitem("James C. Ramming", "Intel, USA", "");
		add_listitem("Kishor S. Trivedi", "Duke, USA", "");
		add_listitem("Cliff Wang", "Army Research Office, USA", "");
		add_listitem("Lixia Zhang", "UCLA, USA", "");
		add_listitem("Haojin Zhu", "Shanghai JiaoTong University, China", "");
	?>

</ul>


<?php
    include ("include/footer.php");
?>
