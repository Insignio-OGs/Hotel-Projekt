<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    
    require 'connection.php';
    require '../../vendor/autoload.php'; 

    $msg = "";

    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: dashboard_site.php");
        die();
    }
   
    if(isset($_POST["submit"]) ) { 
        $email = $_POST['email'];
        $code = md5(rand());
   
        $stmt = $con->prepare("SELECT * FROM users WHERE email = :email"); 
        $stmt->bindParam(":email", $email); 
        $stmt->execute(); 
        $emailIsExists = $stmt->fetchColumn();

        if ($emailIsExists) {
            $stmt = $con->prepare("UPDATE users SET code = :code WHERE email = :email"); 
            $stmt->bindParam(":code", $code);  
            $stmt->bindParam(":email", $email);  

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
                    $mail->Password   = '';                     //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('pixelcut.de@web.de');
                    $mail->addAddress($email);

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Bestaetigungs E-Mail';
                    $mail->Body    = 
                        'Hallo ,<br>
                        Sie haben Probleme bei ihrem Login dann klicken Sie unten auf den Link Passwort zuruecksetzen.<br><br>
                        
                        Passwort zuruecksetzen: <br>
                        <b><a href="http://localhost/Praxisprojekt/php/login/change-password.php?reset='.$code.'">http://localhost/Praxisprojekt/php/login/change-password.php?reset='.$code.'</a></b><br><br>
                        
                        Mit freundlichen Gruessen,<br>
                        Dein Kundenportal Team';
                        
                    $mail->send();
                    // Successful message
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    // Error message
                    echo "Nachricht konnte nicht versendet werden. Mailer Fehler: {$mail->ErrorInfo}";
                }
                echo "</div>";
                // Error message
                $msg = "<div class='alert alert-info'>Wir haben dir per email einen Bestätigung Link gesendet.</div>";        
            }         
        } else {
            // Error message
            $msg = "<div class='alert alert-danger'>Es gibt kein Konto mit der angegebenen Email-Adresse</div>";
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
        <title>Passwort vergessen</title>
    </head>
    <body>
        <div class="forgotpw">
            <div class="forgotpw__box">
                <button onclick="window.location.href = '../../index.php'" class="btn-close">&times;</button>
                <div class="forgotpw__picture"></div>
                <div class="forgotpw__login">
                    <div class="forgotpw__loginform">
                        <h1 class="forgotpw__change-pw-headline">Passwort vergessen</h1>
                        <?php echo $msg; ?>
                        <form action="" method="POST" id="form"> 
                        <div class="tbox">
                                <i class="fa fa-user"></i>
                                <input type="text" name="email" placeholder="E-Mail" autocomplete="off" id="email">
                                <i class="fas fa-check-circle info_icon"></i>
                                <i class="fas fa-exclamation-circle info_icon"></i>
                                <p>Error message</p>
                            </div>
                            <button class="forgotpw__btn" name="submit">Zurücksetzen</button>
                            <div class="forgotpw__links">
                                <a class="forgotpw__aForg" href="indexLogin.php">Zum Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="forgotpw__content">
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
