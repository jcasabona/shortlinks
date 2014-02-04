<?php
define('DB_HOST', 'localhost');
define('DATABASE', 'database name here');
define('DB_USER', 'username here');
define('DB_PASS', 'password here');

define(BASE_URL, get_base_url()); //change if you want shortlink to be different from root URL. 


/* Probably don't edit below this line */

function get_base_url() {
	$baseURL = ($_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$baseURL .= ($_SERVER["SERVER_PORT"] != "80") ?  $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] : $_SERVER["SERVER_NAME"];
	$baseURL .= "/";
 
	 return $baseURL;
}

?>