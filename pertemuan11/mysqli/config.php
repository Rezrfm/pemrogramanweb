<?php
$dbHost = 'localhost';
$dbName = 'crud_db';
$dbUname = 'root';
$dbPw = '';

$mysqli = mysqli_connect($dbHost, $dbUname, $dbPw, $dbName);

if (!$mysqli)
{
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($mysqli);
?>