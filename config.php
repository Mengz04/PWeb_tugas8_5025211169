<?php

$server = "localhost";
$user = "root";
//Ganti password sesuai password root
$password = "";
$nama_database = "silaturahmi";
$port = 3307;

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
