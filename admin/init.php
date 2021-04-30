<?php
	include 'connect.php';

	//Routes

	$tpl = 'includes/tamplates/';//Templates Directory
	$lang = 'includes/languages/';//Language Directory
	$func = 'includes/functions/';//Functions Directory
	$css = 'layout/css/';// Css Directory
	$js = 'layout/js/';//Js Directory


	//Include the important Files
	
	include $lang . 'en.php';//must first
	include $func . 'functions.php';
	include $tpl . 'header.php';
	//Include Navbar on All Pages except pages which have $noNavbar variable
	if(! isset($noNavbar)){include $tpl . 'navbar.php';}