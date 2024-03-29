<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include("navigation.php");
    ?>
    <header>
        <div class="header-container">
            <img class="header-img" src="../images/csm_welche-arten-des-handschlags-zur-begruessung-gibt-es_b9b64f0b8a.jpg" alt="">
            <div class="header-content">
                <h1 class="header-h1">Hotel Kontaktseite</h1>
            </div>
        </div>
    </header>
    <section>
        <div class="section-one-container">
            <div class="form-container-contact">
                <form class="contactForm" action="">
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
                        <input class="contact-checkbox"type="checkbox" name="" id="">Ich willige die Datenschutzerklärung ein
                    </div>
                    <div class="form-content">
                        <button>Senden</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>
