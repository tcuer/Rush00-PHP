<?php
	session_start();
	header("location: $_GET[red]");
	$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
	if (!empty($_SESSION[login]))
	{
		$tab = serialize($_SESSION[panier]);
		$sql = "INSERT INTO panier (login, articles) VALUES ('$_SESSION[login]', '$tab')";
		mysqli_query($connection, $sql);
	}
	else
		header("location: $_GET[red]?err=Vous devez etre connecte pour valider le panier.");
?>