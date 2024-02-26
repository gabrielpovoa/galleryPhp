<?php
$db_name =  'upload';
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

try {
    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
} catch (\Throwable $th) {
    var_dump($th);
}