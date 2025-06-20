<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_POST['submit1'])) : ?>
        <h1>Selamat Datang, <?= $_POST['nama1'] ?></h1>
    <?php else : ?>
        <h1>Selamat Datang, Tamu</h1>
    <?php endif ?>

    <form action="to_post.php" method="post"> Masukkan Nama :
        <!-- name akan menjadi key di array assosiative $_POST -->
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>

    <!-- Klo actionnya dikosongin, maka data akan dikirim ke halaman ini sendiri -->
    <form action="" method="post"> Masukkan Nama Ini :
        <!-- name akan menjadi key di array assosiative $_POST -->
        <input type="text" name="nama1">
        <br>
        <button type="submit" name="submit1">Kirim!</button>
    </form>
</body>

</html>