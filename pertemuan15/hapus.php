<?php
include("config.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = mysqli_query($db, "DELETE FROM calon_siswa WHERE id=$id");

    if ($sql) {
        header("Location:list-siswa.php");
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>