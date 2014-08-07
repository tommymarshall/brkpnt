<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BrkPnt.com | Showing Your Breakpoint</title>
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="header">
			<h1>
				BrkPnt<span>.com</span>
				<em>Showing Your Breakpoint</em>
			</h1>
		</div>

		<div class="jumbotron">
			<p class="lead">
				Whether you're working on buildout or doing QA, it's tough to know the breakpoint you're viewing a page at. Add this customizable snippet to your page and stop wondering.
			</p>
			<code>
				&lt;link href="//brkpnt.com/mobile:0,tablet:501,desktop:1024" rel="stylesheet"&gt;
			</code>
		</div>
		<h3>How does it work?</h3>
		<hr>
		<p>The above link tag styles the <em>:after</em> pseudo-element of the body with breakpoints you define in the URL. It then changes the <em>content</em> of that pseudo-element with the name of the specified breakpoint. Done.</p>
		<p style="text-align: center">
			<a class="btn btn-success" role="button" href="http://viget.com/extend/check-your-breakpoint-using-this-simple-css-snippet" target="_blank">Read more on how it works</a>
		</p>
		<h3>Other examples</h3>
		<hr>
		<p>Specify min and max widths using a dash.</p>
		<code>
			&lt;link href="//brkpnt.com/mobile:0-500,tablet:501-800" rel="stylesheet"&gt;
		</code>
		<p>Specify heights by adding <strong>h</strong>, widths are the default.</p>
		<code>
			&lt;link href="//brkpnt.com/mobile:0h,tablet:501h,cinema:980h" rel="stylesheet"&gt;
		</code>
		<p>Change the color theme.</p>
		<code>
			<span>// Blue theme</span><br>
			&lt;link href="//brkpnt.com/mobile:0,notebook:800|blue" rel="stylesheet"&gt;
			<br><br><span>// Red theme</span><br>
			&lt;link href="//brkpnt.com/mobile:0,notebook:800|red" rel="stylesheet"&gt;
		</code>
		<h3>Credits</h3>
		<hr>
		<p>Created by <a href="http://twitter.com/tommyjmarshall">Tommy Marshall</a> as a <a href="http://viget.com/" target="_blank">Viget</a> <a href="http://pointlesscorp.com">Pointless Stunt</a>.</p>

		<div class="footer">
			BrkPnt.com &copy; 2014
		</div>

	</div>

</body>
</html>