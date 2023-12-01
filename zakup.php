<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
    require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    $zakupione_auto = $_POST['id-kupna'];
    $sql = "SELECT * FROM auta WHERE ID_auta='$zakupione_auto'";
    $wynik = @$polaczenie->query($sql);
    $wiersz = $wynik->fetch_assoc();
    $cena = $wiersz['cena']; 
    $klient = $wiersz['klient_id'];

    $sql2 = "UPDATE uzytkowicy SET wartosc_transakcji = wartosc_transakcji + '$cena' WHERE ID_user='$klient'";
    $wynik2 = @$polaczenie->prepare($sql2);
    $wynik2->execute();
    $_SESSION['sadlo']=$_SESSION['sadlo']-$cena;

    $sql3 = "DELETE FROM auta WHERE ID_auta = '$zakupione_auto'";
    $wynik3 = @$polaczenie->prepare($sql3);
    $wynik3->execute();

    header('Location: komis.php');

?>