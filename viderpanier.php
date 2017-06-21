<?php

session_start();
if ($_SESSION[panier])
	foreach ($_SESSION[panier] as $key => $value)
		$_SESSION[panier][$key] = 0;
	$_SESSION[nombre] = 0;
	header("location: $_GET[red]");
?>