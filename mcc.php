<?php
        $page_title="Mobile Cloud Computing (MCC)";
        include("include/header.php");
?>


<h2 class="hcls">Mobile Cloud Computing (MCC)</h2>

<p>
<b>Helsinki, Finland (Friday, August 17, 2012)</b>
</p>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		
		<?php tprog_add_session("8:45-9:00", "Welcoming Remarks", ""); ?>
		
		<?php tprog_add_item("", 
			"", 
			"Mario Gerla and Dijiang Huang", 
			"");
		?>
			
		<?php tprog_add_session("9:00-10:00", "Keynote", "Mario Gerla"); ?>
		
		<?php tprog_add_item("NyMoTe: Personal Mobile Cloud", 
			"", 
			"<p>Jon Crowcroft (Cambridge University, UK)</p>
			<p>In this keynote, a personal mobile cloud called NyMoTe is presented. There are several levels of this system: a small footprint cloud OS called Mirage is established; signposts support the mobile devices to connect to each other; a set of services including a decentralized store and approaches to distribute Applications.</p>", 
			"Keynote");
		?>
		
		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>
				
		<?php tprog_add_session("11:00-12:30", "Session 1: Mobile Cloud Architecture", ""); ?>
		
		<?php tprog_add_item("On Cloud-Centric Network Architecture for Multi-Dimensional Mobility", 
			"", 
			"K. Kim, S. Lee, P. Congdon", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("SCAMPI: Service Platform for Social Aware Mobile and Pervasive Computing", 
			"", 
			"M. Pitk&auml;nen, A. Passarella, S. Giordano, F. Legendre, T. Spyropoulos, J. Ott, T. K&auml;rkk&auml;inen, M. Conti, D. Puccinelli, M. May, N. Hedge, K. Hummel, S. Trifunovic", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Fog Computing and Its Role in the Internet of Things", 
			"", 
			"F. Bonomi, S. Addepalli, R. Milito, J. Zhu", 
			"Paper"); 
		?>
		
		<?php tprog_add_item("Characterization of the Impact of Resource Availability on Opportunistic Computing", 
			"", 
			"A. Ferrari, D. Puccinelli, S. Giordano", 
			"Paper"); 
		?>
		
		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>

		<?php tprog_add_session("14:00-15:30", "Panel: Mobile Cloud Computing: Open the Pandora's Box", ""); ?>

		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>

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

<ul data-role="listview" data-inset="true" data-theme="c" class="datetbl">
	<?php add_dateitem("Paper Registration", "<span class='linethrough'>March 19, 2012; extension: <em>April 2,2012</em></span>"); ?>
	<?php add_dateitem("Submissions Due", "<span class='linethrough'>March 26, 2012; extension: <em>April 11,2012</em></span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "<span class='linethrough'>May 7, 2012</span>"); ?>
	<?php add_dateitem("Camera Ready", "Jun 17, 2012"); ?>
	<?php add_dateitem("Workshop Date", "August 17, 2012"); ?>
</ul>


<h2 class="hcls">Program Committee</h2>

<h3>TPC Co-Chairs </h3>

<ul>
<li>  Mario Gerla, University of California Los Angeles </li>
<li>  Dijiang Huang, Arizona State University</li>
</ul>
  
  
<h3>Committee Members</h3>
<ul>
<li>  Nath Badri (Rutgers, USA)</li>
<li>  Paolo Bellavista (DEIS University of Bologna, Italy)</li>
<li>  Thomas Michael Bohnert (ZHAW, Switzerland)</li>
<li>  Samia Bouzefrane (CNAM, France)</li>
<li>  Andrew T. Campbell (Rutgers, USA)</li>
<li>  Marco Conti (IIT-CNR, Italy)</li>
<li>  Christophe Diot (Technicolor, France)</li>
<li>  Falko Dressler (University of Innsbruck, Austria)</li>
<li>  Serge Fdida (Paris VI, France)</li>
<li>  Jeffrey R. Foerster (Intel, USA)</li>
<li>  Silvia Giordano (University of Lugano, Switzerland)</li>
<li>  Robert A. Greenes (ASU, USA)</li>
<li>  Myong Kang (Naval Research Lab, USA)</li>
<li>  Andreas Kassler (Karlstad University, Sweden)</li>
<li>  Robin Kravets (UIUC, USA)</li>
<li>  Jeongkeun Lee (HP Lab, USA)</li>
<li>  G&eacute;rard Le Lann (INRIA Paris, France)</li>
<li>  Liviu Lftode (Rutgers, USA)</li>
<li>  Huan Liu (ASU, USA)</li>
<li>  Songwu Lu (UCLA, USA)</li>
<li>  Gregorio Martinez (University of Murcia, Spain)</li>
<li>  Peng Ning (NCSU, USA)</li>
<li>  Giovanni Pau (UCLA, USA)</li>
<li>  Guy Pujolle (Paris VI, France)</li>
<li>  Marco Roccetti (University of Bologna, Italy)</li>
<li>  James C. Ramming (Intel, USA)</li>
<li>  Kishor S. Trivedi (Duke, USA)</li>
<li>  Cliff Wang (Army Research Office, USA)</li>
<li>  Lixia Zhang (UCLA, USA)</li>
<li>  Haojin Zhu (Shanghai JiaoTong University, China)</li>
</ul>

<?php
    include ("include/footer.php");
?>
