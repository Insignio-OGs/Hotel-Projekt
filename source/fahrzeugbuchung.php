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
            <img class="header-img" src="../images/auto key.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel Fahrzeugbuchung</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container">
            <div class="car-product-con">

            <?php

                require_once('include.php');

                $db = new DBHandler();
                $res = $db->getCars();

                foreach($res as $car){
                    echo ("
                    <div class='car-product'>
                    <div class='productcard-side-one-car'>
                    <img src='../images/".$car['pic_id']."01.png' alt='lol'>
                    </div>
                    <div class='productcard-side-two-car'>
                    <h3 class='h3Car'>".$car['Modell']."</h3>
                    <div class='productcard-side-two-content-car'>
                        <div class='side-one-car'>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                        </div>
                        <div class='side-two-car'>
                            <span>
                                <p> ".$car['Bruttopreis']." €</p>
                            </span>
                            <span>
                                <p> Pro Tag </p>
                            </span>
                            <span>
                                <p>".$car['Marke']."</p>
                            </span>
                            <span>
                                <p>".$car['Fahrzeugtyp']."</p>
                            </span>
                        </div>
                    </div>
                    <div class='button'>
                        <a href='fahrzeugbuchungDetail.php?id=".$car['ID']."' class='btn-car-product'>Auto auswählen</a>
                        <!-- <button class='btn-car-product'>Auto mieten</button> -->
                    </div>
                </div>
                </div>
                ");
                }

            ?>

            </div>
            </div> 
        </div>
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>
