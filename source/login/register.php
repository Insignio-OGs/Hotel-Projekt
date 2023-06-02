<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'connection.php'; 
    include('../dbHandler.php');
    require '../../vendor/autoload.php';

    $msg = "";

    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: dashboard-site.php");
        die();
    }
    
    if(isset($_POST["submit"]) ) { 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_two = $_POST['password_two'];
        $code = md5(rand());
        $honeypot = $_POST['subject'];
        
        if(empty($honeypot)) {
            if (isset($_POST['date']) && is_numeric($_POST['date'])) {
                $posted = intval($_POST['date']);
                $sendezeit =  (time() - $posted);
                if ($sendezeit < 10 || $sendezeit > 3600) {
                    $msg = "<div class='alert alert-danger'>Ohh es ist ein Fehler aufgetreten! Laden Sie die Seite neu und versuchen Sie es erneut.</div>";
                } else {
                    $stmt = $con->prepare("SELECT * FROM users WHERE email = :email"); 
                    $stmt->bindParam(":email", $email); 
                    $stmt->execute(); 
                    $userAlreadyExists = $stmt->fetchColumn();

                    if ($userAlreadyExists) {
                        // Error message
                        $msg = "<p class='alert alert-danger'>{$email} - Diese Email existiert bereits.</p>";
                    } else {
                        if(!empty($name) && !empty($email) && !empty($password) && !empty($password_two)) {
                            // RegEx - Regular Expression
                            if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) { 
                                if ($password === $password_two) {
                                    $password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);
                                    $stmt = $con->prepare("INSERT INTO users (username, email, password, code) VALUES (:name, :email, :password, :code)");
                                    $stmt->bindParam(":name", $name);
                                    $stmt->bindParam(":email", $email);
                                    $stmt->bindParam(":password", $password);
                                    $stmt->bindParam(":code", $code);
                    
                                    if ($stmt->execute()) {
                                        echo "<div style='display: none;'>";
                                        $mail = new PHPMailer(true);
                    
                                        try {
                                            //Server settings
                                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                            $mail->isSMTP();                                            //Send using SMTP
                                            $mail->Host       = 'smtp.web.de';                          //Set the SMTP server to send through
                                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                            $mail->Username   = 'pixelcut.de@web.de';                   //SMTP username
                                            $mail->Password   = 'F26G4KfU45';                           //SMTP password
                                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                                            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                                            //Recipients
                                            $mail->setFrom('pixelcut.de@web.de');
                                            $mail->addAddress($email);
                    
                                            //Content
                                            $mail->isHTML(true);                                         //Set email format to HTML
                                            $mail->Subject = 'Bestaetigungs E-Mail';
                                            $mail->Body    = 
                                                'Heyoh ' .$name. ',<br>
                                                du hast jetzt die Möglichkeit in wenigen Schritten dir dein eigenes Geschenk auszuwaehlen.<br><br>
                                                
                                                Hiermit moechten wir dir bestaetigen, dass dein Konto erfolgreich erstellt wurde. Um zum Insignio-Geschenkportal zu gelangen, klicke auf den unten stehenden Link.<br><br>
                                                
                                                <b><a href="http://localhost/Praxisprojekt/php/login/indexLogin.php?verification='.$code.'">http://localhost/Praxisprojekt/php/login/indexLogin.php?verification='.$code.'</a></b><br><br>
                                                
                                                Solltes du Probleme beim einloggen in dein Konto haben, kontaktiere uns unter Tel: 0561 5602325<br><br>
                                                
                                                Mit freundlichen Gruessen,<br>
                                                Dein Insignio-Geschenkeportal Team';
                                                
                                            $mail->send();
                                            // Successful message
                                            echo 'Message has been sent';
                                        } catch (Exception $e) {
                                            // Error message
                                            echo "Nachricht konnte nicht versendet werden. Mailer Fehler: {$mail->ErrorInfo}";
                                        }
                                        echo "</div>";
                                        // Error message
                                        $msg = "<div class='alert alert-info'>Wir haben dir per E-Mail einen Bestätigungslink gesendet.</div>";
                                    } else {
                                        // Error message
                                        $msg = "<div class='alert alert-danger'>Irgendetwas ist schiefgelaufen, bitte versuchen sie es später erneut.</div>";
                                    }
                                } else {
                                    // Error message
                                    $msg = "<div class='alert alert-danger'>Passwörter stimmen nicht überein</div>";
                                }
                            }
                        }
                    }
                }
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
        <title>Konto erstellen</title>
    </head>
    <body>
        <div class="register">
            <div class="register__box">
                <button onclick="window.location.href = '../../index.php'" class="btn-close-reg">&times;</button>
                <div class="register__picture"></div>
                <div class="register__login">
                    <div class="register__loginform">
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
                            <button class="register__btn" name="submit">Weiter</button>
                            <div class="register__links">
                                <a class="register__aRegistr" href="indexLogin.php">Du hast bereits ein Konto?</a>
                            </div>
                        </form>
                    </div>
                    <div class="register__content">
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
        <script src="../js/main.js" defer></script>
        <script src="../js/function.js" defer></script>
    </body>
</html>
