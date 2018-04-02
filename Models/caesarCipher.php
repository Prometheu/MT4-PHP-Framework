<?php

class CaesarCipher{
	
	public function __construct(){}

	public static function Cipher($ch, $key){
		if (!ctype_alpha($ch))
			return $ch;

		$offset = ord(ctype_upper($ch) ? 'A' : 'a');
		return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
	}

	#Encrypt a value using a shift and Caesar Cipher
	public static function Encrypt($input, $key){
		$output = "";

		$inputArr = str_split($input);
		foreach ($inputArr as $ch)
			$output .= CaesarCipher::Cipher($ch, $key);

		return $output;
	}

	#Decrypt a value using a shift and Caesar Cipher
	public static function Decrypt($input, $key){
		return CaesarCipher::Encrypt($input, 26 - $key);
	}

	public static function Method($text,$shift,$type){
		return($enc = CaesarCipher::$type($text,$shift));
	}
}

?>