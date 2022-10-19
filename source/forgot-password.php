<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Passwort vergessen</title>

        <link href="style.css" type="text/css" rel="stylesheet">
        <!-- Icons -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <div class="content">
                    <div class="login-picture"></div>
                </div>
                <div class="loginform">
                    <h1 class="change-pw-headline">Passwort vergessen</h1>
                    <?php echo $msg; ?>
                    <form action="" method="POST" id="form"> 
                       <div class="tbox">
                            <i class="fa fa-user"></i>
                            <input type="text" name="email" placeholder="E-Mail" autocomplete="off" id="email">
                            <i class="fas fa-check-circle info_icon"></i>
			                <i class="fas fa-exclamation-circle info_icon"></i>
                            <p>Error message</p>
                        </div>
                        <button class="btn" name="submit">Zurücksetzen-Link senden</button>
                        <div class="links">
                            <a href="../../index.php">Zum Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
