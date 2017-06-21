<?php
session_start();
$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
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
			<div><a class="boutton" href="Modify.php">Modifier</a></div>
			<br />
			<div><a class="boutton" href="unregister.php">Se Desinscrire</a></div>
			<br />
			<div><a class="boutton" href="acceuil.php">Se Deconnecter</a></div>
			</div>
		</div>
		<div class="menu">
			<ul>
  				<li><a class="active" href="accueil_log.php">APETIRIFS</a></li>
  				<li><a href="biere_log.php">BIERES</a></li>
 				<li><a href="spiritueux_log.php">SPIRITUEUX</a></li>
  				<li><a href="vins_log.php">VINS</a></li>
  				<a href="panier.php"><img class="panier" src="https://slack-imgs.com/?c=1&url=https%3A%2F%2Fcdn.pixabay.com%2Fphoto%2F2014%2F06%2F19%2F00%2F59%2Fshopping-cart-371980_640.png"></a>
  				<?php echo "$_SESSION[nombre]"; ?>
				</ul>
		</div>
		<div class="millieu">
			<div class="pan">
				Votre panier :
				<br/>
				<br/>
				<table class="pan">
				<tr>
					<?php
						if ($_SESSION[panier])	
							foreach ($_SESSION[panier] as $key => $value)
							{
								if ($_SESSION[panier][$key] >= 1)
								{
									echo "$key\nx\n";
									echo $_SESSION[panier][$key];
									echo "<br/>";
								}
							}
					?>
					</tr>
					<tr>
					<p class="total">
					<?php
					if ($_SESSION[panier])
					{
					foreach ($_SESSION[panier] as $key => $value)
						if ($_SESSION[panier][$key] >= 1)
							$error = 1;
					if ($error === 1)
					{
						echo "TOTAL :";
						$tab = mysqli_query($connection, "SELECT * FROM articles");
						foreach ($_SESSION[panier] as $ke => $va)
						{
							if ($_SESSION[panier][$ke] >= 1)
							{
								foreach ($tab as $key => $value)
								 	foreach ($value as $key2 => $value2)
								 	{
								 		if ($value[nom] === $ke)
								 		{
								 			$resultat = $resultat + $_SESSION[panier][$ke]*$value[prix];
								 			break ;
								 		}
								 	}
							}
						}
					}
				}
					else
						echo "Votre panier est vide";
					echo $resultat." €";
					?>
					<button type="button" class="valid" onclick="location.href = 'validpanier.php?nom=$value&red=panier_log.php'">Valider mon panier</button>
					<button type="button" class="valid" onclick="location.href = 'viderpanier.php?nom=$value&red=panier_log.php'">Vider mon panier</button>
					</tr>
					<?php echo $_GET[err]; ?>
					</p>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>