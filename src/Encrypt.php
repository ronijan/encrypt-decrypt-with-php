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
        $iv_length = openssl_cipher_iv_length($cipher);
        $iv = sha1($iv_length);
        $options = 2;

        return openssl_encrypt($pureString, $cipher, $encryptionKey, $options, $iv);
    }
}