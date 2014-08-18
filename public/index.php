<?php

class MediaQueryBuilder {

	protected $_request;

	protected $_parameters;

	protected $_breakpoints = [];

	// Weird indentation to account for output
	protected $_themes = [
		'default' => '
	/* Red theme */
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
	/* Blue theme */
	background: #2347a1;
	color: #fff;
	font-family: "Helvetica Nueu", Helvetica, Arial;
	font-size: 22px;
	font-weight: bold;
	text-transform: uppercase;
	padding: 5px 10px;
	border-bottom-left-radius: 3px;
		'
	];

	public function __construct($request)
	{

		$this->_request    = $this->cleanRequest($request);
		$this->_parameters = $this->getBreakpointParameters($request);
		$this->_themeName  = $this->getThemeName($request);
		$this->build();
	}

	public function cleanRequest($request)
	{
		return trim(substr($request, strrpos($request, '/')));
	}

	public function build()
	{
		// Assign Breakpoint values

		foreach ($this->_parameters as $data) {
			$output = "@media ";

			$breakpoint_definition = explode(':', $data);
			$breakpoint_name       = $breakpoint_definition[0];
			$breakpoint_parameters = explode('-', $breakpoint_definition[1]);

			foreach( $breakpoint_parameters as $parameter ) {
				switch (substr($parameter, -1)) {
					case 'H':
						$parameter = substr($parameter, 0, -1);
						$property = 'max-height';
					break;

					case 'W':
						$parameter = substr($parameter, 0, -1);
						$property = 'max-width';
					break;

					case 'h':
						$parameter = substr($parameter, 0, -1);
						$property = 'min-height';
					break;

					case 'w':
						$parameter = substr($parameter, 0, -1);
						$property = 'min-width';
					break;

					default:
						$property = 'min-width';
					break;
				}

				$type = strtolower(substr($parameter, -2));

				if ($type == 'px' || $type == 'em') {
					$value = $parameter;
				} elseif (is_numeric($parameter)) {
					$value = $parameter . 'px';
				} else {
					$value = $parameter;
				}

				$output .= "({$property}: {$value}) and ";
			}

			$output = substr($output, 0, strlen($output) - 5);
			$output .= "{\n";
			$output .= "	body:after{\n";
			$output .= "		content: \"$breakpoint_name\";\n";
			$output .= "	}\n";
			$output .= "}\n";
			$this->_breakpoints[] = $output;
		}
	}

	public function getBreakpointParameters()
	{
		$parts = explode('|', $this->_request);

		return explode(',', $parts[0]);
	}

	public function getThemeName($request)
	{
		$parts = explode('|', $this->_request);

		return $parts[1];
	}

	public function getTheme()
	{
		$theme_name = $this->_themeName;
		if ($theme_name && key_exists($theme_name, $this->_themes)) {
			$theme = $this->_themes[$theme_name];
		} else {
			$theme = $this->_themes['default'];
		}

		return $theme;
	}

	public function output()
	{
		$output = implode('', $this->_breakpoints);

		echo "body:after {
	box-sizing: border-box;
	position: fixed;
	right: 0;
	text-align: center;
	top: 0;
	z-index: 999999;
	{$this->getTheme()}
}
$output
	";
	}
}

// Get Route
$route = substr($_SERVER['REQUEST_URI'], 1);

if (strpos($route,':') !== false) {
	$css = new MediaQueryBuilder($route);
	header("Content-Type: text/css", true);
	echo $css->output();
} else {
	include 'home.php';
}