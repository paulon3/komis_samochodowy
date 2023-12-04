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
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootsnav.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

<h1>Dodaj Auto</h1>
  <form action="insert.php" method="post">
    <p>Model: <input type="text" name="model" required></p>
    <p>Marka: <input type="text" name="marka" required></p>
    <p>Cena: <input type="number" name="cena" required></p>
	<p>Przebieg: <input type="number" name="przebieg" required></p>
    <p><input type="submit" value="Dodaj Samochód!"></p>
  </form>
    
</body>
</html>

<?php
	echo '<p> [ <a href="komis.php">STRONA GŁÓWNA!</a> ]</p>';
?>