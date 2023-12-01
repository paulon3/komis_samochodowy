<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
		require_once "connect.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $cena = $_POST['cena'];
        $przebieg = $_POST['przebieg'];
        $klient_id = $_SESSION['id'];

        $sql = "INSERT INTO auta (ID_auta, marka, model, cena, przebieg, klient_id) VALUES (NULL, '$marka', '$model', '$cena', '$przebieg', '$klient_id')";

        if ($polaczenie->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

        header('Location: komis.php');
?>