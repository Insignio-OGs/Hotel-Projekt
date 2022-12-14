<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Seite</title>
    <link rel="stylesheet" href="style.css">
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
                <h1 class="header-h1">Hotel Kontaktseite</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container">
            <div class="form-container-contact">
                <form action="">
                <h1>Kontakt Formular</h1>
                    <div class="form-content">
                        <input type="text" name="" placeholder="Vorname">
                        <input type="text" name="" placeholder="Nachname">
                    </div>
                    <div class="form-content">
                        <input type="text" name="" placeholder="E-Mail">
                    </div>
                    <div class="form-content">
                        <textarea name="" rows="8" cols="80" placeholder="Nachricht"></textarea>
                    </div>
                    <div class="form-content">
                        <input class="contact-checkbox"type="checkbox" name="" id="">Ich willige die Datenschutzerkl??rung ein
                    </div>
                    <div class="form-content">
                        <button>Senden</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h1 class="footer-h1">Das ist der Footer</h1>#
                <a href="impressum.php">Impressum</a>
            </div>
        </div>
    </footer>
</body>
</html>
