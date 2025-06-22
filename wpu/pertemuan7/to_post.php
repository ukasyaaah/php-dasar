<?php
if (!isset($_POST['nama'])) {
    header('Location:post.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hallo <?= $_POST['nama'] ?></h1>
</body>

</html>