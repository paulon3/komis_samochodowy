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

	<div>
    <?php
	    echo "<p>Cześć ".$_SESSION['nazwisko'].' '.$_SESSION['imie'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
        echo "<p>Dodaj auto na sprzedarz : <a href=dodajauto.php>Wystaw Auto!</a></p>";
        echo "<p>Kup Auto : <a href=kupauto.php>Kup teraz!</a></p>";
        echo "<p>Sadlo twojego konta wynosi : ".$_SESSION['sadlo'].",00 zł.</p>";
        echo "<p>Twoje auta na sprzedarz : <a href=mojeauta.php>Sprawdz!</a></p>";
		echo "<p>Dodaj środki do swojego konta : <a href=dodawania.php>DOŁADUJ!</a></p>"
    ?>
	</div>

    
</body>
</html>