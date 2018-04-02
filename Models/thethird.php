<?php

class TheThird{

	public static function Method($text,$type){
		return (TheThird::$type($text));		
	}

	public static function Encrypt($plaintext){
		return ( base64_encode($plaintext) );
	}

    public static function Decrypt($plaintext){
	    return( base64_decode($plaintext) );
    }



}

?>