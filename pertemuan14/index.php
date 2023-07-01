<?php
    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
</head>
<body>
    <div class="addbtn" style="padding-top: 2rem; padding-bottom: 1.5rem;">
    <a style="color: black; background-color:aqua; border: 1px solid black; border-color: black; padding: 1rem; border-radius: 25px; text-decoration: none;" href="add.php">Add New Item</a></br></br>
    
    </div>
   

    <table width="80%">
        <tr>
            <th>Name</th>
            <th>Available</th>
            <th>Update</th>
        </tr>

        <?php
        while ($user_data = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td style='padding: 15px; text-align: center;'>".$user_data['nama']."</td>";
            echo "<td style='text-align: center;'>".$user_data['stok']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]' style='background-color: aqua; color: black; padding: 10px; border-radius: 15px; margin-left: 5px; border: 1px solid black; text-decoration: none;'>Edit</a> | <a style='background-color: aqua; color: black; padding: 10px; border-radius: 15px; margin-left: 5px; border: 1px solid black; text-decoration: none;' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>
</html>