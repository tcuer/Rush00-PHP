<?php 
	session_start();
$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
include("function.php");
	function connect_user($user)
	{
		if ($_SESSION[login] === "admin")
			header('Location: acceuil_admin.php');
		else
			header('Location: accueil_log.php');
	}
$login = isset($_POST['login']) ? $_POST['login'] : null;
$passwd = isset($_POST['passwd']) ? $_POST['passwd'] : null;
$message = "";
if (!$login || !$passwd)
{
	$message = 'Vous devez renseigner votre login <br> et votre mot de passe.';
}
else if ($user = check_account_password($connection, $login, $passwd))
{
	$_SESSION[login] = $login;
	connect_user($user);
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
			<div><a class="boutton" href="login.php">Retour</a> <br /></div>
			<br />
			<?php echo $message;?>
		</div>
		</div>
		<div class="menu">
			<ul>
  				<li><a class="active" href="acceuil.php">APETIRIFS</a></li>
  				<li><a href="biere.php">BIERES</a></li>
 				<li><a href="spiritueux.php">SPIRITUEUX</a></li>
  				<li><a href="vins.php">VINS</a></li>
  				<a href="panier.php"><img class="panier" src="https://slack-imgs.com/?c=1&url=https%3A%2F%2Fcdn.pixabay.com%2Fphoto%2F2014%2F06%2F19%2F00%2F59%2Fshopping-cart-371980_640.png"></a>
  				<?php echo "$_SESSION[nombre]"; ?>
				</ul>
		</div>
		<div class="millieu">
		<?php
			$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
			$tab = mysqli_query($connection, "SELECT * FROM articles WHERE cata='Apetirif'");
			echo "<table>";

			foreach ($tab as $key)
			{
				echo "<tr>";
				foreach ($key as $key2 =>$value)
				{
					if ($key2 === 'nom')
						echo "<td>$value <button class='plus' onclick=\"location.href = 'retirepanier.php?nom=$value&red=acceuil.php'\"> - </button> 

						<button class='plus' onclick=\"location.href = 'ajoutpanier.php?nom=$value&red=acceuil.php&red=acceuil.php'\"> + </button>";
					if ($key2 === 'prix')
						echo "$value €</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			
		?>

		</div>
	</body>
</html>