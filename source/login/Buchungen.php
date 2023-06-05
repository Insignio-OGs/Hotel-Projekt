
<?php 
    require_once('../include.php');
    $db = new DBHandler();
    $cars = $db->getCarReservations(); 
    $rooms = $db->getRoomReservations(); 
?>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link href="../../dist/main.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section class="app">
        <aside class="sidebar">
            <header>
                <span class="presentDash">Dashboard</span>    
            </header>
            <?php include_once('dashboard-nav.php') ?>
        </aside>
        <div class="dashboardContent">
        <h3>Fahrzeugbuchungen</h3>
        <div>
            <table>
                <thead>
                <tr>
                    <th>Marke</th>
                    <th>Modell</th>
                    <th>Von</th>
                    <th>Bis</th>
                    <th>Versichert</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cars as $car): ?>
                    <tr>
                    <td><?php echo $car[0]; ?></td>
                    <td><?php echo $car[1]; ?></td>
                    <td><?php echo $car[2]; ?></td>
                    <td><?php echo $car[3]; ?></td>
                    <td><?php echo $car[4]; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
        <h3>Zimmerbuchungen</h3>
        <div>
            <table>
                <thead>
                <tr>
                    <th>Zimmer</th>
                    <th>Größe</th>
                    <th>Von</th>
                    <th>Bis</th>
                    <th>All-Inclusive</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rooms as $room): ?>
                    <tr>
                    <td><?php echo $room[0]; ?></td>
                    <td><?php echo $room[1]; ?></td>
                    <td><?php echo $room[2]; ?></td>
                    <td><?php echo $room[3]; ?></td>
                    <td><?php echo $room[4]; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </section>    
</body>
</html>