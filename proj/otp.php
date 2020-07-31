<?php
require('../textlocal.class.php');

$textlocal = new Textlocal(false, false);

$numbers = array(918123456789);
$sender = 'TXTLCL';
$message = 'This is a message';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>
