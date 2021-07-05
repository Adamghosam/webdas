<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pswd = $_POST['password'];
    if ($user == "Adam Ghosam" && $pswd == "123") {
        echo "Login Berhasil";
    } else {
        echo "login gagal";
    }
}
