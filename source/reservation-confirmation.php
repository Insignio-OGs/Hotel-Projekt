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
    <div class="reservation_two">
        <h2>Buchung</h2>

    <h4>Zur Buchung ausgewählt:</h4>

    <?php
    require_once('include.php');

    $db = new DBHandler();

    if( isset($_GET['from_date']) && isset($_GET['until_date'])) {
        if(isset($_GET['room_id'])){
            if($db->isRoomOrCarAvailableOnTheGivenDateAndForTheGivenId($_GET['from_date'],$_GET['until_date'],'room',$_GET['room_id'])){
                $db->createReservation($_GET['from_date'], $_GET['until_date'], 'room', $_GET['room_id'], '1', $_SESSION['user_id']);
            }else{
                echo('du bekommst nichts');
            }
        }

        if(isset($_GET['car_id'])){
            if($db->isRoomOrCarAvailableOnTheGivenDateAndForTheGivenId($_GET['from_date'],$_GET['until_date'],'car',$_GET['car_id'])){
                $db->createReservation($_GET['from_date'], $_GET['until_date'], 'car', $_GET['car_id'], '1', $_SESSION['user_id']);
            }else{
                echo('du bekommst nichts');
            }
        }
    }

    ?>
    </div>

    <?php
        include("footer.php");
    ?>
</body>
</html>
