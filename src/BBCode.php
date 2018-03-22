<?php

class BBCode
{
	
	/**
	 *
	 * @var array
	 */
	private $_codes = [
		'@\[b\](.*?)\[\/b\]@' 					=> '<strong>$1</strong>',
		'@\[i\](.*?)\[\/i\]@' 					=> '<em>$1</em>',
		'@\[u\](.*?)\[\/u\]@' 					=> '<u>$1</u>',
		'@\[url=(.*?)\](.*?)\[\/url\]@' => '<a href="$1">$2</a>',		
		'@\[img\](.*?)\[\/img\]@' 			=> '<img src="$1" alt="">',		
	];

	/**
	 * Replaces bbcodes arrays.
	 * 
	 * @param  string $string bbcode tag
	 * @return array|string
	 */
	public function replace($string)
	{
		return preg_replace(array_keys($this->_codes), array_values($this->_codes), $string);
	}
}