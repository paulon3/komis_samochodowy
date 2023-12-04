Tutaj spis wszystkich wystawionych przezemnie aut
Będzie też przycisk dodawania

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
		$zakupione_auto=$_SESSION['id'];

	    $sql = "SELECT ID_auta, marka, model, cena, przebieg, klient_id FROM auta WHERE klient_id='$zakupione_auto'  ";
		$result = $polaczenie->query($sql);

		echo "<table border='1'>";
		echo "<tr><th>ID</th><th>Marka</th><th>Model</th><th>Cena</th><th>Przebieg</th><th>Właściciel</th></tr>";

		// Wypełnianie tabeli danymi z bazy
			if ($result->num_rows > 0) {
  // Wyświetlanie każdego wiersza z wyniku
  				while($row = $result->fetch_assoc()) {
    				echo "<tr><td>" . $row["ID_auta"] . "</td><td>" . $row["marka"] . "</td><td>" . $row["model"] . "</td><td>" . $row["cena"] . "</td><td>" . $row["przebieg"] . "</td><td>" . $row["klient_id"] . "</td></tr>";
  				}
				
			} 
			else {
	// Wyświetlanie komunikatu, jeśli tabela jest pusta
  				echo "<tr><td colspan='3'>Nie posiadzasz aut na sprzedarz</td></tr>";
			}

    ?>
	


    
</body>
</html>

<?php
	echo '<p> [ <a href="komis.php">STRONA GŁÓWNA</a> ]</p>';
?>