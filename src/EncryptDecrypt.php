<?php

namespace Ronijan\EncryptDecrypt;

class EncryptDecrypt
{
    private const METHOD = 'AES-256-CTR';

    public function encrypt(string $data, string $encryptionKey): string
    {
        $key = hex2bin($encryptionKey);
        $ivLength = openssl_cipher_iv_length(self::METHOD);
        $randomBytes = openssl_random_pseudo_bytes($ivLength);

        $ciphertext = openssl_encrypt(
            $data,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $randomBytes
        );

        return base64_encode($randomBytes . $ciphertext);
    }

    public function decrypt(string $data, string $encryptionKey): string
    {
        $key = hex2bin($encryptionKey);
        $data = base64_decode($data);
        $ivLength = openssl_cipher_iv_length(self::METHOD);
        $randomBytes = mb_substr($data, 0, $ivLength, '8bit');
        $cipherText = mb_substr($data, $ivLength, null, '8bit');

        return openssl_decrypt(
            $cipherText,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $randomBytes
        );
    }
}
