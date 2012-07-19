<?php
        $page_title="Programming Broadband Wireless with Sora";
        include("include/header.php");
?>


<h2 class="hcls">Programming Broadband Wireless with Sora</h2>

<p><b>Presented by:</b> Kun Tan, Jiansong Zhang (Wireless and Networking Group, MSR Asia) and
Paul Wang (Innovative Engineering Group, MSR Asia)</p>

<p>
Monday, August 13, 2012 (full day)<br>
Helsinki, Finland<br>
Room: <b>#21</b>
</p>

<h2 class="hcls">Tutorial Requirements</h2>
<p>
Attendees will utilize a Windows-based PC equipped with Sora hardware. A basic understanding of Windows programming and Windows Driver Kit (WDK) is expected.
Knowledge on wireless communication/OFDM is useful but not required.
Further, since PCs prepared in the tutorial is limited (and may be shared for online experiments), <em>each attendee is expected to bring his/her own Windows laptop</em> for offline programing and exercises.
The laptop should have an Intel CPU with a Windows operating system (XP/Win7) or a Windows system running in a virtual machine.
The latest Sora SDK should be installed. You can find the latest version <a href="http://research.microsoft.com/en-us/downloads/ca9a93a1-2a38-4e3d-b87c-b7e8ddc46eae/">here</a>.
More background information on the Sora Platform can be found on <a href="http://research.microsoft.com/en-us/projects/sora/">MSRA site</a> or <a href="http://social.microsoft.com/Forums/is/sora/threads">Sora forum</a>.
</p>
<p>
Due to the facility constraints, the number of attendees for the tutorial is limited to <em>20</em>.
</p>

<a class="button" data-role="button" href="mailto:sigcomm2012-gen-chairs@acm.org">Email the Organizers</a>


