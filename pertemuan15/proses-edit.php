<?php
include("config.php");

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gender = $_POST['alamat'];
    $agama = $_POST['gender'];
    $sekolah = $_POST['sklh_asal'];

    $sql = mysqli_query($db, "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', gender='$gender', agama='$agama', sklh_asal='$sekolah' WHERE id=$id");

    if($sql) {
        header("Location:list-siswa.php");
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>