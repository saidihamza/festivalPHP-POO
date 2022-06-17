<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affiche</title>
    <link rel="stylesheet" href="./css/affich.css">
</head>
<body>
    <?php session_start()   ?>
    <section class="tiket">
        <ul>
            <li><?=$_SESSION['name']?></li>
            <li><?= $_SESSION['date_festival']?>li>
            <li><?=$_SESSION['name_festival']?></li>
    
        </ul>
    </section>
</body>
</html>