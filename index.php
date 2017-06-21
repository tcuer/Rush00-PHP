<?php

include("install.php");
include("articles.php");
include("function.php");
include("display.php");
if (!$connection)
	$connection = install();
$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
articles($connection);
header("location: acceuil.php");
?>