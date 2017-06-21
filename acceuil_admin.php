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
			</ul>
		</div>
		<div class="millieu">
			<table>
				<tr>
					<td>
					Creer utilisateur :
					<form method="post" action="create.php">
				Identifiant: <input name="login" value="" />
				<br />
				Mot de passe: <input name="passwd" type="password" value=""/>
				<button name="submit" value="OK">submit</button>
				</form>
					</td>
					<td>
					Modifier utilisateur :
					<form method="post" action="accueil_modify.php">
				Identifiant: <input name="login" value="" />
				<br />
				Ancien Mot de Passe: <input name="oldpasswd" type="password" value=""/>
				<br/>
				Nouveau Mot de Passe: <input name="passwd" type="password" value=""/>
				<button name="submit" value="OK">submit</button>
				</form>
		</div>
					</td>
					<td>
					Supprimer utilisateur :
					<form method="post" action="accueil_unregistered.php">
				Identifiant: <input name="login" value="" />
				<br />
				Mot de passe: <input name="passwd" type="password" value=""/>
				<button name="submit" value="OK">submit</button>
				</form>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>