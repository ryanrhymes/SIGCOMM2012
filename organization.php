<?php
        $page_title="Organization Committee";
        include("include/header.php");
?>

<h2 class="hcls">Organization Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chairs</li>
	<?php
		add_listitem("Lars Eggert", "NetApp, Germany", "http://eggert.org/");
		add_listitem("J&ouml;rg Ott", "Aalto University, Finland", "http://www.netlab.tkk.fi/~jo/");
	?>

	<li data-role="list-divider">TPC Chairs</li>
	<?php
		add_listitem("Venkat Padmanabhan", "Microsoft Research, India", "http://research.microsoft.com/en-us/um/people/padmanab/");
		add_listitem("George Varghese", "UCSD, USA", "http://cseweb.ucsd.edu/~varghese/");
	?>
	
	<li data-role="list-divider">Local Arrangements Chairs</li>
	<?php
		add_listitem("Jussi Kangasharju", "University of Helsinki, Finland", "http://www.cs.helsinki.fi/u/jakangas/");
		add_listitem("Jukka Manner", "Aalto University, Finland", "http://www.netlab.tkk.fi/~jmanner/");
	?>
		
	<li data-role="list-divider">Registration Chair and Treasurer</li>
	<?php
		add_listitem("Joe Touch", "USC/ISI, USA", "http://www.isi.edu/touch/");
	?>
	
	<li data-role="list-divider">Workshops Chairs</li>
	<?php
		add_listitem("Dina Katabi", "MIT, USA", "http://nms.csail.mit.edu/~dina/");
		add_listitem("Jitendra Padhye", "Microsoft Research, USA", "http://research.microsoft.com/en-us/um/people/padhye/");
	?>
	
	<li data-role="list-divider">Poster and Demo Chairs</li>
	<?php
		add_listitem("Kevin Almeroth", "University of California, Santa Barbara, USA", "http://www.cs.ucsb.edu/~almeroth/");
		add_listitem("Colin Perkins", "University of Glasgow, UK", "http://csperkins.org/");
	?>
	
	<li data-role="list-divider">Publication Chair</li>
	<?php
		add_listitem("Andrea Passarella", "CNR IIT, Italy", "http://cnd.iit.cnr.it/andrea/");
	?>
	
	<li data-role="list-divider">Publicity Chair</li>
	<?php
		add_listitem("Ryuji Wakikawa", "Toyota ITC, USA/Japan", "http://www.wakikawa.net/ryuji.html");
	?>
	
	<li data-role="list-divider">Travel Grant Chairs</li>
	<?php
		add_listitem("Marcelo Bagnulo", "Universidad Carlos III de Madrid, Spain", "http://www.it.uc3m.es/marcelo/");
		add_listitem("Polly Huang", "National Taiwan University, Taiwan", "http://cc.ee.ntu.edu.tw/~phuang/");
		add_listitem("Sharon Goldberg", "Boston University, USA", "http://www.cs.bu.edu/~goldbe/");
	?>
	
	<li data-role="list-divider">Web Chair</li>
	<?php
		add_listitem("Liang Wang", "University of Helsinki, Finland", "http://www.cs.helsinki.fi/u/lxwang/");
	?>
	
	<li data-role="list-divider">Conference Coordinator</li>
	<?php
		add_listitem("Jaudelice de Oliveira", "Drexel University, USA", "http://www.ece.drexel.edu/deOliveira/");
	?>
	
</ul>

<?php
    include ("include/footer.php");
?>