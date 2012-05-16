<?php
        $page_title="Test Page";
        include("include/header.php");
?>

<script type="text/javascript">
function show_searchbar() {
	if( $("#cse").css("display") == "none" )
	{
		$("#cse").css("display", "block");
	}
	else
	{
		$("#cse").css("display", "none");
	}
}
</script>

<a id="ssbar" href="" onclick="show_searchbar();">SHOW</a>
  
<div id="cse" style="display:none;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.MINIMALIST});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '012399979458248589958:lpem1r75tsw', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.SMALL_RESULTSET);
    customSearchControl.draw('cse');
    $("#gsc-i-id1").keyup(function () {
      customSearchControl.execute($("#gsc-i-id1").val());
    });
  }, true);
</script>
</script>


<h2 class="testmedia">This is a test page</h2>

<p>
Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.
</p>


<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'sigcomm OR sigcom',
  interval: 30000,
  title: 'ACM SIGCOMM 2012',
  subject: 'Helsinki, Finland',
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#8ec1da',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>



<div id="logobar" style="background-color: lightgrey; height: 100px; width: 100%; position: absolute; position: fixed; left:0; bottom:0;">

</div>

<h2>Test.</h2>
<?php
        read_lines("include/news.html",8);
?>


<h2>Test.</h2>

<?php
    include ("include/dates.html");
?>

<h2>Note to Prospective Supporters</h2>

<p>If you would like to support SIGCOMM 2012, please review <a href="sigcomm-support.pdf" rel="external">this information</a>. Please email the <a href="mailto:sigcomm12-gen-chairs@fit.nokia.com">general chairs</a> with any questions you may have.</p>



	</div><!-- /ui-block-b -->
	
	</div><!-- /content -->

	<?php
    	include ("include/supporters.php");
	?>

	<div style="height:5em;"></div>

</div><!-- /page -->

</body>

<script type="text/javascript" src="js/fx.js"></script>

<script type="text/javascript">
	//scrw = $(window).width()
	//$("#mylogo1").html(scrw)
	//var ufoMove = {type: 'right', from:-scrw, to:200, step: 1, delay:20}
	//$fx("#mylogo1").fxAdd(ufoMove).fxRun(null, -1);
</script>

</html>