<?php 

session_start();
$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
include("function.php");

$login = isset($_POST['login']) ? $_POST['login'] : null;
$passwd = isset($_POST['passwd']) ? $_POST['passwd'] : null;
$message = "";
if (!$login || !$passwd)
{
	$message = 'Vous devez renseigner votre login <br> et votre mot de passe.';
}
else if ($user = check_account_password($connection, $login, $passwd))
{
	delete_user($connection, $login, $passwd);
	$_SESSION[login] = "";
	header('Location: acceuil.php');
}
else
	$message = 'Mot de passe ou login incorrect';

 ?>
<html>
	<head>
	<meta charset="UTF-8">
		<TITLE>Apero !</TITLE>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
			<div class="haut">
			<img class="biere" src="Cheers.jpg">
			<div class="titre"><p> Apéro chez tibo !</p></div>
			<div class="login">
			<div><a class="boutton" href="accueil_log.php">Retour</a> <br /></div>
			</div>
		</div>
		<br />
		<div class="menu">
		<?php echo "$message" ?>
		</div>
		<div class="millieu">
		</div>
	</body>
</html>