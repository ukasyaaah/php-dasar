<?php
session_start();
require 'koneksi.php';


if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE id=$id");
    $nih = mysqli_fetch_object($result);

    if ($key === hash('sha256', $nih->username)) {
        $_SESSION["login"] = true;
        header('Location : index.pdf');
    }
}


if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // Cek Password
        $baris = mysqli_fetch_object($result);
        if (password_verify($password, $baris->password)) {
            $_SESSION["login"] = true;

            // cek remember me 
            if (isset($_POST['remember'])) {
                setcookie('id', "$baris->id", time() + 60);
                setcookie('key', hash('sha256', $baris->username), time() + 60);
            }
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
                <label for="remember">Remember Me : </label>
                <input type="checkbox" name="remember" id="password">
            </li>

            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>

</html>