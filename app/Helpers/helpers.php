<?php

function returnIcon($name) {
	$icon = '';
	switch ($name) {
		case 'PHP':
			$icon = 'fab fa-php fa-2x';
			break;
		case 'JavaScript/Jquery':
			$icon = 'fab fa-js fa-2x';
			break;
		case 'MySQL':
			$icon = 'fas fa-database fa-2x';
			break;
		case 'Android':
			$icon = 'fab fa-android fa-2x';
			break;
		case 'CSS':
			$icon = 'fab fa-css3 fa-2x';
			break;
		case 'HTML':
			$icon = 'fab fa-html5 fa-2x';
			break;
		case 'vuejs':
			$icon = 'fab fa-vuejs fa-2x';
			break;
	}

	return $icon;
}