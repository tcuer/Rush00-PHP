<?php
session_start();
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
			<div><a class="boutton" href="disconnect.php">Se Deconnecter</a></div>
			</div>
		</div>
		<div class="menu">
			<ul>
  				<li><a class="active" href="accueil_log.php">APETIRIFS</a></li>
  				<li><a href="biere_log.php">BIERES</a></li>
 				<li><a href="spiritueux_log.php">SPIRITUEUX</a></li>
  				<li><a href="vins_log.php">VINS</a></li>
  				<a href="panier_log.php"><img class="panier" src="https://slack-imgs.com/?c=1&url=https%3A%2F%2Fcdn.pixabay.com%2Fphoto%2F2014%2F06%2F19%2F00%2F59%2Fshopping-cart-371980_640.png"></a>
  				<?php echo "$_SESSION[nombre]"; ?>
				</ul>
		</div>
		<div class="millieu">
		<?php
			$connection = mysqli_connect('localhost', 'root', 'rootroot', 'data');
			$tab = mysqli_query($connection, "SELECT * FROM articles WHERE catb='Biere'");
			echo "<table>";

			foreach ($tab as $key)
			{
				echo "<tr>";
				foreach ($key as $key2 =>$value)
				{
					if ($key2 === 'nom')
						echo "<td>$value <button class='plus' onclick=\"location.href = 'retirepanier.php?nom=$value&red=biere_log.php'\"> - </button> 

						<button class='plus' onclick=\"location.href = 'ajoutpanier.php?nom=$value&red=biere_log.php'\"> + </button>";
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