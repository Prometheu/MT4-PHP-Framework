<?php
class AES{
	protected static function key(){
		return (pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3"));
	}
	protected static function keySize($k){
		return (strlen($k));
	}
	protected static function IVsize(){
		return(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC));
	}
	protected static function IV($iv_size){
		return(mcrypt_create_iv($iv_size, MCRYPT_RAND));
	}
	public static function Method($text,$type){
		return (AES::$type($text));		
	}

	public static function Encrypt($plaintext){
	    $iv_size = self::IVsize();
	    $iv = self::IV($iv_size);
	    
	    # creates a cipher text compatible with AES (Rijndael block size = 128)
	    # to keep the text confidential 
	    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, self::key(),
	                                 $plaintext, MCRYPT_MODE_CBC, $iv);

	    # prepend the IV for it to be available for decryption
	    $ciphertext = $iv . $ciphertext;
	    
	    # encode the resulting cipher text so it can be represented by a string
	    $ciphertext_base64 = base64_encode($ciphertext);
	    
	    return $ciphertext_base64; 
	}

    public static function Decrypt($ciphertext_base64){
	    $iv_size = self::IVsize();
	    $iv = self::IV($iv_size);
	    
	    $ciphertext_dec = base64_decode($ciphertext_base64);
	    
	    # retrieves the IV, iv_size should be created using mcrypt_get_iv_size()
	    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
	    
	    # retrieves the cipher text (everything except the $iv_size in the front)
	    $ciphertext_dec = substr($ciphertext_dec, $iv_size);

	    # may remove 00h valued characters from end of plain text
	    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, self::key(),
	                                    $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);

	    return $plaintext_dec;
    }


}

?>