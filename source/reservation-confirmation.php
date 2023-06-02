<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservierung</title>
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
   
    <h2>Buchung</h2>

    <h4>Zur Buchung ausgewählt:</h4>

    <?php
    require_once('include.php');

    $db = new DBHandler();

    if( isset($_GET['from_date']) && isset($_GET['until_date'])) {
        if(isset($_GET['room_id'])){
            if($db->isRoomOrCarAvailable($_GET['from_date'],$_GET['until_date'],'room',$_GET['room_id'])){
                $db->createReservation();
            }else{
                echo('');
            }
        }

        if(isset($_GET['car_id'])){
            if($db->isRoomOrCarAvailable($_GET['from_date'],$_GET['until_date'],'car',$_GET['car_id'])){
                $db->createReservation();
            }else{
                echo('');
            }
        }
    }

    ?>

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
