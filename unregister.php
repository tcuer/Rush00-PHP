<?php
session_start();
?>

<html>
	<head>
	<?php include("function.php"); ?>
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
		<form method="post" action="accueil_unregistered.php">
				Identifiant: <input name="login" value="" />
				<br />
				Mot de passe: <input name="passwd" type="password" value=""/>
				<button name="submit" value="OK">submit</button>
				</form>
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
						echo "<td>$value <button class='plus' onclick=\"location.href = 'retirepanier.php?nom=$value&red=accueil_log.php'\"> - </button> 

						<button class='plus' onclick=\"location.href = 'ajoutpanier.php?nom=$value&red=accueil_log.php'\"> + </button>";
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