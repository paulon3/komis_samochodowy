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


    <?php
	    echo "<p>Cześć ".$_SESSION['nazwisko'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
        echo "<p>Dodaj auto na sprzedarz : <a href=dodajauto.php>Wystaw Auto!</a></p>";
        echo "<p>Kup Auto : <a href=kupauto.php>Kup teraz!</a></p>";
        echo "<p>Sadlo twojego konta wynosi : ".$_SESSION['sadlo']."</p>";
        echo "<p>Twoje auta na sprzedarz : <a href=mojeauta.php>Sprawdz!</a></p>";
    ?>


    
</body>
</html>