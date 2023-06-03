<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>
    <form action="" method="post" name="input">
        <h2>PHP Form Validation</h2>
        <p style="color:red">*required field.</p>
        Nama: <textarea name="name" cols="25" rows="1" required></textarea> <span style="color:red;">*</span> <br> <br>
        E-mail: <textarea name="email" cols="25" rows="1" required></textarea> <span style="color:red;">*</span> <br> <br>
        Website: <textarea name="website" cols="25" rows="1"></textarea> <br> <br>
        Comment: <textarea name="comment" cols="30" rows="5"></textarea> <br> <br>
        Gender: <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female  <span style="color:red;">*</span> <br> <br>
        <input type="submit" name="Submit" value="Submit">
    </form>
    <h2>Your Input:</h2>
</body>
</html>

<?php
if (isset($_POST['Submit'])) {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];

    echo "$nama <br> $email <br> $website <br> $comment <br> $gender";
}
?>