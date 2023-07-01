<?php
$server = "localhost";
$user = "root";
$pw = "";
$nama_db = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $pw, $nama_db);

if (!$db) {
    die("Gagal terhubung dengan database: ". mysqli_connect_error());
}
?>