<?php
	function lang($phrase){
		static $lang = array(
			//Dashboard page
			'admin-home' 			=> 'Home',
			'admin-categories' 		=> 'Categories',
			'admin-items'			=> 'Items',
			'admin-members'			=> 'Members',
		);
		return $lang[$phrase];
	}