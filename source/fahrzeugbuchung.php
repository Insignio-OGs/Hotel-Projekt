<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Seite</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("navigation.php");
    ?>
    <header>
        <div class="header-container">
            <img class="header-img" src="../images/auto key.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel Fahrzeugbuchung</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container">
            <div class="section-one-container-background">
                <div class="header-content-test">
                <div class="select">
                        <select name="nights">
                            <option value="nightOne">1 Tag</option>
                            <option value="nightTwo">2 Tag</option>
                            <option value="nightThree">3 Tag</option>
                            <option value="nightFour">4 Tag</option>
                        </select>
                    </div>
                    <div class="selectDate">
                        <input type="date" id="start" name="trip-start" value="2021-08-01" min="2021-08-01" max="2022-12-31">
                    </div>    
                    <div class="selectDate">
                        <input type="date" id="end" name="trip-end" value="2021-08-01" min="2021-08-01" max="2022-12-31">
                    </div>
                    <div class="select">
                        <select name="Zimmer">
                            <option value="ZimmerOne">Autos</option>
                            <option value="ZimmerTwo">Autos</option>
                            <option value="ZimmerThree">Autos</option>
                            <option value="ZimmerFour">Autos</option>
                        </select>
                    </div>     
                    <div class="select">
                        <select name="Personen">
                            <option value="PersonenOne">Personen</option>
                            <option value="PersonenTwo">Personen</option>
                            <option value="PersonenThree">Personen</option>
                            <option value="PersonenFour">Personen</option>
                        </select>
                    </div>    
                    <button class="btn-primary">Jetzt buchen</button>        
                </div>  
            </div>
            <div class="car-product-con">
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carOne.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carTwo.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carThree.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carFour.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carFive.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carOne.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carTwo.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carThree.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carFour.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carFive.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carOne.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="../images/carTwo.jpg" alt="lol">
                </div>
                <div class="productcard-side-two-car">
                    <h3 class="h3Car">Mietwagen</h3>
                    <div class="productcard-side-two-content-car">
                        <div class="side-one-car">
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Preis:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Marke:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Typ:</p>
                            </span>
                            <span>
                                <i class='bx bxs-car'></i>
                                <p>Dauer:</p>
                            </span>
                        </div>
                        <div class="side-two-car">
                            <span>
                                <p>230€ pro Monat</p>
                            </span>
                            <span>
                                <p>Tesla</p>
                            </span>
                            <span>
                                <p>Sport</p>
                            </span>
                            <span>
                                <p>2 Wochen</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="fahrzeugbuchungDetail.php" class="btn-car-product">Auto auswählen</a>
                        <!-- <button class="btn-car-product">Auto mieten</button> -->
                    </div>
                </div>
            </div>
            </div> 
        </div>
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>
