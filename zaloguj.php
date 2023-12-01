<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
        $sql = "SELECT * FROM uzytkowicy WHERE log_in='$login' AND haslo='$haslo'";

        if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkowicy WHERE log_in='%s' AND haslo='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				

                $wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['ID_user'];
                $_SESSION['nazwisko'] = $wiersz['nazwisko'];
				$_SESSION['imie'] = $wiersz['imie'];			
                $_SESSION['sadlo'] = $wiersz['wartosc_transakcji'];
				
				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: komis.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>