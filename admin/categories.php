<?php
$pageTitle = 'Categories';
include 'init.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'Manage';

if ($action == 'Manage') {
	echo "Manage";
}elseif($action == 'Add'){
	echo "Add";
}else{
	echo "error";
}