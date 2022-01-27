### Encrypt-Decrypt PHP

Simple Encrypt and Decrypt with PHP

```php
<?php

require_once 'vendor/autoload.php';

use Ronijan\EncryptDecrypt\EncryptDecrypt;

$encryptDecrypt = new EncryptDecrypt();

$encryptionKey = sha1('SOME-KEY-HERE');

// to encrypt
echo $encryptedText = $encryptDecrypt->encrypt('Hello World', $encryptionKey);

echo '<br>';

// to decrypt
echo $encryptDecrypt->decrypt($encryptedText, $encryptionKey);
```
