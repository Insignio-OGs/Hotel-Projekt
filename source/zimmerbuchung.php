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
            <img class="header-img" src="../images/smartworks-coworking-E7Tzh2TTS6c-unsplash.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel Zimmerbuchung</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container">
            <div class="section-one-container-background">
                <?php include_once('search.php') ?>
            </div> 
            <div class="room-product">
                <div class="productcard-side-one">
                    <img src="../images/einzelzimmer.jpg" alt="lol">
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
                    <img src="../images/doppelzimmer standard.jpg" alt="lol">
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
                    <img src="../images/doppelzimmer komfort.jpg" alt="lol">
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
                    <img src="../images/familienzimmer.jpg" alt="lol">
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
    <?php
        include("footer.php");
    ?>
</body>
</html>
