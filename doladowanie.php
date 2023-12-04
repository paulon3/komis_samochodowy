<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
		require_once "connect.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

        $dod = $_POST['doladowanie'];
        $idik = $_SESSION['id'];

        $sql = "UPDATE uzytkowicy SET wartosc_transakcji = wartosc_transakcji + '$dod' WHERE ID_user='$idik'";
        $wynik2 = @$polaczenie->prepare($sql);
        $wynik2->execute();

        $sql2 = "SELECT * FROM uzytkowicy WHERE ID_user='$idik'";
        $wynik = @$polaczenie->query($sql2);
        $wiersz = $wynik->fetch_assoc();

        $_SESSION['sadlo'] = $wiersz['wartosc_transakcji'];

        header('Location: komis.php');
?>