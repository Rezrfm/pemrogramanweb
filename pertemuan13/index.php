<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Login dengan PHP MySQLi</title>
</head>
<body>
    <h3>Form Login - Tutorial Login dengan PHP MySQLi</h3>
    <?php
    if (isset($_GET['pesan'])) {
        if($_GET['pesan'] == "gagal") {
            echo "Login gagal! Username dan password salah!";
        }
        else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        }
        else if($_GET['pesan'] == "beglum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    </br>
    <form method="POST" action="login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>