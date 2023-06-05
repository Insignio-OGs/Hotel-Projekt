<?php
    if(!isset($_SESSION)){ 
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Seite</title>
    <link rel="stylesheet" href="source/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("source/navigation.php");
    ?>
    <header>
        <div class="header-container">
            <img class="header-img" src="images/pexels-asad-photo-maldives-1450353.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel BlueOcean</h1>
                <h2 class="header-h2">Das Hotel mit den besten Stränden</h2>
            </div>
            <div class="header-content-two">
                <a href="source/zimmerbuchung.php" class="btn-index">Jetzt zum günstigsten Preis buchen</a>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container main">
            <div class="content-onee">
                <img src="images/edvin-johansson-rlwE8f8anOc-unsplash.jpg" alt="">
            </div>
            <div class="content-twoo">
                <div class="content-content-one">
                    <h1>Herzlich willkommen</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   
                    no sea takimata sanctus est Lorem ipsum dolor sit no sea takimata sanctus est Lorem ipsum dolor sit 
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, sed a ipsam voluptatum obcaecati quod eaque quia, at voluptas corrupti, earum iste atque laudantium? Magni deserunt reiciendis iste temporibus exercitationem!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fuga labore quas, impedit facilis ipsa et aspernatur! Eum molestiae laboriosam, possimus iusto eligendi ea dolorum quasi nesciunt sequi! Possimus, corrupti!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque eveniet ex hic eum omnis cumque maiores error enim harum aliquid inventore, fugit animi assumenda corporis blanditiis quaerat suscipit? Odit, impedit?
                    os et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea     os et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci excepturi iure eum esse, tempore dolor. Eos corporis reprehenderit saepe excepturi? Ea tempora voluptate temporibus est optio dolorum vero beatae iure.
                </p>
                </div>
            </div>
        </div>
    </section>
    <?php
        include("source/footer.php");
    ?>
</body>
</html>
