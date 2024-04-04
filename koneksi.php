<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pendaftaran";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: ". $koneksi->connect_error);
}