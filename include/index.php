<?php
        include("include/header.php");
?>
<p>
<p>
The organizing committee is delighted to invite you to ACM SIGCOMM 2011, to be held  in Toronto, Ontario, Canada between August 15 and August 19, 2011. 
SIGCOMM is the flagship annual conference of the ACM Special Interest Group on Data Communication (SIGCOMM) on the applications, technologies, architectures, and protocols for computer communication.
</p>

<!-- <p class="alert">Note: Registration is close to the limit we can accommodate.
We advise you to <a href="registration.php">register online</a> to ensure that you will be able to attend.</p> -->

<br>

<h2>News</h2>
<ul>
<?php
        read_lines("include/news.html",8);
?>
</ul>

<br>

<h2>Important dates</h2>
<?php
    include ("include/dates.html");
?>

<br><br>

<!-- 
<h2>Conference Partner</h2>

<br><br>

<a href="http://www.mit.gov.in/"><img src="images/DIT.jpg" alt="DIT"/></a>

<br><br>
-->
<h2>Committee</h2>
<?php
    include ("include/committee.php");
?>

<?php
    include ("include/footer.php");
?>

