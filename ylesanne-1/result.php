<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
    <a href="index.php">Mine tagasi</a>
    <?php 


		print_r($_GET);
		//$username = $_GET["username"]
		//$age = $_GET["age"]

		

		if ($_GET['age'] >= 18) {
			echo "Tere " . $_GET["username"] ." ! Olete lehekülje vaatamiseks piisavalt vana.";
		} else {
			echo "Tere " . $_GET["username"] ." ! Kahjuks olete liiga noor selle lehekülje külastamiseks.";
		}

		//if (!isset ($age)) || !isset($username) ) {
		//	echo "Tekkis viga, vanus või kasutajanimi puudub";
		//}
		
?>
  </body>
</html>