<h2 class="hcls">Technical Program</h2>

	<ul data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-content-theme="d" class="tprog">
		<?php tprog_add_session("9:00-9:30", "Introduction and Sora basis", ""); ?>

		<?php
			tprog_add_item("", "", "
			<p>Sora architecture</p>
			<p>Sora usage</p>
			", "");
		?>


		<?php tprog_add_session("9:30-10:30", " Programming Sora I - API/Vector1/Brick programming model", ""); ?>

		<?php
			tprog_add_item("", "", "
			<p>Sora software architecture</p>
			<p>The Brick programming model</p>
			<p>Victor1 SIMD library</p>
			<p>Debug using DbgPlot</p>
			", "");
		?>


		<?php tprog_add_session("10:30-11:00", "Coffee Break"); ?>


		<?php tprog_add_session("11:00-12:30", "Programming Sora II - implementing an OFDM communication system", ""); ?>

		<?php
			tprog_add_item("", "", "
			<p>Introduction of OFDM communication</p>
			<p>Walk-through of Sora broadband OFDM sample</p>
			<p>Demonstration of Sora</p>
			", "");
		?>


		<?php tprog_add_session("12:30-14:00", "Lunch Break"); ?>


		<?php tprog_add_session("14:00-15:30", "Sora lab I - system configuration, useful tools, spectrum analysis", ""); ?>

		<?php
			tprog_add_item("", "", "
			<p>Sora hardware configuration and tuning</p>
			<p>Spectrum analysis using Sora</p>
			", "");
		?>


		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>


		<?php tprog_add_session("16:00-17:30", "Sora lab II - build a complete communication system: PHY and MAC", ""); ?>

		<?php
			tprog_add_item("", "", "
			<p>A simple communication system: physical layer</p>
			<p>A complete communication system: MAC and networking</p>
			", "");
		?>


	</ul>


<h2 class="hcls">Motivation</h2>

<p>
Wireless networking is ubiquitous and has become an essential part of the global Internet. Evidently, the general networking community is increasingly interested in wireless research, especially in broadband wireless communication and networking. More and more research works are crossing into the lower layer wireless primitives, instead of only higher layers (MAC and above) on existing standards (notably WiFi).
</p>
<p>
To facilitate the experiment and evaluation of new research ideas, Microsoft Research Asia has developed a high-speed software radio platform, called Sora. Fully utilizing the state-of-the-art multi-core CPU, Sora combines the performance and fidelity of hardware SDR platforms with the programmability and flexibility of general-purpose processor (GPP) SDR platforms.
Sora is highly capable to implement and experiment state-of-the-art broadband wireless technologies, like WiFi and LTE.
</p>
<p>
This full-day tutorial will be split into two parts. In the morning session, we will focus on the Sora basic, architecture, programming model, and useful tools. We will also present an introduction to OFDM and MIMO communication.
In the afternoon, we will use the tools discussed in the morning session to program on Sora platform and rapidly develop a broadband wireless communication system.
</p>


<h2 class="hcls">Outline</h2>
<ul>
<li>Introduction to Sora</li>
<ul><li>Sora architecture</li>
    <ul>
    <li>Hardware: Radio Control Board (RCB) and RF frontends</li>
    <li>Software: Sora SDK; Kernel drivers; Testing and configuration
    </ul>
    <li>Sora usage</li>
    <ul>
    <li>Basic operations</li>
    <li>Useful tools (dut/demod11/umxsdr/debugplot/etc.)</li>
    </ul>
</ul>
<li>Programming Sora</li>
<ul><li>Sora software architecture</li>
    <ul><li>Sora components</li>
        <li>Kernel mode and User-mode(UMX) API</li>
        <li>Reflection</li>
    </ul>
    <li>The Brick programming model</li>
    <ul><li>Brick module</li>
        <ul><li>Basic concept</li>
            <li>Interfaces and events</li>
            <li>Facade and local context</li>
            <li>Parameterized Brick</li>
            <li>Example Bricks</li>
        </ul>

        <li>Processing graph</li>
            <ul><li>Connecting Bricks</li>
                <li>Graph context</li>
                <li>Multi-threading</li>
                <li>Example graph</li>
            </ul>
        <li>Exercise: Hello Brick program</li>
    </ul>
    <li>Victor1 SIMD library</li>
    <ul><li>Overview</li>
        <li>Vector data types</li>
        <li>Vector operations</li>
        <li>Rep utility</li>
        <li>Exercise: Hello Vector1 program</li>
    </ul>
    <li>Debug using DbgPlot</li>
</ul>
<li>Introduction of OFDM communication</li>
<ul><li>Fundamentals of OFDM</li>
    <li>Synchronization</li>
    <li>Channel estimation, equalization and tracking</li>
    <li>MIMO-OFDM</li>
</ul>
<li>Walk-through of Sora broadband OFDM sample</li>
<ul><li>Key algorithms and their implementations</li>
    <li>Processing graph</li>
</ul>
<li>Demonstration of Sora</li>
<li>Lab experiments and exercises</li>
<ul><li>Sora hardware configuration and tuning</li>
    <li>Spectrum analysis using Sora</li>
    <li>A simple communication system: physical layer</li>
    <li>A complete communication system: MAC and networking</li>
</ul>
</ul>


<h2 class="hcls">About the Presenters</h2>
<h3>Kun Tan</h3>
    <p>Kun Tan is a Lead Researcher at Microsoft Research Asia. He leads the development of the Sora Software Radio system. His research interests include transport protocols,
    congestion control, delay-tolerant networking, and wireless networks and systems. Previously, he has developed the Compound TCP, which has been implemented and deployed in latest Windows OS.
   Dr. Tan won the best paper award in NSDI 2009, and also won best demo awards in NSDI 2009 and Sigcomm 2010.
   He is an associate editor of IEEE Transaction of Mobile Computing.
   He is also an adjunct professor of the department of Electronic Engineering of HUST, China.
</p>
<p>
Dr. Tan received the B.E., M.E. and Ph.D. degree in Computer Science and Engineering from Tsinghua University, Beijing, China, in 1997, 1999, and 2002 respectively. He is a member of IEEE and ACM.
</p>

<h3>Jiansong Zhang</h3>
<p> Jiansong Zhang is an Associate Researcher at Microsoft Research Asia. He joined MSRA in July 2006, immediately after he received his Master degree from Tsinghua University. Before that, he obtained his Bachelor degree also from Tsinghua University in 2004. During the years in MSRA, he devoted most of his time to Software Radio (Sora project) and Wireless system design related research. He has published several papers in top-tier
conference like Sigcomm, Mobicom, NSDI, Infocom as primary author or co-author. From September of 2011 to present, he has started to pursue a PhD degree in the CSE department of Hong Kong University of Science and Technology (HKUST) in a joint program between MSRA and HKUST.</p>

<h3>Paul Wang</h3>
<p>Paul Wang is a Research Software Development Engineer at Microsoft Research Asia. He received his Bachelor degree in Department of Engineering and System Science, National Tsing Hua University, Taiwan, in 1999, and the Master degree in Department of Computer Science and Information Engineering, National Taiwan University, Taiwan, in 2010. His research interests include operating system and programming languages</p>



<?php
    include ("include/footer.php");
?>
