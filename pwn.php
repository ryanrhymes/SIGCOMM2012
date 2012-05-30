<?php
        $page_title="Programmability of Wireless Networks";
        include("include/header.php");
?>
<h2 class="hcls">Programmability of Wireless Networks</h2>
<p><b>Helsinki, Finland (Friday, August 17, 2012)</b></p>
<p>
<b>Presented by:
<a href="http://www.tti.unipa.it/~ilenia/informazioni.htm">Ilenia Tinnirello</a>,
<a href="http://netgroup.uniroma2.it/GiuseppeBianchi/biography.html">Giuseppe Bianchi</a>,
<a href="http://www.ing.unibs.it/~gringoli">Francesco Gringoli</a>,
<a href="mailto:xavier.perez-costa@neclab.eu">Xavier P&eacute;rez Costa</a>
</b>
</p>
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

<h2 class="hcls">Tutorial Content</h2>
<ol type="I">
<li>Review of Programmability of Wireless Networks State of the Art
	<ol type="a">
	<li>Importance of programmability of wireless networks for R&amp;D</li>
	<li>Related approaches</li>
	<li>Limitations of current State of the Art</li>
	</ol>
</li>
<li>Wireless MAC Processor (WMP) Concept Overview
	<ol type="a">
	<li>Architecture description</li>
	<li>Differences to state of the art</li>
	<li>New programmability potential</li>
	</ol>
</li>
<li>Review of the WMP implementation and MAC program developing tool
	<ol type="a">
	<li>WMP Machine language</li>
	<li>Finite State Machine builder (XFSM)</li>
	<li>Programmability illustration examples: standard DCF and minor variations</li>
	</ol>
</li>
<li>Demonstration of WMP concepts
	<ol type="a">
	<li>Insight on a packet jammer</li>
	<li>Implementation of new MACs on commodity hardware</li>
	<li>Time-Division-Multiple-Access</li>
	<li>Multi-Channel MAC</li>
	<li>Piggybacking (e.g., for TCP speed up)</li>
	</ol>
</li>
<li>Hands-on experimentation by attendants
	<ol type="a">
	<li>Participants implement their own mac</li>
	<li>Behaviors of designed MAC verified by tracing throughputs from the userspace</li>
	<li>More tests capturing and displying signals with USRP hardware</li>
	</ol>
</li>
</ol>


<h2 class="hcls">Tutorial Requirements</h2>
<p>
Attendants must carry their own laptops to connect to the WMP boards. A Java environment
is required to run the graphical tools for building the XFSMs.
</p>
<?php
    include ("include/footer.php");
?>