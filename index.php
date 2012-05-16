<?php
        $page_title="Home";
        include("include/header.php");
?>

<h2 class="hcls">Welcome to Helsinki</h2>

<p>
The organizing committee is delighted to invite you to ACM SIGCOMM 2012, to be held  in Helsinki, Finland between August 13 and August 17, 2012. 
SIGCOMM is the flagship annual conference of the ACM Special Interest Group on Data Communication (SIGCOMM) on the applications, technologies, architectures, and protocols for computer communication.
</p>


<h2 class="hcls">News</h2>

<ul data-role="listview" data-inset="true" data-theme="c" class="newstbl">

<?php
        read_lines("include/news.html", 100);
?>

</ul>


<h2 class="hcls">Important Dates</h2>

<?php
    include ("include/dates.html");
?>



<h2 class="hcls">Note to Prospective Supporters</h2>

<p>If you would like to support SIGCOMM 2012, please review <a class="lnkcls" href="sigcomm-support.pdf" rel="external">this information</a>. Please email the <a  class="lnkcls" href="mailto:sigcomm2012-gen-chairs@acm.org">general chairs</a> with any questions you may have.</p>


<?php
    include ("include/footer.php");
?>