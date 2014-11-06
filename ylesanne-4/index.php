<?php
	 $name = "arvestus"; 
	 $value = "Cookie on olemas";
	 $expire = time() + (20);

	 setcookie($name, $value, $expire);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>

     <?php
     //esimesel laadimisel ütleb et cookiet ei ole, peale refresh-i ütleb et on
	 if (isset($_COOKIE["arvestus"])) {
	 	echo $value;
	 } else {
	 	echo "Cookie-t ei ole!";
	 }	 

	 ?>
  </body>
</html>
