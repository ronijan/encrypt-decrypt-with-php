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
        $iv_length = openssl_cipher_iv_length($cipher);
        $iv = sha1($iv_length);
        $options = 2;

        return openssl_decrypt($encryptedString, $cipher, $encryptionKey, $options, $iv);
    }
}