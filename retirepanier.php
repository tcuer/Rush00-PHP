<?php

	session_start();
	header("location: $_GET[red]");
	if ($_SESSION[panier][$_GET[nom]] > 0)
	{
		$_SESSION[nombre]--;
		$_SESSION[panier][$_GET[nom]]--;
	}
?>