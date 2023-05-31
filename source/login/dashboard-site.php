<?php


//$database=new dbHandler("cookingrecipepage","cookingrecipedb");
$dsn = "mysql:dbname=CookingRecipePage;host=localhost";
$username = "root";
$password = "";

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
            <?php
                session_start();
                if (!isset($_SESSION['SESSION_EMAIL'])) {
                header("Location: indexLogin.php");
                die();
                }

                include 'connection.php'; 

                $stmt = $con->prepare("SELECT * FROM users WHERE email= :email"); 
                $stmt->bindParam(":email", $_SESSION['SESSION_EMAIL']);
                $stmt->execute();
                $emailSession = $stmt->fetchAll();

                $stmt = $con->prepare("SELECT * FROM users");
                $stmt->execute();
                $users = $stmt->fetchAll();

                $stmt = $con->prepare("SELECT * FROM users WHERE email= :email");
                $stmt->bindParam(":email", $_SESSION['SESSION_EMAIL']);
                $stmt->execute();
                $usersEmail = $stmt->fetchAll();

                if ($emailSession) {
                $_SESSION['SESSION_EMAIL'] = $emailSession[0]['email']; 
                $_SESSION['SESSION_TYPE'] = $emailSession[0]['type']; 
                
                if ($_SESSION['SESSION_TYPE'] == 0) {
                    foreach ($usersEmail as $user) {
                        echo "<div>";
                        echo "<div class='title'>Willkommen zurück " . $user['username'] . "</div>";
                        echo "<div class='smallTitle'>Deine Profilübersicht</div>";
                        echo "</div>";

                        $stmt = $con->prepare("SELECT * FROM present WHERE id= :id");
                        $stmt->bindParam(":id", $user['product_id']);
                        $stmt->execute();
                        $product = $stmt->fetchAll();

                        if($user['product_id'] >= 1) {
                            echo '<div class="present__box dashboard">';
                            echo '<div class="present__imageBox">';
                            echo '<img class="present__img" src="../../images/'.$product[0]['image'].'" alt="">';
                            echo '<form action="../productDetailView.php" method="get">';
                            echo '<button class="btn-product" name="submit">Ansehen</button>';
                            echo '</div>';
                            echo '</form>';
                            echo '<div class="present__display"> ';
                            echo '<h5>Geschenk</h5>';
                            echo '<p class="present__text">'.$product[0]['name'].'</p>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo "Du hast noch kein Geschenk ausgewählt";
                        }
                    }
                }
                
                if ($_SESSION['SESSION_TYPE'] == -1) {
                    foreach ($usersEmail as $user) {
                        echo "<div>";
                        echo "<div class='title'>Willkommen zurück " . $user['username'] . "</div>";
                        echo "<div class='smallTitle'>Adminbereich</div>";
                        echo "</div>";
                    }
                    echo "<div class='dash__content'>";
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Produkt</th>
                        <th>Löschen</th>";
                    foreach ($users as $user) {
                        echo "</tr>
                        <tr>
                        <td>" . $user['id'] . "</td>
                        <td>" . $user['username'] . "</td>
                        <td>" . $user['email'] . "</td>
                        <td>"; 

                        $stmt = $con->prepare("SELECT * FROM present WHERE id= :id");
                        $stmt->bindParam(":id", $user['product_id']);
                        $stmt->execute();
                        $product = $stmt->fetchAll();
                        
                        if($user['product_id'] >= 1) {
                            echo '<div class="present__box__dashboard">';
                            echo '<div class="present__imageBox">';
                            echo '<form action="../productDetailView.php" method="get">';
                            echo '</div>';
                            echo '</form>';
                            echo '<div class="present__display"> ';
                            echo '<h5>Geschenk</h5>';
                            echo '<p class="present__text">'.$product[0]['name'].'</p>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo "Du hast noch kein Geschenk ausgewählt";
                        }   
                        echo "</td>
                        <td>
                            <form method='post'>
                                <button name='delete' class='btn-product-dash'>Löschen</button>
                            </form>
                        </td>";
                        
                    }
                    echo "</tr>";
                    echo "</table>";

                    echo '<form class="form__dash" action="" method="POST">
                        <h1 class="h1__dash">Geschenk anlegen</h1>
                        <div>
                            <input class="product__input" type="text" name="product_name" placeholder="Produkt Name" autocomplete="off" id="email">
                        </div>
                        <div>
                            <input class="product__upload" type="file" name="product_img" placeholder="Bild" autocomplete="off" id="email">
                        </div>
                        <div class="detailview__dropdown">
                            <select name="data_name" autocomplete="off" id="dropdown" placeholder="Produkt Kategorie">
                                <option value="pizza">Bekleidung</option>
                                <option value="suppe">Events</option>    
                                <option value="nudeln">Gadgets</option>    
                                <option value="frühstück">Multimedia</option>    
                                <option value="frühstück">Sport</option>  
                            </select>
                        </div>
                        <button class="create-btn-product-dash" name="submit">Weiter</button> 
                    </form>';
                    echo "</div>";
                }

                if (isset($_POST['delete'])) {
                    $stmt = $con->prepare("DELETE FROM users WHERE id= :id");
                    $stmt->bindParam(":id", $user['id']);
                    $stmt->execute();
                    header("Location: dashboard.php");
                }


                } else {
                // Forwarding
                header("Location: indexLogin.php");
                }



                // echo "<a href='../recipe.php'>Zurück</a><br>";
            ?>    
        </div>
    </section>    
</body>
</html>