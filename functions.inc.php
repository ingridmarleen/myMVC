<?php
	
	/**
	 * Register class autoloader using an anonymous function (PHP >= 5.3.0)
	 */
	spl_autoload_register(function ($sClassname) {

		# Get the last part of a namespaced classname
		# Set the classname to require accordingly
		$parts = explode('\\', $sClassname);
		$sClassname = end($parts);

		# Set the path to include the class from
		if (stripos($sClassname, 'controller') !== false) {
			$sIncludePath = 'controllers/';
		} elseif (stripos($sClassname, 'model') !== false) {
			$sIncludePath = 'models/';
		}

		# Include the class
		if (isset($sIncludePath)) {
			require_once ($sIncludePath.$sClassname.'.php');
		}
	});


	/**
	 * Check if the HTTP request method matches the routes method
	 * @param  String  $method The method the route applies to
	 * @return boolean         True if it matches, else false
	 */
	function isMethod ($method) {

		$requestMethod 	= strtolower($_SERVER['REQUEST_METHOD']);
		$method 		= strtolower($method);

		return $method === $requestMethod ? true : false;
	}