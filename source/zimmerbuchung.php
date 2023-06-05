<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Seite</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("navigation.php");
    ?>
    <header>
        <div class="header-container">
            <img class="header-img" src="../images/smartworks-coworking-E7Tzh2TTS6c-unsplash.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel Zimmerbuchung</h1>
            </div>
        </div>
    </header>
    <section class="zimmer">

            <?php
            require_once('include.php');

            $db = DBHandler::getInstance();
            $rooms = $db->getRooms();

            foreach($rooms as $room) {
                echo("
                <div class='room-product'>
                <div class='productcard-side-one'>
                    <img src='../images/".$room['type']."1.png' alt='lol'>
                </div>
                <div class='productcard-side-two'>
                    <h3>Nr. 10".$room['id']." - ".$room['type']."</h3>
                    <div class='productcard-side-two-content'>
                        <div class='side-one'>
                            <span>
                            <i class='bx bx-info-circle' ></i>
                                <p>Preis: ".$room['price_brutto']."€ pro Tag</p>
                            </span>
                            <span>
                            <i class='bx bx-info-circle' ></i>
                                <p>Größe: ".$room['size']."m²</p>
                            </span>
                            <span>
                            <i class='bx bx-info-circle' ></i>
                                <p>Anzahl Schlafplätze: ".($room['beds_single']+($room['beds_double']*2))."</p>
                            </span>
                            <span>
                            <i class='bx bx-info-circle' ></i>
                                <p>Anzahl Schlafplätze: ".($room['beds_single']+($room['beds_double']*2))."</p>
                            </span>
                            <span>
                                <i class='bx bx-info-circle' ></i>
                                <p>Kinderbetten: ".$room['beds_child']."</p>
                            </span>
                        </div>
                        <div class='side-two'>
                            <span>
                                <i class='bx bx-check'></i>
                                <p>Inklusive Frühstück</p>
                            </span>
                            <span>
                                <i class='bx bx-check'></i>
                                <p>Gratis WLAN</p>
                            </span>
                            <span>
                                <i class='bx bx-check'></i>
                                <p>Kaffemaschine</p>
                            </span>
                            <span>
                                <i class='bx bx-check'></i>
                                <p>Gratis Parkplatz</p>
                            </span>
                            <span>
                                <i class='bx bx-check'></i>
                                <p>Balkon</p>
                            </span>
                        </div>
                    </div>
                    <div class='button'>
                        <a href='zimmerbuchungDetail.php?id=".$room['id']."' class='btn-room-product'>Zimmer auswählen</a>
                        <!-- <button class='btn-room-product'>Zimmer auswählen</button> -->
                    </div>
                </div>
                </div>
                "); 
            }

            ?>

        </div>
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>
