<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
</head>
<body>
    <a href="index.php">Go to Home</a>
</br></br>
<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['Submit'])) {
    $name = $_POST['nama'];
    $stok = $_POST['stok'];

    include_once("config.php");
    $result = mysqli_query($mysqli, "INSERT INTO barang(nama, stok) VALUES ('$name', '$stok')");

    echo "Item added successfully. <a href='index.php'>View Items</a>";
}
?>
</body>
</html>