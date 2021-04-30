$(function(){
	'use strict';
	//Hide Placeholder On Form Focus And Return it on Blur
	$('[placeholder]').focus(function(){
		$(this).attr('data-text', $(this).attr('placeholder'));
		$(this).attr('placeholder', '');
	}).blur(function(){
		$(this).attr('placeholder', $(this).attr('data-text'));
	});
});