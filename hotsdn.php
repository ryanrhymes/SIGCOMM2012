<?php
        $page_title="Hot Topics in Software Defined Networking (HotSDN)";
        include("include/header.php");
?>

<h2 class="hcls">Hot Topics in Software Defined Networking (HotSDN)</h2>

<p>
<b>Helsinki, Finland (August 13, 2012)</b>
</p>

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

<h2 class="hcls">Call for Papers</h2>

<!--
<p> <a href="" rel="external">PDF version</a> <a href="" rel="external">Text version</a> </p>
-->

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

We solicit submissions on topics including, but not limited to, the
following:

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

<h2 class="hcls">Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="c" class="datetbl">
	<?php add_dateitem("Submissions due", "<strike>April 6, 2012</strike> <span style=\"color:red;\">(extended to April 10, 2012, 11:59pm GMT)</span>"); ?>
	<?php add_dateitem("Notification of Acceptance", "May 25, 2012"); ?>
	<?php add_dateitem("Camera Ready", "June 15, 2012"); ?>
	<?php add_dateitem("Workshop Date", "<b>August 13, 2012</b>"); ?>
</ul>

<p>
Please email the <a href="mailto:hotsdn2012-chairs@lists.noise.gatech.edu" class="lnkcls">program chairs</a> with any questions you may have.</p>

<h2 class="hcls">Organizers</h2>

<h3>Program Committee Co-Chairs</h3>
Nick Feamster (Georgia Tech)<br/>
Jennifer Rexford (Princeton)<br/>

<h3>Program Committee Members</h3>
Katerina Argyraki (EPFL)<br/>
Jun Bi (Tsinghua University)<br/>
Marco Canini (EPFL)<br/>
Martin Casado (Nicira)<br/>
Anja Feldmann (T-Labs/TU Berlin)<br/>
Nate Foster (Cornell)<br/>
Yashar Ganjali (U. Toronto)<br/>
Sachin Katti (Stanford)<br/>
Teemu Koponen (Nicira)<br/>
Jeff Mogul (HP Labs)<br/>
Richard Mortier (University of Nottingham)<br/>
Nick McKeown (Stanford)<br/>
Rob Sherwood (BigSwitch)<br/>
Amin Vahdat (UCSD/Google)<br/>
Andreas Voellmy (Yale)<br/>
Dave Ward (Cisco)<p/>

<h3>Steering Committee</h3>
Bruce Davie (Nicira)<br/>
Nick Feamster (Georgia Tech)<br/>
Guru Parulkar (Stanford)<br/>
Jennifer Rexford (Princeton)<br/>

<?php
    include ("include/footer.php");
?>