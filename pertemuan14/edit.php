<?php

include_once("config.php");

if (isset($_POST['update']))
{
    $id = $_POST['id'];

    $name=$_POST['nama'];
    $stok=$_POST['stok'];
    $result = mysqli_query($mysqli, "UPDATE barang SET nama='$name', stok='$stok' WHERE id='$id'");

    header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['nama'];
    $stok = $user_data['stok'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Items</title>
</head>
<body>
    <a href="index.php">Home</a> </br></br>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $name;?>></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>

