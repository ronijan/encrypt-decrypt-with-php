<?php

require_once 'vendor/autoload.php';

use Ronijan\EncryptDecrypt\Decrypt;
use Ronijan\EncryptDecrypt\Encrypt;

$encrypt = new Encrypt();
$decrypt = new Decrypt();

$encryptionKey = sha1('SOME-KEY-HERE');

// to encrypt
echo $encryptedText = $encrypt->encrypt('Hello World', $encryptionKey);

echo '<br>';

// to decrypt
echo $decrypt->decrypt($encryptedText, $encryptionKey);