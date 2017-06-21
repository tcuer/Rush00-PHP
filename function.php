<?php

function create_user()
{
	$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
	if ($_POST[login] && $_POST[passwd])
	{
		$ok = mysqli_query($connection, "SELECT * FROM user WHERE login = '$_POST[login]'");
		if(mysqli_num_rows($ok))
		{
			echo "Identifiant deja utilise";
			return 0;
		}
		else
			echo "Votre compte a ete cree\n";
		$var = hash("whirlpool", $_POST[passwd]);
		$sql = "INSERT INTO user (login, passwd)
		VALUES ('$_POST[login]', '$var')";
		mysqli_query($connection, $sql);
	}
	else
		echo "Veuillez entrer toutes les informations\n";
	mysqli_close($connection);
}

function update_user($connection, $login, $oldpasswd, $passwd)
{
	$sql = "UPDATE user SET passwd='$passwd' WHERE login='$login'";
	mysqli_query($connection, $sql);
	mysqli_close($connection);
	
}

function delete_user($connection, $login, $passwd)
{
	$sql = "DELETE FROM user WHERE login='$_POST[login]'";
	mysqli_query($connection, $sql);
	mysqli_close($connection);
}

function check_account_password($connection, $login, $password)
{
	$pd = hash("whirlpool", $password);
	$sql = "SELECT * from user where login='$login' and passwd='$pd'";
	$result = mysqli_query($connection, $sql);
	return (mysqli_fetch_assoc($result));
}

?>