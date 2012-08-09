<!DOCTYPE HTML>
<html>

<head>
	<meta charset="iso-8859-1">
	<style type="text/css">
	html, body, div {
		margin: 0;
		padding: 0;
		border: 0;
	}
	.twtr-widget {
		border: 1px solid #BBB;
		-moz-box-shadow:0 1px 0 rgba(255,255,255,.3);
		-webkit-box-shadow:0 1px 0 rgba(255,255,255,.3);
		box-shadow:0 1px 0 rgba(255,255,255,.3);
		-webkit-border-radius: 9px;
		-moz-border-radius: 9px;
		border-radius: 9px;
	}
	</style>
</head>

<body>
			<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'search',
			  search: '#sigcomm12 OR #sigcomm OR @sigcomm12 OR from:sigcomm12 OR sigcomm -from:sigcomm since:2012-1-1 lang:en',
			  interval: 10000,
			  title: '',
			  subject: '#sigcomm12',
			  width: '99%',
			  height: 300,
			  theme: {
				shell: {
				  background: '#6ec8e8',
				  color: '#ffffff'
				},
				tweets: {
				  background: '#ffffff',
				  color: '#000000',
				  links: '#6ec8e8'
				}
			  },
			  features: {
				scrollbar: true,
				loop: false,
				live: true,
				behavior: 'all'
			  }
			}).render().start();
			</script>
</body>
</html>
