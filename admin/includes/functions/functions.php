<?php
//title Function
function getTitle()
{
	global $pageTitle;
	if (isset($pageTitle)) {
		echo $pageTitle;
	}else{
		echo "Default";
	}
}