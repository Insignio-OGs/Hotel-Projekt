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
    <?php
        include("navigation.php");
    ?>
    <section>
        <div class="zimmerbuchungDetail">
            <div class="zimmberbuchungImgGallery">
                <div class="zimmberbuchungContent1">
                    <img src="../images/doppelzimmer standard.jpg" alt="">
                </div>
                <div class="zimmberbuchungContent2">
                    <img src="../images/doppelzimmer komfort.jpg" alt="">
                    <img src="../images/einzelzimmer.jpg" alt="">
                    <img src="../images/familienzimmer.jpg" alt="">
                </div>
            </div>
            <div class="zimmberbuchungInfo1">
                <span>5.0</span>
                <span>Sehr gut</span>
                <span class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </span>
                <span class="share">
                    <i class='bx bx-share-alt'></i>
                </span>
            </div>
            <div class="zimmberbuchungInfo2">
                <h1>B&B Hotel Kassel-City</h1>
                <h4>Waldauer Fußweg 3, 34123 Kassel•0561 574490</h4>
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
                </p>
            </div>
            <div class="zimmberbuchungInfo3">
                <h5>Hotel features</h3>
                <li><i class="bx bx-wifi"><span>Wi-Fi</span></i></li>
                <li><i class="bx bx-bed"><span>Bed</span></i></li>
                <li><i class="bx bxs-baguette"><span>Breakfast</span></i></li>
                <li><i class="bx bx-tv"><span>TV</span></i></li>
            </div>
            <div class="booking-btn">
                <a class="reservation" href="reservation.php">Jetzt buchen</a>
            </div>
        </div>
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>
