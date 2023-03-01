<?php header('Link: <https://www.php.net/images/logos/php_script.ico>; rel="shortcut icon"') ?><?php header('Content-Type: text/json'); ?>
<?php function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
} ?>{"string":"<?php echo generateRandomString(); ?>"}