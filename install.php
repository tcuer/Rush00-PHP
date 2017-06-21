<?php

function install()
{
	$servername = "localhost";
	$username = "root";
	$password = "rootroot";
	$dataname = "data";

	$connection = mysqli_connect($servername, $username, $password);
	mysqli_query($connection, "CREATE DATABASE data");

	$connection = mysqli_connect($servername, $username, $password, $dataname);
	$table = "CREATE TABLE user
	(
		login VARCHAR(30), 
		passwd VARCHAR(600),
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY 
	)";
	$art = "CREATE TABLE articles
	(
		nom VARCHAR(30), 
		prix FLOAT(6),
		cata VARCHAR(30),
		catb VARCHAR(30),
		catc VARCHAR(30),
		catd VARCHAR(30)
	)";
	$table2 = "CREATE TABLE panier
	(
		login VARCHAR(30), 
		articles VARCHAR(4096)
	)";
	mysqli_query($connection, $table);
	mysqli_query($connection, $table2);
	mysqli_query($connection, $art);
	mysqli_close($connection);
	return $connection;
};

?>