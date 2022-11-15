<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="content">
                <div class="login-picture"></div>
            </div>
            <div class="loginform">
                <h1>Anmeldung</h1>
                <!-- <?php echo $msg; ?> -->
                <form action="" method="POST" id="form"> 
                <div class="tbox">
                    <i class="fa fa-user"></i>
                    <input type="text" name="email" placeholder="E-Mail" autocomplete="off" id="email">
                    <i class="fas fa-check-circle info_icon"></i>
                    <i class="fas fa-exclamation-circle info_icon"></i>
                    <p>Error message</p>
                </div>
                <div class="tbox">
                     <i class="fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Passwort" autocomplete="off" id="password">
                    <i class="fas fa-check-circle info_icon"></i>
                    <i class="fas fa-exclamation-circle info_icon"></i>
                    <p>Error message</p>
                </div>
                    <button class="btn" name="submit">Weiter</button>
                    <div class="links">
                        <a href="register.php">Konto erstellen</a>
                        <span class="line"></span>
                        <a href="forgot-password.php">Passwort vergessen?</a>
                    </div>
                </form>
                    <!-- <ul class="social">
                        <li><a href="https://www.jumpstartmedia.de/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.jumpstartmedia.de/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.jumpstartmedia.de/"><i class="fa fa-google"></i></a></li>
                    </ul> -->
                </div>
            </div>
        </div>   
    </body>
</html>
