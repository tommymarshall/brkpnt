<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BrkPnt.com | Show Your Breakpoint</title>
	<meta name="google-site-verification" content="i_aokg9P8wMNQtJ-cd5_DiuboYTfr92ZBOqSvstFTOQ">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css" rel="stylesheet">
	<link href="/styles.css" rel="stylesheet">

	<!--
		HAI! FYI, the stylesheet below is an
		example of how BrkPnt works. Such easy.
	-->
	<link href="//brkpnt.com/mobile:0,tablet:768,desktop:1200" rel="stylesheet">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53965300-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="check-it-out">
		<p>
			<span>Resize window</span>
			<span>to see change!</span>
			<i>&#10548;</i>
		</p>
	</div>

	<div class="container">
		<div class="header">
			<h1>
				BrkPnt<span>.com</span>
				<em>Show Your Breakpoint</em>
			</h1>
		</div>

		<div class="jumbotron">
			<p class="lead">
				Whether you're working on buildout or doing QA, it's tough to know the breakpoint you're viewing a page at.<br>Add this customizable snippet and stop wondering.
			</p>
			<code>
				&lt;link href="//brkpnt.com/mobile:0,tablet:501,desktop:1024" rel="stylesheet"&gt;
			</code>
		</div>
		<h3>How does it work?</h3>
		<hr>
		<p>The above link tag styles the <strong>:after</strong> pseudo-element of the body with breakpoints you define in the URL. It then changes the <strong>content</strong> of that pseudo-element with the name of the specified breakpoint. Done.</p>
		<p style="text-align: center">
			<a class="btn btn-success" role="button" href="http://viget.com/extend/check-your-breakpoint-using-this-simple-css-snippet" target="_blank">Read more on how it works</a>
		</p>
		<p>Look to the top-right of your browsering window, then try resizing it and watch the content swap out for the breakpoint defined.</p>
		<h3>Other examples</h3>
		<hr>
		<p>Specify <strong>EM's</strong> if you want (PX default).</p>
		<code>
			<a href="http://codepen.io/tommymarshall/pen/nGqet?editors=100" target="_blank">View Live Demo</a>
			&lt;link href="//brkpnt.com/small:10em,large:50em" rel="stylesheet"&gt;
		</code>
		<p>Use <strong>max</strong> or <strong>min</strong> heights and widths when appended to a value. Comebine with <strong>EM's</strong> or <strong>PX's</strong> to really get specific.</p>
		<ul>
			<li>H - max-height</li>
			<li>h - min-height</li>
			<li>W - max-width</li>
			<li>w - min-width (default)</li>
		</ul>
		<code>
			<a href="http://codepen.io/tommymarshall/pen/syhoj?editors=100" target="_blank">View Live Demo</a>
			&lt;link href="//brkpnt.com/short:10emh,tall:40emh" rel="stylesheet"&gt;
		</code>
		<p>Add extra query selectors using a dash.</p>
		<code>
			<a href="http://codepen.io/tommymarshall/pen/wzvtg?editors=100" target="_blank">View Live Demo</a>
			&lt;link href="//brkpnt.com/short:0-600H,wide:800-1200W" rel="stylesheet"&gt;
		</code>
		<p>Change the color theme from default (Red) to Blue with <strong>|blue</strong></p>
		<code>
			<a href="http://codepen.io/tommymarshall/pen/FrAzh?editors=100" target="_blank">View Live Demo</a>
			&lt;link href="//brkpnt.com/mobile:0,notebook:800|blue" rel="stylesheet"&gt;
		</code>
		<h3>Credits</h3>
		<hr>
		<p>Created by <a href="http://twitter.com/tommyjmarshall">Tommy Marshall</a> for <a href="http://viget.com/" target="_blank">Viget</a> as a <a href="http://pointlesscorp.com">Pointless Experiment</a>.</p>

		<div class="footer">
			BrkPnt.com &copy; 2014
		</div>

	</div>

</body>
</html>