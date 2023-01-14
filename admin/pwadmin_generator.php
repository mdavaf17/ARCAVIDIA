<?php

$password = "12322123";
$enc_password = password_hash($password, PASSWORD_DEFAULT);

echo $enc_password;
?>