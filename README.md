### Encrypt-Decrypt PHP

Simple Encrypt and Decrypt with PHP

$ `composer require ronijan/encrypt-decrypt-with-php`

```php
<?php

require_once 'vendor/autoload.php';

use Ronijan\EncryptDecrypt\EncryptDecrypt;

$encryptionKey = '8df9e6a4831380fcd49a39042554c253';

$encryptDecrypt = new \Ronijan\EncryptDecrypt\EncryptDecrypt();

$encrypt = $encryptDecrypt->encrypt('Hello Word', $encryptionKey);
$decryp = $encryptDecrypt->decrypt($encrypt, $encryptionKey);
 
var_dump(die('encrypted:: '. $encrypt. 'decrypted:: '. $decryp));
     
```


> encrypted:: ls2gqnCGbwQzgvhzzumFWbR+rM10AlEMj0U= decrypted:: Hello Word
