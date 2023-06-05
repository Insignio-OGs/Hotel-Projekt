<?php
    if(!isset($_SESSION)){ 
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Seite</title>
    <link rel="stylesheet" href="source/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("source/navigation.php");
    ?>
    <header>
        <div class="header-container">
            <img class="header-img" src="images/pexels-asad-photo-maldives-1450353.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel BlueOcean</h1>
                <h2 class="header-h2">Das Hotel mit den besten Stränden</h2>
            </div>
            <div class="header-content-two">
                <h2>Hier buchen Sie zum günstigsten Preis:</h2>
                <?php include_once('source/search.php') ?>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container main">
            <div class="content-onee">

            </div>
            <div class="content-twoo">
                
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h1 class="footer-h1">Das ist der Footer</h1>
                <a href="source/impressum.php">Impressum</a>
            </div>
        </div>
    </footer>
</body>
</html>
