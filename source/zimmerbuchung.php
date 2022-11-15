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
                <h1 class="header-h1">Hotel Zimmerbuchung</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container">
            <div class="section-one-container-background">
                <div class="header-content-test">
                    <select name="nights">
                        <option value="nightOne">1 Nacht</option>
                        <option value="nightTwo">2 Nächte</option>
                        <option value="nightThree">3 Nächte</option>
                        <option value="nightFour">4 Nächte</option>
                    </select>
                    <div class="calendar">
                        <input type="date" id="start" name="trip-start" value="2021-08-01" min="2021-08-01" max="2022-12-31">
                        <input type="date" id="end" name="trip-end" value="2021-08-01" min="2021-08-01" max="2022-12-31">
                    </div>    
                    <input type="text" placeholder="Zimmer">
                    <input type="text" placeholder="Personen">
                    <button class="btn-primary">Weiter</button>       
                </div>  
            </div> 
            <div class="room-product">
                <div class="productcard-side-one">
                    <img src="images/einzelzimmer.jpg" alt="lol">
                </div>
                <div class="productcard-side-two">
                    <h3>Einzelzimmer</h3>
                    <div class="productcard-side-two-content">
                        <div class="side-one">
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Preis: 100€ pro Tag</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Größe: 20m²</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis WLAN</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis Parkplatz</p>
                            </span>
                        </div>
                        <div class="side-two">
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Kühlschrank</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Kaffemaschine</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Klimaanlage</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Balkon</p>
                            </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="zimmerbuchungDetail.php" class="btn-room-product">Zimmer auswählen</a>
                        <!-- <button class="btn-room-product">Zimmer auswählen</button> -->
                    </div>
                </div>
            </div>
            <div class="room-product">
                <div class="productcard-side-one">
                    <img src="images/doppelzimmer standard.jpg" alt="lol">
                </div>
                <div class="productcard-side-two">
                    <h3>Doppelzimmer Standard</h3>
                    <div class="productcard-side-two-content">
                        <div class="side-one">
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Preis: 100€ pro Tag</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Größe: 20m²</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis WLAN</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis Parkplatz</p>
                            </span>
                        </div>
                        <div class="side-two">
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Kühlschrank</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Kaffemaschine</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Klimaanlage</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Balkon</p>
                        </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="zimmerbuchungDetail.php" class="btn-room-product">Zimmer auswählen</a>
                        <!-- <button class="btn-room-product">Zimmer auswählen</button> -->
                    </div>
                </div>
            </div>
            <div class="room-product">
                <div class="productcard-side-one">
                    <img src="images/doppelzimmer komfort.jpg" alt="lol">
                </div>
                <div class="productcard-side-two">
                    <h3>Doppelzimmer Komfort</h3>
                    <div class="productcard-side-two-content">
                        <div class="side-one">
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Preis: 100€ pro Tag</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Größe: 20m²</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis WLAN</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis Parkplatz</p>
                            </span>
                        </div>
                        <div class="side-two">
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Kühlschrank</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Kaffemaschine</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Klimaanlage</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Balkon</p>
                        </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="zimmerbuchungDetail.php" class="btn-room-product">Zimmer auswählen</a>
                        <!-- <button class="btn-room-product">Zimmer auswählen</button> -->
                    </div>
                </div>
            </div>
            <div class="room-product">
                <div class="productcard-side-one">
                    <img src="images/familienzimmer.jpg" alt="lol">
                </div>
                <div class="productcard-side-two">
                    <h3>Familienzimmer</h3>
                    <div class="productcard-side-two-content">
                        <div class="side-one">
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Preis: 100€ pro Tag</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Größe: 20m²</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis WLAN</p>
                            </span>
                            <span>
                                <i class="bx bx-search"></i>
                                <p>Gratis Parkplatz</p>
                            </span>
                        </div>
                        <div class="side-two">
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Kühlschrank</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Kaffemaschine</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Klimaanlage</p>
                        </span>
                        <span>
                            <i class="bx bx-search"></i>
                            <p>Balkon</p>
                        </span>
                        </div>
                    </div>
                    <div class="button">
                        <a href="zimmerbuchungDetail.php" class="btn-room-product">Zimmer auswählen</a>
                        <!-- <button class="btn-room-product">Zimmer auswählen</button> -->
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
