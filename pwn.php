<?php
        $page_title="Programmability of Wireless Networks";
        include("include/header.php");
?>
<h2 class="hcls">Programmability of Wireless Networks</h2>

<p>
<b>Presented by:
<a href="http://www.tti.unipa.it/~ilenia/informazioni.htm">Ilenia Tinnirello</a>,
<a href="http://netgroup.uniroma2.it/GiuseppeBianchi/biography.html">Giuseppe Bianchi</a>,
<a href="http://www.ing.unibs.it/~gringoli">Francesco Gringoli</a>,
<a href="mailto:xavier.perez-costa@neclab.eu">Xavier P&eacute;rez Costa</a>
</b>
</p>

<p>
Friday, August 17, 2012 (half day)<br>
Helsinki, Finland<br>
Room: <b>#21</b>
</p>

<h2 class="hcls">Tutorial Requirements</h2>
<p>
Attendants must bring their own laptops to connect to the WMP boards. A Java environment
is required to run the graphical tools for building the XFSMs.
</p>

<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("9:00-9:30", "Review of Programmability of Wireless Networks State of the Art"); ?>
		<?php
			tprog_add_item("", "", "
	<p>Importance of programmability of wireless networks for R&amp;D</p>
	<p>Related approaches</p>
	<p>Limitations of current State of the Art</p>
			", "");
		?>

		<?php tprog_add_session("9:30-10:00", "Wireless MAC Processor (WMP) Concept Overview"); ?>
		<?php
			tprog_add_item("", "", "
	<p>Architecture description</p>
	<p>Differences to state of the art</p>
	<p>New programmability potential</p>
			", "");
		?>

		<?php tprog_add_session("10:00-10:30", "Review of WMP Implementation and MAC Program Developing Tool"); ?>
		<?php
			tprog_add_item("", "", "
	<p>WMP Machine language</p>
	<p>Finite State Machine builder (XFSM)</p>
	<p>Programmability illustration examples: standard DCF and minor variations</p>
			", "");
		?>

		<?php tprog_add_session("10:30-11:00", "Coffee Break"); ?>

		<?php tprog_add_session("11:00-11:30", "Demonstration of WMP Concepts"); ?>
		<?php
			tprog_add_item("", "", "
	<p>Insight on a packet jammer</p>
	<p>Implementation of new MACs on commodity hardware</p>
	<p>Time-Division-Multiple-Access</p>
	<p>Multi-Channel MAC</p>
	<p>Piggybacking (e.g., for TCP speed up)</p>
			", "");
		?>

		<?php tprog_add_session("11:30-12:30", "Hands-on Experimentation by Attendees"); ?>
		<?php
			tprog_add_item("", "", "
	<p>Participants implement their own MAC</p>
	<p>Behaviors of designed MAC verified by tracing throughputs from the userspace</p>
	<p>More tests capturing and displaying signals with USRP hardware</p>
			", "");
		?>

		<?php tprog_add_session("12:30-14:00", "Lunch Break"); ?>
	</ul>

<h2 class="hcls">Motivation</h2>
<p>Wireless networks importance for the future Internet is raising at a fast pace
as mobile devices increasingly become its entry point. However, today
wireless networks are unable to rapidly adapt to evolving contexts and service
needs due to their rigid architectural design.
</p>
<p>
Programmability of wireless networks is a promising key solution that could
boost innovation and reduce the cost of future network upgrades. Operators,
manufacturers, network designers, emerging third-party solution developers,
and even spontaneous end users, would be able to easily and rapidly optimize
and upgrade the wireless network operation, quickly prototype and test their
new protocols, and adapt the wireless access operation to emerging scenarios
or service needs.
</p>
<p>
This tutorial will present, demonstrate and provide a hands-on experience on
the concept of <i>Wireless MAC Processors</i> (<i>WMP</i>) being developed at the FP7 European
project FLAVIA. WMPs are programmable devices which i) provides a set of stateless
Medium Access Control commands, and ii) embed a MAC protocol engine in charge
of executing a finite state machine able to exploit and compose the sequence
of commands forming a desired protocol.
</p>
<p>
Wireless MAC processor <i>commands</i> can be considered analogous to the instruction set of
an ordinary CPU. They are meant to implement elementary actions, namely MAC operations
such as transmit a frame, set timers, etc, which may be then executed in the
appropriate sequence and/or under the occurrence of specific events and conditions
mandated by a protocol logic. Based on the WMP, a <i>MAC protocol engine</i> can be defined
in charge of executing a user-developed software program implementing a desired MAC
protocol operation in the form of an extended finite state machine. Flexibility and
ease of programmability is thus a consequence of the clear architecture-level
decoupling made between what the device is able to do (the pre-installed MAC commands),
and what it is instructed - at run time - to do (the injected state machine).
</p>
<p>
The WMP approach planned to be presented and demonstrated in this tutorial represents a
major R&amp;D leap from related work in this area since, unlike other works which rely
on dedicated DSPs or programmable hardware platforms, we will experimentally prove:
i) the feasibility of the wireless MAC processor concept over ultra-cheap commodity
WLAN hardware cards (e.g., commercial Broadcom AirForce54G off-the-shelf chipset),
ii) the possibility of programming time-critical medium access operations and
event-triggered PHY configurations without knowing any detail about the internal
design of the hardware platform.
</p>
<p>
The MAC protocol Engine implementation developed in the European project FLAVIA will
be openly released to the research community around June, together with a graphical
tool for defining MAC state machines. Therefore, SIGCOMM 2012 would be a perfect
venue to explain, demonstrate and provide the basics to researchers interested
in exploiting these new programmability capabilities for their own R&amp;D activities.
</p>

<!--
<p>
Further information (and tools) will be made available soon, stay tuned!
</p>
<h2 style="text-align:center;">
<a href="http://www.ict-flavia.eu/wmp">http://www.ict-flavia.eu/wmp</a>
</h2>
-->


<?php
    include ("include/footer.php");
?>
