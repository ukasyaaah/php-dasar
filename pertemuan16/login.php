<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // Cek Password
        $baris = mysqli_fetch_object($result);
        if (password_verify($password, $baris->password)) {
            // Set session
            $_SESSION["login"] = true;

            header('Location: index.php');
            exit;
        } else {
            echo 'Yahaaaaaa password salah';
        }
    } else {
        echo 'username mu gadaaaa di database kuuu';
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>

</html>