<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zimmerbuchung Detail</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("navigation.php");
    ?>
    <section>
        <div class="zimmerbuchungDetail">
            <div class="zimmberbuchungImgGallery">
                
                <?php

                require_once('include.php');
                
                $db = DBHandler::getInstance();
                $room = $db->getRoom($_GET['id']);

                echo("
                
                <div class='zimmberbuchungContent1'>
                    <img src='../images/".$room['type']."1.png' alt=''>
                </div>
                <div class='zimmberbuchungContent2'>
                    <img src='../images/".$room['type']."2.png' alt=''>
                    <img src='../images/".$room['type']."3.png' alt=''>
                    <img src='../images/".$room['type']."4.png' alt=''>
                </div>
            </div>
            <div class='zimmberbuchungInfo1'>
                <span>5.0</span>
                <span>Sehr gut</span>
                <span class='stars'>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </span>
                <span class='share'>
                    <i class='bx bx-share-alt'></i>
                </span>
            </div>
            <div class='zimmberbuchungInfo2'>
                <h1>".$room['type']."</h1>
                <h4>Zimmer Nummer 10".$room['id']."</h4>
                <h5>Beschreibung</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing 
                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita 
                    kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem 
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem 
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p><br><br>
                <h5>Betten:</h3>
                <p>Einzelbetten: ".$room['beds_single']."</p>
                <p>Doppelbetten: ".$room['beds_double']."</p>
                <p>Kinderbetten: ".$room['beds_child']."</p><br><br>
                <h5>Größe</h3>
                <p>".$room['size']."m²</p>
            </div>
            <div class='zimmberbuchungInfo3'>
                <h5>Hotel features</h3>
                <li><i class='bx bx-wifi'><span>Wi-Fi</span></i></li>
                <li><i class='bx bx-bed'><span>Große Betten</span></i></li>
                <li><i class='bx bxs-baguette'><span>Frühstück inklusive</span></i></li>
                <li><i class='bx bx-tv'><span>Fernseher</span></i></li>
            </div>
            <div class='naja'>
                <a href='reservation.php?room_id=".$room['id']."' class='btn-car-product'>Zimmer buchen</a>
            </div>
            
            ");

            ?>

        </div>
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>
