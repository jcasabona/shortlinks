<?php
	require_once('functions.php');
	if(isset($_GET['urlID'])){
		$url= get_URL($_GET['urlID']);
		  header( 'Location: '. $url); 
	}
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title><?php print $title; ?> Responsive Design with WordPress</title>
		<link rel="stylesheet" href="/incl/css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Nunito:700' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<!--[if lt IE 9]> <script src="incl/js/respond.min.js"></script> <![endif]-->
		
		<meta name="keywords" content="responsive, web, design, rwd, word, press, wordpress, wp, media, queries, theme, plugin, plug, in, mobile, adaptive, development, RESS" />
		<meta name="description" content="Responsive Design with WordPress shows readers Responsive Web Design principles, as well as how to develop responsively when using WordPress. With a greater push towards mobile and the emergence of Responsive Web Design (RWD), more and more WordPress developers are looking to create responsive themes for their websites." />
		
	</head>
	
	<body>
		<div id="wrapper">
			<header class="group">
				<h1>Responsive Design with <span>WordPress</span></h1>
			</header>
			
			<div id="content">