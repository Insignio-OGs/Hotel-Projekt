<?php


include_once('connection.php');

// Creates new database connection
$con = new PDO($dsn, $username, $password);


if(isset($_POST["submit"])) {
    //Wenn Felder vom forumular ausgefüllt sind dann wird die Datenbank mit den neuen Daten aktualisiert
    if(!empty($_POST['product_name']) && !empty($_POST['product_time']) && !empty($_POST['product_difficulty']) && !empty($_POST['product_img']) && !empty($_POST['data_name'])) {
        $product_name = $_POST['product_name'];
        $product_time = $_POST['product_time'];
        $product_difficulty = $_POST['product_difficulty'];
        $product_img = "./images/" . $_POST['product_img'];
        $data_name = $_POST['data_name'];

        $stmt = $con->prepare("INSERT INTO cookingrecipedb (product_name, product_time, product_difficulty, product_img, data_name) VALUES (:productname, :producttime, :productdifficulty, :productimg, :dataname)");
        $stmt->bindParam(':productname', $product_name);
        $stmt->bindParam(':producttime', $product_time);
        $stmt->bindParam(':productdifficulty', $product_difficulty);
        $stmt->bindParam(':productimg', $product_img);
        $stmt->bindParam(':dataname', $data_name);
        $stmt->execute();
        header("Location: ../index.php");
    } 
}

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
                <img class="navigationDash__img" src="../../images/insignio-logo.png" alt="">
                <span class="presentDash"> - Dashboard</span>    
            </header>
            <nav class="sidebar-nav">
            <ul>
                <li>
                    <a href="#"><i class="bx bx-user-circle"></i> <span>Profil</span></a>
                    <ul class="nav-flyout">
                        <li>
                        <a href="#"><i class="bx bx-home-alt icon"></i>Übersicht</a>
                        </li>
                        <li>
                        <a href="#"><i class="bx bxs-bar-chart-alt-2"></i>Platzhalter</a>
                        </li>
                        <li>
                        <a href="#"><i class="bx bxs-wallet-alt"></i>Platzhalter</a>
                        </li>
                        <li>
                        <a href='../../index.php'><i class="bx bx-home-alt icon"></i>Geschenkevergabe</a>
                        </li>
                    </ul>
                </li>
                <li class="last">
                    <a href='logout.php'><i class="bx bx-log-out icon"></i> <span class="">Logout</span></a> 
                </li>
            </ul>
            </nav>
        </aside>
        <div class="dashboardContent">
                
        </div>
    </section>    
</body>
</html>