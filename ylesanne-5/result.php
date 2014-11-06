<?php session_start(); 
$username = $_SESSION["username"];
$password = $_SESSION["password"];

$validUsername = "silja";
$validPassword = "parool1";
//parooli jätsin meelega teiseks, et negatiivset tulemust testida
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
  </head>

  <body>

    <?php
        if (($username == $validUsername) && ($password == $validPassword)){
          echo "Kasutajanimi ja parool on õiged.";
        } else {
          echo "Kasutajanimi ja/või parool ei klapi.";
        }
    ?>

    <a href="index.php">Mine tagasi</a>
  </body>
</html>
