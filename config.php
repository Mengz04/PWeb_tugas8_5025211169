<?php

$server = "localhost";
$user = "root";
//Ganti password sesuai password root
$password = "";
$nama_database = "silaturahmi";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
