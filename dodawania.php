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
	<link rel="stylesheet" href="css/font-awsome.min.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>


    <?php
		require_once "connect.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	    $sql = "SELECT ID_auta, marka, model, cena, przebieg, klient_id FROM auta";
		$result = $polaczenie->query($sql);
?>
	
	<h3>DOŁADOWANIE : </h3>
  <form action="doladowanie.php" method="post">
    <p>KWOTA DOŁADOWANIA : <input type="number" name="doladowanie" required></p>
    <p><input type="submit" value="DOŁADUJ!"></p>
  </form>

    
</body>
</html>

<?php
	echo '<p>  <a href="komis.php">STRONA GŁÓWNA</a> </p>';
?>