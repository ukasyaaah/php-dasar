 <?php if (empty($_GET['namaget'])) {
        header('Location: get.php');
        exit;
    }

    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome</title>
 </head>

 <body>

     <h1>Hallo, <?= $_GET['namaget'] ?></h1>

 </body>

 </html>