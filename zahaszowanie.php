<?php

	
	
		require_once "connect.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

        $sql = "SELECT * FROM uzytkowicy;";
        $result = $polaczenie->query($sql);

			if ($result->num_rows > 0) {

  				while($row = $result->fetch_assoc()) {
                    $user_id = $row['ID_user'];

                    $hashed_password = password_hash($row['haslo'], PASSWORD_DEFAULT);

    				$sql2 = "UPDATE uzytkowicy SET haslo=? WHERE ID_user=?";
                    $wynik2 = $polaczenie->prepare($sql2);
                    $wynik2->bind_param("si", $hashed_password, $user_id);
                    $wynik2->execute();
  				}
				
			} 
        

        header('Location: komis.php');
?>