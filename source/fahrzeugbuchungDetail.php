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
                    <img src="../images/carOne.jpg" alt="">
                </div>
                <div class="zimmberbuchungContent2">
                    <img src="../images/carTwo.jpg" alt="">
                    <img src="../images/carThree.jpg" alt="">
                    <img src="../images/carFour.jpg" alt="">
                </div>
            </div>
            <div class="zimmberbuchungInfo2">
                <h1>BMW irgendwas CX41</h1>
                <h4>Vollfunktionsfähiges Auto mit Know-How Service</h4>
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
                <h5>Auto features</h3>
                <li><i class='bx bxs-car-crash'><span>Spurhalteassistent</span></i></li>
                <li><i class='bx bxs-credit-card'><span>Tankkarte</span></i></li>
                <li><i class='bx bx-shield'><span>Vollkaskoversicherung </span></i></li>
                <li><i class='bx bx-phone'><span>Service & Know-How</span></i></li>
            </div>
            <div class="booking-btn">
                <a class="reservation" href="reservation.php">Jetzt mieten</a>
            </div>
        </div>
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>
