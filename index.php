<?php
        $page_title="Home";
        include("include/header.php");
?>

<h2 class="hcls">Welcome to Helsinki</h2>

<p>
The organizing committee is delighted to invite you to ACM SIGCOMM 2012, to be held  in Helsinki, Finland between August 13 and August 17, 2012!
</p>
<p>
SIGCOMM is the flagship annual conference of the ACM Special Interest Group on Data Communication (SIGCOMM) on the applications, technologies, architectures, and protocols for computer communication.
</p>

<a href="sigcomm-support.pdf" rel="external" data-role="button" class="button">Supporter Information</a>
<a href="mailto:sigcomm2012-gen-chairs@acm.org" data-role="button" class="button">Contact the Organizers</a>

<h2 class="hcls">News</h2>
<ul data-role="listview" data-inset="true" data-theme="c" class="newstbl">
<?php
        include("include/news.html");
?>

</ul>


<h2 class="hcls">Important Dates</h2>
<?php
    include ("include/dates.html");
?>

<?php
    include ("include/footer.php");
?>