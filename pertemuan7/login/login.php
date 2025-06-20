<?php
// Apakah tombol submit udah ditekan blm?
// Apakah submit ada dalam array POST?
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "rahasia") {
        // redirect
        header('Location: admin.php');
        exit;
    } else {
        $error = true;
    }
}
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>
    <!-- Klo var error dibuat (tandanya else nya jalan), tampilkan tag p  -->
    <?php if (isset($error)): ?>
        <p style="font-weight: bolder; font-style: italic; color: oklch(1 1 1);">Username / Password Salah!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <button type="submit" name="submit" value="login">Login</button>
        </form>

    </ul>
</body>

</html>