<?php

namespace Ronijan\EncryptDecrypt;

class Encrypt
{
    /**
     * @param $pureString
     * @param $encryptionKey
     * @param string $cipher
     * @return false|string
     */
    public function encrypt($pureString, $encryptionKey, $cipher = "AES-128-CTR")
    {
        $ivLength = openssl_cipher_iv_length($cipher);
        $iv = sha1($ivLength);
        $options = 2;

        return openssl_encrypt($pureString, $cipher, $encryptionKey, $options, $iv);
    }
}