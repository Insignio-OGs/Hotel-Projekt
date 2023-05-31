<?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: dashboard-site.php");
        die();
    }

    include('../dbHandler.php'); 
    include('../login/connection.php'); 

    $msg = "";

    if (isset($_GET['verification'])) {
        $stmt = $con->prepare("SELECT * FROM users WHERE code=:code"); 
        $stmt->bindParam(":code", $_GET['verification']);
        $stmt->execute(); 
        $verificationAlreadyExists = $stmt->fetchColumn();
        if ($verificationAlreadyExists) {
            $stmt = $con->prepare("UPDATE users SET code ='' WHERE code=:code"); 
            $stmt->bindParam(":code", $_GET['verification']);
            if ($stmt->execute()) {
                // Error message
                $msg = "<div class='alert alert-success'>Account Verifizierung war Erfolgreich.</div>";
            }
        }  else {
            header("Location: indexLogin.php");
        }
    }
    
    if(isset($_POST["submit"])) {
        if(!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password_input = $_POST['password'];

            $stmt = $con->prepare("SELECT * FROM users WHERE email = :email"); 
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $emailExists = $stmt->fetchAll();

           if (isset($emailExists[0]['email']) && password_verify($password_input, $emailExists[0]['password'])) {
                $stmt = $con->prepare("SELECT * FROM users WHERE email = :email"); 
                $stmt->bindParam(":email", $email);
                $stmt->execute();
                $emailExists = $stmt->fetchAll();
                if ($emailExists[0]['code'] === "") {
                    $_SESSION['SESSION_EMAIL'] = $email;
                    header("Location: dashboard-site.php");
                } else {
                    // Error message
                    $msg = "<div class='alert alert-info'>Verifizieren Sie erst ihr Konto und versuchen Sie es danach erneut.</div>";
                }
           } else {
                // Error message
                $msg = "<div class='alert alert-danger'>Es wurde kein Konto mit diesen Nutzerdaten gefunden.</div>";
           }
        }      
    }
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../../dist/main.css" type="text/css" rel="stylesheet">
        <title>Anmeldung</title>
    </head>
    <body>
        <div class="indexLogin">
            <div class="indexLogin__box">
                <button onclick="window.location.href = '../../index.php'" class="btn-close">&times;</button>
                <div class="indexLogin__picture"></div>
                <div class="indexLogin__login">
                <div class="indexLogin__loginform">
                    <h1>Anmeldeformular</h1>
                    <?php echo $msg; ?>
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
                        <button class="indexLogin__btn" name="submit">Anmelden</button>
                        <div class="indexLogin__links">
                            <a href="register.php">Konto erstellen</a>
                            <span class="indexLogin__line"></span>
                            <a href="forgot-password.php">Passwort vergessen?</a>
                        </div>
                    </form>
                </div>
                <div class="indexLogin__content">
                    <h1>So funktioniert´s</h1>
                    <p>1. Lorem ipsum dolor sit amet, consetetur
                    sadipscing elitr, sed diam nonumy.</p>
                    <p>2. Eirmod tempor invidunt ut labore et
                    dolore magna aliquyam erat, sed diam
                    voluptua.</p>
                    <p>3. At vero eos et accusam et justo duo
                    dolores et ea rebum. Stet clita kasd
                    gubergren, no sea takimata.</p>
                </div>
            </div>
            </div>
        </div>
        <script src="../js/themes.js" defer></script>
        <script src="../js/login.js" defer></script>
        <script src="../js/function.js" defer></script>
    </body>
</html>
