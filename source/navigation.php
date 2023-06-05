<?php
    if(!isset($_SESSION)){ 
        session_start();
    }
    
    $pageTitle = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <ul class="nav-list">
        <li class="nav-item">
            <img class="navigation__img" src="<?php echo ($pageTitle == "index.php") ? "images/iconNav.png" : "../images/iconNav.png"?>" alt="">
        </li>
        <li class="nav-item">
            <a href="/projects/Hotel-Projekt/index.php">Startseite</a>
        </li>
        <li class="nav-item">
            <a href="/projects/Hotel-Projekt/source/fahrzeugbuchung.php">Fahrzeugbuchung</a>
        </li>
        <li class="nav-item">
            <a href="/projects/Hotel-Projekt/source/zimmerbuchung.php">Zimmerbuchung</a>
        </li>
        <li class="nav-item">
            <a href="/projects/Hotel-Projekt/source/kontaktseite.php">Kontaktseite</a>
        </li>
        <li class="nav-item">
            <div class="login-container">  
                <?php 
                    if (isset($_SESSION['SESSION_EMAIL'])) {
                        echo "<a class='loginText bx bxs-user navigation__icon meinProfil' href='source/login/indexLogin.php'  name='submit'>meinProfil</a>";
                    } else if (!isset($_SESSION['SESSION_EMAIL'])) {
                        echo "<a class='loginText bx bx-log-in anmelden' href='source/login/indexLogin.php'  name='submit'><span class='anmelden'>Anmelden</span></a>";
                    }
                ?>
            </div>
        </li>
    </ul>
</nav>
