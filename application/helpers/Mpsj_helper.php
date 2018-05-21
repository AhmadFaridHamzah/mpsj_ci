<?php 
if(!defined('BASEPATH')) exit ('No direct script access allowed');

function encryptInUrl($str){

	$CI =& get_instance();

	$ciphertext = $CI->encryption->encrypt($str);

	$ciphertext = strtr(
		$ciphertext,
		[
			'+'=>'.',
			'='=>'-',
			'/'=>'~',

		]
	);

	return $ciphertext;
}

function decryptInUrl($ciphertext){

	$CI =& get_instance();

	$ciphertext = strtr(
		$ciphertext,
		[
			'.'=>'+',
			'-'=>'=',
			'~'=>'/',

		]
	);

	return $CI->encryption->decrypt($ciphertext);

}