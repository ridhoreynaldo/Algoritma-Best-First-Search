<?php

$db_host = 'localhost';
$db_name = 'db_catur';
$db_user = 'root';
$db_password = '';

$db = mysqli_connect($db_host, $db_user, $db_password, $db_name); 

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>