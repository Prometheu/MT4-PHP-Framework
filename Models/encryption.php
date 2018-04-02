<?php

	class Encryption{
		protected static $shift = 8;

		public static function encrypt($text){
			$type = "Encrypt";

			require_once('Models/caesarCipher.php');
			$caesar = CaesarCipher::Method($text,self::$shift,$type);

			require_once('Models/aes.php');
			$aes = trim(AES::Method($text,$type));

			require_once('Models/thethird.php');
			$thethird = trim(TheThird::Method($text,$type));			

			$return = array(array("CaesarCipher",$caesar),array("AES256 with Salt",$aes),array("The Third",$thethird));

			return $return;
			
		}

		public static function decrypt($toCall,$text){
			$type = "Decrypt";
			
			require_once('Models/caesarCipher.php');
			require_once('Models/aes.php');
			require_once('Models/thethird.php');

			if($toCall == "CaesarCipher")

				$return = trim($toCall::Method($text,self::$shift,$type));
			else
				$return = trim($toCall::Method($text,$type));

			return $return;			
		}

	}

?>