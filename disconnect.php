<?php
	session_start();
	header("Location: acceuil.php");
	$_SESSION[login] = "";

?>