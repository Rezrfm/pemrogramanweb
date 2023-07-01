<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>
                    <td>$siswa[id]</td>
                    <td>$siswa[nama]</td>
                    <td>$siswa[alamat]</td>
                    <td>$siswa[gender]</td>
                    <td>$siswa[agama]</td>
                    <td>$siswa[sklh_asal]</td>
                    <td>
                    <a href='form-edit.php?id=$siswa[id]'>Edit</a>
                    <a href='hapus.php?id=$siswa[id]'>Hapus</a>
                    </td>
                    </tr>";  
                }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query);?></p>
</body>
</html>