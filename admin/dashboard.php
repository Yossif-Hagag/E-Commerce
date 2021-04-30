<?php 
	session_start();
	if(isset($_SESSION['username'])){
		$pageTitle = 'Dashboard';
		include 'init.php';
		echo "Welcom to Dashboard";
		include $tpl . 'footer.php';
	}else{
		header('location: index.php');
	}