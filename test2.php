<?php
        $page_title="Test Page";
        include("include/header.php");
?>

<input type="text" id="searcher" /><br />

<div id="sresult">
<ul data-role="listview" data-inset="true" data-theme="c" class="datetbl" id="srlist">
</ul>
</div>

<p>
Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.Test.
</p>

<div id="logobar" style="background-color:#E0E0E0; width:100%; height:auto; position:absolute; position:fixed; left:0; bottom:0;
     -moz-box-shadow:inset 0 0 10px #000000;
     -webkit-box-shadow:inset 0 0 10px #000000;
     box-shadow:inset 0 0 10px #000000;
">
</div>

<h2 class="testmedia">This is a test page</h2>

<div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '012399979458248589958:lpem1r75tsw', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.enableSearchResultsOnly(); 
    customSearchControl.draw('cse', options);
    function parseParamsFromUrl() {
      var params = {};
      var parts = window.location.search.substr(1).split('\x26');
      for (var i = 0; i < parts.length; i++) {
        var keyValuePair = parts[i].split('=');
        var key = decodeURIComponent(keyValuePair[0]);
        params[key] = keyValuePair[1] ?
            decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
            keyValuePair[1];
      }
      return params;
    }

    var urlParams = parseParamsFromUrl();
    var queryParamName = "q";
    if (urlParams[queryParamName]) {
      customSearchControl.execute(urlParams[queryParamName]);
    }
  }, true);
</script>

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
$('#searcher').keyup(function() {
	qkw = $('#searcher').val();
	
	$.ajax({
		type: "POST",
		url: "ajax_search.php",
		data: { qkw: qkw},
		context: document.body
	}).done(function(data) { 
		$("#srlist").html(data);
	});
});
</script>

</html>