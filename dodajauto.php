<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>KOMIS SAMOCHODOWY</title>
</head>

<body>

<h1>Dodaj Auto</h1>
  <form action="insert.php" method="post">
    <p>Model: <input type="text" name="model" required></p>
    <p>Marka: <input type="text" name="marka" required></p>
    <p>Cena: <input type="number" name="cena" required></p>
	<p>Przebieg: <input type="number" name="przebieg" required></p>
    <p><input type="submit" value="Dodaj rekord"></p>
  </form>
    
</body>
</html>

<?php
	echo '<p> [ <a href="komis.php">STRONA GŁÓWNA!</a> ]</p>';
?>