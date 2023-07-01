<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sklh_asal'];

    $sql = mysqli_query($db, "INSERT INTO calon_siswa (nama, alamat, gender, agama, sklh_asal) VALUES ('$nama', '$alamat', '$gender', '$agama', '$sekolah')");

    if ($sql) {
        header("Location:index.php?status=sukses");
    } else {
        header("Location:index.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}
?>