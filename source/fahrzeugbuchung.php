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
    <nav>
        <ul class="nav-list">
            <li class="nav-item">
                <img src="images/iconNav.png" alt="">
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
                    <img class="loginLogo" src="images/iconLogin.png" alt="">
                    <a class="loginText" href="login.php"  name="submit">Login</a>
                </div>
            </li>
        </ul>
    </nav>
    <header>
        <div class="header-container">
            <img class="header-img" src="images/headerImage.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel Fahrzeugbuchung</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container">
            <div class="section-one-container-background">
                <div class="header-content-test">
                    <select name="nights">
                        <option value="nightOne">1 Tag</option>
                        <option value="nightTwo">2 Tage</option>
                        <option value="nightThree">3 Tage</option>
                        <option value="nightFour">4 Tage</option>
                    </select>
                    <div class="calendar">
                        <input type="date" id="start" name="trip-start" value="2021-08-01" min="2021-08-01" max="2022-12-31">
                        <input type="date" id="end" name="trip-end" value="2021-08-01" min="2021-08-01" max="2022-12-31">
                    </div>    
                    <input type="text" placeholder="Autos">
                    <input type="text" placeholder="Personen">
                    <button class="btn-primary">Weiter</button>       
                </div>  
            </div>
            <div class="car-product-con">
            <div class="car-product">
                <div class="productcard-side-one-car">
                    <img src="images/carOne.jpg" alt="lol">
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
                    <img src="images/carTwo.jpg" alt="lol">
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
                    <img src="images/carThree.jpg" alt="lol">
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
                    <img src="images/carFour.jpg" alt="lol">
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
                    <img src="images/carFive.jpg" alt="lol">
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
                    <img src="images/carOne.jpg" alt="lol">
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
                    <img src="images/carTwo.jpg" alt="lol">
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
                    <img src="images/carThree.jpg" alt="lol">
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
                    <img src="images/carFour.jpg" alt="lol">
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
                    <img src="images/carFive.jpg" alt="lol">
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
                    <img src="images/carOne.jpg" alt="lol">
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
                    <img src="images/carTwo.jpg" alt="lol">
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
