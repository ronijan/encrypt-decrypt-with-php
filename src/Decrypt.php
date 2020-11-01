<?php

namespace Ronijan\EncryptDecrypt;

class Decrypt
{
    /**
     * @param $encryptedString
     * @param $encryptionKey
     * @param string $cipher
     * @return false|string
     */
    public function decrypt($encryptedString, $encryptionKey, $cipher = "AES-128-CTR")
    {
        $ivLength = openssl_cipher_iv_length($cipher);
        $iv = sha1($ivLength);
        $options = 2;

        return openssl_decrypt($encryptedString, $cipher, $encryptionKey, $options, $iv);
    }
}