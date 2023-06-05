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
    <?php
        include("navigation.php");
    ?>
   
    <h2>Buchung</h2>

    <h4>Zur Buchung ausgewählt:</h4>

    <?php

        require_once('include.php');

        $db = new DBHandler();

    
        if(isset($_GET['room_id'])){
            $room = $db->getRow('rooms',$_GET['room_id']);
            echo('<div>');
            //print_r($room);
            echo('</div>');
        } else {
            $rooms = $db->getRooms();
            echo('<div>');
            echo('<div>Möchten Sie ein Zimmer dazu mieten?</div>');
            echo ("<form action='reservation.php' method='GET'>");
            echo ("<input type='hidden' name='car_id' value='".$_GET['car_id']."'> ");

            echo ("<select name='room_id'>");
            foreach($rooms as $room) {
                echo ("<option value='".$room['id']."'>"."Nr. ".$room['id']." - ".$room['type']."</option>");
            }
            echo ('</select>');

            echo ("<input type='submit' value='Auswählen'>");
            echo ("</form></div>");
        }
    
        if(isset($_GET['car_id'])){
            $car = $db->getRow('cars',$_GET['car_id']);
            echo('<div>');
            print_r($car);
            echo('</div>');
        } else {
            $cars = $db->getCars();
            echo('<div>');
            echo('Möchten Sie ein Auto dazu mieten?<br>');
            echo ("<form action = 'reservation.php' method='GET'>");
            echo ("<input type='hidden' name='room_id' value='".$_GET['room_id']."'> ");

            echo ("<select name='car_id'>");
            foreach($cars as $car) {
                echo ("<option value='".$car['ID']."'>".$car['Marke']." ".$car['Modell']."</option>");
            }
            echo ('</select>');

            echo ("<input type='submit' value='Auswählen'>");
            echo ("</form></div>");
        }

        echo('<div>');
        echo ("<form action='reservation-confirmation.php' method='GET'>Von <input type='date' name='from_date' required> Bis <input type='date' name='until_date' required>");
        if (isset($_GET['car_id']))  echo ("<input type='hidden' name='car_id' value='".$_GET['car_id']."'> ");
        if (isset($_GET['room_id'])) echo ("<input type='hidden' name='room_id' value='".$_GET['room_id']."'> ");
        echo ("<input type='submit' value='Weiter'> </form>");
        echo('</div>');


    ?>

    <?php
        include("footer.php");
    ?>
</body>
</html>
