<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: komis.php');
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
	<section style="margin=30px">
	<h1>Zaloguj się do komisu samochodowego!<br /><br /></h1>
	
	<form action="zaloguj.php" method="post">
	
		<p>Login: <br /> <input type="text" name="login" /> <br /></p>
		<p>Hasło: <br /> <input type="password" name="haslo" /> <br /><br /></p>
		<input type="submit" value="Zaloguj się" />
	
	</form>
	
    <img></img>
</section>
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>