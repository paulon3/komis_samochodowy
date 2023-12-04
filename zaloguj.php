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
	else {
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
	
		// Pobranie zahaszowanego hasła z bazy danych dla danego użytkownika.
		$sql = "SELECT * FROM uzytkowicy WHERE log_in = ?";
		$stmt = $polaczenie->prepare($sql);
		$stmt->bind_param("s", $login);
		$stmt->execute();
		$result = $stmt->get_result();
	
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$zahaszowaneZBazy = $row['haslo'];
		
			// Porównanie hasła wprowadzonego przez użytkownika z zahaszowanym hasłem z bazy danych.
			if (password_verify($haslo, $zahaszowaneZBazy)) {
				$ilu_userow = $result->num_rows;
				if ($ilu_userow > 0) {
					$_SESSION['zalogowany'] = true;
		
					// Ponowne ustawienie wskaźnika wyników na początek
					$result->data_seek(0);
		
					$wiersz = $result->fetch_assoc();
					$_SESSION['id'] = $wiersz['ID_user'];
					$_SESSION['nazwisko'] = $wiersz['nazwisko'];
					$_SESSION['imie'] = $wiersz['imie'];
					$_SESSION['sadlo'] = $wiersz['wartosc_transakcji'];
					$_SESSION['admin'] = $wiersz['uprawnienia'];
		
					unset($_SESSION['blad']);
					$result->free_result();
					header('Location: komis.php');
					exit; // Dodaj exit, aby zakończyć wykonywanie skryptu po przekierowaniu.
				}
			}
		
			else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>