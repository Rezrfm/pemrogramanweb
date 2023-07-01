<?php
include("config.php");

if(!isset($_GET['id'])) {
    header("Location:list-siswa.php");
}

$id = $_GET['id'];

$sql = mysqli_query($db, "SELECT * FROM calon_siswa WHERE id=$id");
$siswa = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'];?>" />
            <p>
                <label for="nama">Nama: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'];?></textarea>
            </p>
            <p>
                <label for="gender">Jenis Kelamin: </label>
                <?php $gender = $siswa['gender'];?>
                <label><input type="radio" name="gender" value="laki-laki" <?php echo ($gender == 'laki-laki') ? "checked": ""; ?>>Laki-laki</label>
                <label><input type="radio" name="gender" value="perempuan" <?php echo ($gender == 'perempuan') ? "checked": ""; ?>>Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected" : "";?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected" : "";?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected" : "";?>>Hindu</option>
                    <option <?php echo ($agama == 'Buddha') ? "selected" : "";?>>Buddha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected" : "";?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sklh_asal">Sekolah Asal: </label>
                <input type="text" name="sklh_asal" placeholder="nama sekolah" value="<?php echo $siswa['sklh_asal'];?>"/>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>