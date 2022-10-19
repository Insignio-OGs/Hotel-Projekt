<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Seite</title>
    <link rel="stylesheet" href="source/style.css">
</head>
<body>
    <nav>
        <ul class="nav-list">
            <li class="nav-item">
                <img src="source/images/iconNav.png" alt="">
            </li>
            <li class="nav-item">
                <a href="index.php">Startseite</a>
            </li>
            <li class="nav-item">
                <a href="source/fahrzeugbuchung.php">Fahrzeugbuchung</a>
            </li>
            <li class="nav-item">
                <a href="source/zimmerbuchung.php">Zimmerbuchung</a>
            </li>
            <li class="nav-item">
                <a href="source/kontaktseite.php">Kontaktseite</a>
            </li>
            <li class="nav-item">
                <a href="source/impressum.php">Impressum</a>
            </li>
            <li class="nav-item">
                <div class="test">
                    <img class="loginLogo" src="source/images/iconLogin.png" alt="">
                    <a class="loginText" href="source/login.php"  name="submit">Login</a>
                </div>
            </li>
        </ul>
    </nav>
    <header>
        <div class="header-container">
            <img class="header-img" src="source/images/headerImage.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel Startseite</h1>
            </div>
            <div class="header-content-two">
                <h2>Hier buchen Sie zum günstigsten Preis:</h2>
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
        </div>
    </header>
    <section>
        <div class="section-one-container">

        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h1 class="footer-h1">Das ist der Footer</h1>
            </div>
        </div>
    </footer>
</body>
</html>