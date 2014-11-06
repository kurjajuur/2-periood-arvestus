

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>
    <?php

	$username = $_POST["username"];
	$sex = $_POST["sex"];
	
	if (!isset($username) || $username == "" and !isset($sex)) {
		echo "Palun minge tagasi ja täitke väljad.";
	}
	elseif (!isset($sex) and isset($username)) {
		echo "Palun minge tagasi ja valige sugu.";
	}
	elseif (!isset($username) || $username == "" and isset($sex)) {
		echo "Palun minge tagasi ja sisestage nimi.";
	}
	elseif (isset($username) and isset($sex)) {
		echo "Tere {$username}! Tundub et olete {$sex}.";
	}

	//otsetee lisamine lõhub kogu koodi, sõltumata paigutusest, 
	//seetõttu on välja kommenteeritud
	/*
	if(!isset($_POST["submit"])){
	 		echo "Tundub, et sattusid siia otseteed pidi."; 
		}
	*/
	?>

    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
