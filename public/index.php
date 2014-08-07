<?php

// Get Route
$route = substr($_SERVER['REQUEST_URI'], 1);

if (strpos($route,':') !== false) {
	// Assign Breakpoint
	$theme = explode('|', $route);
	$breakpoints = explode(',', $theme[0]);

	// Assign Breakpoint values
	foreach ($breakpoints as $data) {
		$breakpoint_values = explode(':', $data);
		$breakpoint_name = $breakpoint_values[0];
		$breakpoint_data = explode('-', $breakpoint_values[1]);

		// Assign Min and Max breakpoint
		$min = $breakpoint_data[0];
		$max = $breakpoint_data[1];

		// height or width?
		if (strtolower(substr($min, -1)) == "h") {
			$first_type = 'height';
			$min = substr($min, 0, -1);
		} else {
			$first_type = 'width';
		}

		$max_string = "";
		if ( $max ) {
			$second_type = strtolower(substr($max, -1)) == "h" ? 'height' : 'width';
			$max = substr($max, 0, -1);
			$max_string =  " and (max-{$second_type}: {$max}px)";
		}

		$output .= "\n@media (min-{$first_type}: {$min}px){$max_string}{\n";
		$output .= "	body:after{\n";
		$output .= "		content: \"$breakpoint_name\";\n";
		$output .= "	}\n";
		$output .= "}\n";
	}

	// Return CSS
	$themes = array(
		'default' => '
	background: #a12347;
	color: #fff;
	font-family: "Helvetica Nueu", Helvetica, Arial;
	font-size: 22px;
	font-weight: bold;
	text-transform: uppercase;
	padding: 5px 10px;
	border-bottom-left-radius: 3px;
		',
		'blue' => '
	background: #2347a1;
	color: #fff;
	font-family: "Helvetica Nueu", Helvetica, Arial;
	font-size: 22px;
	font-weight: bold;
	text-transform: uppercase;
	padding: 5px 10px;
	border-bottom-left-radius: 3px;
		'
	);

	$theme_name = $theme[1];
	if ($theme_name && key_exists($theme_name, $themes)) {
		$theme = $themes[$theme_name];
	} else {
		$theme = $themes['default'];
	}

	header("Content-Type: text/css", true);
	echo "
body:after {
	box-sizing: border-box;
	position: fixed;
	right: 0;
	text-align: center;
	top: 0;
	z-index: 99;
	$theme
}
$output
";
} else {
	include 'home.php';
}