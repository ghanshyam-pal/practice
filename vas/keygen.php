<?php

/*private static String generateKey() {
	String presharedKey = "JLgOXrrPNwFfXped"; //PSK shared by TIMWE
	String phrasetoEncrypt = "3474" + "#"
	+System.currentTimeMillis(); // 1234 is the Service Id shared by TIMWE
	String encryptionAlgorithm = "AES/ECB/PKCS5Padding";
	String encrypted = "";
	try {
	Cipher cipher = Cipher.getInstance(encryptionAlgorithm);
	SecretKeySpec key = new
	SecretKeySpec(presharedKey.getBytes(), "AES");
	cipher.init(Cipher.ENCRYPT_MODE, key);
	final byte[] crypted =
	cipher.doFinal(phrasetoEncrypt.getBytes());
	encrypted = Base64.getEncoder().encodeToString(crypted);
	System.out.println("ENCRYPTED API KEY--" + encrypted);
	System.out.println("encrypt END \n");
	} catch (Exception e) {
	System.out.println(e);
	}
	return encrypted;
}*/

// function encrypt($str, $key){
//      $block = mcrypt_get_block_size('rijndael_128', 'ecb');
//      $pad = $block - (strlen($str) % $block);
//      $str .= str_repeat(chr($pad), $pad);
//      return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_ECB));
// }

function encrypt($str,$pass){
    $plaintext = $str;
    $password = $pass;
    $method = 'aes-256-cbc';
     $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
    //$iv='';
    $encrypted = base64_encode(openssl_encrypt($plaintext, $method, base64_decode($password), OPENSSL_RAW_DATA,$iv));
    return $encrypted;
}

function decrypt($str, $key){ 
     $str = base64_decode($str);
     $str = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_ECB);
     $block = mcrypt_get_block_size('rijndael_128', 'ecb');
     $pad = ord($str[($len = strlen($str)) - 1]);
     $len = strlen($str);
     $pad = ord($str[$len-1]);
     return substr($str, 0, strlen($str) - $pad);
}

$presharedKey = "JLgOXrrPNwFfXped";
$phrasetoEncrypt = "3474"."#".floor(microtime(true) * 1000);

$ekey= encrypt($phrasetoEncrypt, $presharedKey);
?>