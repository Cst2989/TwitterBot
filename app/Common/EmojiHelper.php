<?php

namespace App\Common;

/**
* 
*/
class EmojiHelper 
{
	
	

	public $positive = [
		'&#x1F601;',
	    '&#x1F602;',
	    '&#x1F603;',
	    '&#x1F604;',
	    '&#x1F605;',
	    '&#x1F606;',
	    '&#x1F609;',
	    '&#x1F60A;',
	    '&#x1F60C;',
	];

	public $neutral = [
		'&#x1F610;',
	    '&#x1F611;',
	    '&#x1F636;',
	    '&#x1F644;',
	];

	public $negative = [
		'&#x1F612;',
	    '&#x1F613;',
	    '&#x1F614;',
	    '&#x1F61E;',
	    '&#x1F622;',
	    '&#x1F623;',
	    '&#x1F625;',
	    '&#x1F629;',
	    '&#x1F62A;',
	];

	public function random($type){
		$type = strtolower($type);
		if (!isset($this->{$type})) {
			return;
		}
		$set = $this->{$type};
		return html_entity_decode($set[rand(0,count($set)-1)],0,'UTF-8'); 
	}
}