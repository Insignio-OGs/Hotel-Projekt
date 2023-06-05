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
    <nav>
        <ul class="nav-list">
            <li class="nav-item">
                <img src="../images/iconNav.png" alt="">
            </li>
            <li class="nav-item">
                <a href="../index.php">Startseite</a>
            </li>
            <li class="nav-item">
                <a href="fahrzeugbuchung.php">Fahrzeugbuchung</a>
            </li>
            <li class="nav-item">
                <a href="zimmerbuchung.php">Zimmerbuchung</a>
            </li>
            <li class="nav-item">
                <a href="kontaktseite.php">Kontaktseite</a>
            </li>
            <li class="nav-item">
                <div class="login-container">
                    <img class="loginLogo" src="../images/iconLogin.png" alt="">
                    <a class="loginText" href="login.php"  name="submit">Login</a>
                </div>
            </li>
        </ul>
    </nav>
    <section>
        <div class="zimmerbuchungDetail">

            <?php

                require_once('include.php');
                $db = new DBHandler();
                $car = $db->getCar($_GET['id']);

                echo("
                <div class='zimmberbuchungImgGallery'>
                <div class='zimmberbuchungContent1'>
                    <img src='../images/".$car['pic_id']."01.png' alt=''>
                </div>
                <div class='zimmberbuchungContent2'>
                    <img src='../images/".$car['pic_id']."02.png' alt=''>
                    <img src='../images/".$car['pic_id']."03.png' alt=''>
                </div>
                </div>
                ");

                echo("
                <div class='zimmberbuchungInfo2'>
                <h1>".$car['Marke']." ".$car['Modell']." </h1>
                <h4>".$car['Fahrzeugtyp']."</h4>
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
                <h5>Preisklasse</h3>
                <p>".$car['Preisklasse']."</p><br><br>
                <h5>Kilometerstand</h3>
                <p>".$car['Kilometerstand']."</p>
                </div>
                ");



            echo ("
            <div class='zimmberbuchungInfo3'>
                <h5>Auto features</h3>
                <li><i class='bx bxs-car-crash'><span>Hochwertige Ausstattung</span></i></li>
                <li><i class='bx bx-shield'><span>Vollkaskoversicherung </span></i></li>
                <li><i class='bx bxs-credit-card'><span>Tankkarte</span></i></li>
                <li><i class='bx bx-phone'><span>Service & Know-How</span></i></li>
            </div>
            <div class='booking-btn'>
                
            ");

            echo("
            <a href='reservation.php?car_id=".$car['ID']."' class='btn-car-product'>Auto auswählen</a>
            ");

            ?>

            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h1 class="footer-h1">Das ist der Footer</h1>
                <a href="impressum.php">Impressum</a>
            </div>
        </div>
    </footer>
</body>
</html>
