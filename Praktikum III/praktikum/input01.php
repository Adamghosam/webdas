<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan form</title>
</head>

<body>
    <form action="" method="POST" name="input">
        Nama Anda <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="Input">
    </form>

</body>

</html>
<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    echo "nama Anda <b>$nama</b>";
}
