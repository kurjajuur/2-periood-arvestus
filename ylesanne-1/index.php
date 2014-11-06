<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>

  <body>
  	<?php
		$username = "nipitiri";
		$age = 13;
		$link = "result.php";

		echo '<a href="' . $link . "?username=" . $username . "?age=" . $age . '">Teisele lehele</a>';
	?>

  </body>
</html>
