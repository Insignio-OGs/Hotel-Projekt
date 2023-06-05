<?php
if(!isset($_SESSION)){ 
    session_start();
}
require_once('../include.php');
$db = new DBHandler();
$userinfo = $db->getUserInfo(); 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->setUserInfo($_POST);
  }

?>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link href="../../dist/main.css" type="text/css" rel="stylesheet">
    <title>Profileinstellungen</title>
</head>
<body>
    <section class="app">
        <aside class="sidebar">
            <header>
                <span class="presentDash">Dashboard</span>    
            </header>
            <nav class="sidebar-nav">
            <ul>
                <li>
                    <a href="profileSettings.php"><i class="bx bx-user-circle"></i> <span>Profileinstellungen</span></a>
                    <ul class="nav-flyout">
                        <li>
                        <a href="Buchungen.php"><i class="bx bxs-bar-chart-alt-2"></i>Inaktive Buchungen</a>
                        </li>
                        <li>
                        <a href='../../index.php'><i class="bx bx-home-alt icon"></i>Home</a>
                        </li>
                    </ul>
                </li>
                <li class="last">
                    <a href='logout.php'><i class="bx bx-log-out icon"></i> <span class="">Logout</span></a> 
                </li>
            </ul>
            </nav>
        </aside>
        <div>
  <h3>Profileinstellungen</h3>
  <form method="POST" action="profileSettings.php">
  <ul>
    <li>
      <input placeholder="Benutzername" class="proInt" type="text" id="username" name="username" value="<?php echo $userinfo[0][1]; ?>">

    </li>
    <li>
      <input placeholder="Vorname" type="text" id="first_name" name="first_name" value="<?php echo $userinfo[0][4]; ?>">

    </li>
    <li>
      <input placeholder="Nachname" type="text" id="last_name" name="last_name" value="<?php echo $userinfo[0][5]; ?>">

    </li>
    <li>
      <input placeholder="E-Mail" type="text" id="email" name="email" value="<?php echo $userinfo[0][6]; ?>">

    </li>
    <li>
      <input placeholder="Passwort" type="password" id="password" name="password">
    </li>
    <li>
      <input placeholder="Passwort erneut eingeben" type="password" id="passwordcheck" name="passwordcheck">
    </li>
    <li>
      <input placeholder="Neues Passwort" type="password" id="passwordnew" name="passwordnew">
      <br><button type="submit" name="Speichern" value="Speichern">Speichern</button>
    </li>
  </ul>
</form>
</div>
    </section>    
</body>
</html>
