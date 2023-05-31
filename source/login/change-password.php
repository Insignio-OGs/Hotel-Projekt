<?php

    include('connection.php');
    require '../../vendor/autoload.php'; 

    $msg = "";
   
    if(isset($_GET["reset"]) ) { 
        $stmt = $con->prepare("SELECT * FROM users WHERE code = :code"); 
        $stmt->bindParam(":code", $_GET['reset']); 
        $stmt->execute();
        $codeCompare = $stmt->fetchColumn();
        if ($codeCompare) { 
            if (isset($_POST["submit"]) ) { 
                $password = $_POST['password'];
                $password_two = $_POST['password_two'];
                if ($password == $password_two) {
                    $password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);

                    $stmt = $con->prepare("UPDATE users SET password = :password, code='' WHERE code = :code"); 
                    $stmt->bindParam(":password", $password); 
                    $stmt->bindParam(":code", $_GET['reset']); 
                    
                    if ($stmt->execute()) {
                        header("Location: ../../index.php");
                    }
                } else {
                    // Error message
                    $msg = "Passwörter stimmen nicht überein!";
                }
            }
        } else {
            // Error message
            $msg = "<div class='alert alert-danger'>Reset Link stimmt nicht überein</div>";
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
        <title>Passwort ändern</title>
    </head>
    <body>
        <div class="changepw">
            <div class="changepw__box">
                <div class="changepw__picture"></div>
                <div class="changepw__login">
                    <div class="changepw__loginform">
                        <h1>Passwort ändern</h1>
                        <?php echo $msg; ?>
                        <form action="" method="POST" id="form"> 
                        <div class="tbox">
                                <i class="fa fa-user"></i>
                                <input type="password" name="password" placeholder="Passwort" autocomplete="off" id="password">
                                <i class="fas fa-check-circle info_icon"></i>
                                <i class="fas fa-exclamation-circle info_icon"></i>
                                <p>Error message</p>
                            </div>
                            <div class="tbox">
                                <i class="fa fa-user"></i>
                                <input type="password" name="password_two" placeholder="Passwort bestätigen" autocomplete="off" id="password_two">
                                <i class="fas fa-check-circle info_icon"></i>
                                <i class="fas fa-exclamation-circle info_icon"></i>
                                <p>Error message</p>
                            </div>
                            <button class="changepw__btn" name="submit">Passwort ändern</button>
                            <div class="changepw__links">
                                <a class="changepw__aReset" href="indexLogin.php">Zum Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="changepw__content">
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
