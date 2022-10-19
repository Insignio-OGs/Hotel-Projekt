<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Konto erstellen</title>

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
                    <h1>Konto erstellen</h1>
                    <?php echo $msg; ?>
                    <form action="" method="POST" id="form">
                       <div class="tbox">
                            <i class="fa fa-user"></i>
                            <input type="text" name="name" placeholder="Name" autocomplete="off" id="name">
                            <i class="fas fa-check-circle info_icon"></i>
			                <i class="fas fa-exclamation-circle info_icon"></i>
                            <p>Error message</p>
                        </div>
                        <div class="tbox">
                            <i class="fa fa-user"></i>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" id="email">
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
                        <div class="tbox">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password_two" placeholder="Passwort bestätigen" autocomplete="off" id="password_two">
                            <i class="fas fa-check-circle info_icon"></i>
			                <i class="fas fa-exclamation-circle info_icon"></i>
                            <p>Error message</p>
                        </div>
                        <input type="text" class="noeyes" name="subject" value="">
                        <?php echo '<p><input name="date" type="hidden" value="', time(), '" /></p>'; ?>
                        <button class="btn" name="submit">Weiter</button>
                        <a href="../index.php">Du hast bereits ein Konto?</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
