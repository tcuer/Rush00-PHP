<?php

	session_start();
	header("location: $_GET[red]");
	$_SESSION[nombre]++;
	$_SESSION[panier][$_GET[nom]]++;
?>