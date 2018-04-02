<?php

	class Hash{
		public static function structure($text,$compare){

			if($compare == ""){
				$bool = FALSE;
			}else{
				$bool = TRUE;
			}

			if($bool){
				$hashCompare = self::$compare($text);
			}else{
				$hashCompare = null;
			}

			$sha512 = Hash::SHA512($text);

			$hmac = Hash::HMAC($text);

			$myhash = Hash::MYHASH($text);

			if($bool){
				if(hash_equals($sha512,$hashCompare)){
					$boolSha512 = "Equal";
				}else{
					$boolSha512 = "Different";
				}
				if(hash_equals($hmac,$hashCompare)){
					$boolHmac = "Equal";
				}else{
					$boolHmac = "Different";
				}
				if(hash_equals($myhash,$hashCompare)){
					$boolMyhash = "Equal";
				}else{
					$boolMyhash = "Different";
				}
			}else{
				$boolSha512 = null;
				$boolHmac = null;
				$boolMyhash = null;
			}

			$tbl = Hash::generateTable($bool,$sha512,$hmac,$myhash,$boolSha512,$boolHmac,$boolMyhash);

			$return = array($bool,$tbl);

			return $return;
		}

		public static function generateTable($bool,$sha512,$hmac,$myhash,$boolSha512,$boolHmac,$boolMyhash){
			$tbb[0][0] = "Hash Type";
				if($bool){
					$tbb[0][1] = "User Hash";
					$tbb[0][2] = "Result";
				}else{
					$tbb[0][1] = "Result";
				}

			$tbb[1][0] = "SHA512";
				if($bool){
					$tbb[1][1] = $boolSha512;
					$tbb[1][2] = $sha512;
				}else{
					$tbb[1][1] = $sha512;
				}

			$tbb[2][0] = "HMAC";
				if($bool){
					$tbb[2][1] = $boolHmac;
					$tbb[2][2] = $hmac;
				}else{
					$tbb[2][1] = $hmac;
				}

			$tbb[3][0] = "THE THIRD";
				if($bool){
					$tbb[3][1] = $boolMyhash;
					$tbb[3][2] = $myhash;
				}else{
					$tbb[3][1] = $myhash;
				}

			return $tbb;
		}

		public static function SHA512($text){
			return (hash('sha512', $text));
		}

		public static function HMAC($text){
			return (hash_hmac("md5", $text, "'TNYazlbZ1Mq3HDMiEFDLrRMZBftFqpU2Ipytgytsc+jmQysE8lmigKtmGK+exB337ZOcAgwPpWmoPHL5niO3jA=='") );
		}

		public static function MYHASH($text, $cost = null){
			if (empty($cost)) {
				$cost = self::$defaultCost;
			}
			// Salt
			$salt = self::generateRandomSalt();
			// Hash string
			$hashString = self::__generateHashString((int)$cost, $salt);
			return crypt($text, $hashString);
		}

		public static function generateRandomSalt() {
			// Salt seed
			$seed = uniqid(mt_rand(), true);
			// Generate salt
			$salt = base64_encode($seed);
			$salt = str_replace('+', '.', $salt);
			return substr($salt, 0, self::$saltLength);
		}

		private static function __generateHashString($cost, $salt) {
			return sprintf('$%s$%02d$%s$', self::$saltPrefix, $cost, $salt);
		}

		protected static $saltPrefix = '2a';
		protected static $defaultCost = 8;
		protected static $saltLength = 22;
	}

?>