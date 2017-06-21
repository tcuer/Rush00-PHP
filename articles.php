<?php

function articles($connection)
{
	$result = mysqli_query($connection, "SELECT * FROM articles");
	 if (!$result->num_rows)
	 {
	 	$pd = hash("whirlpool", "admin");
	 $sql = "INSERT INTO user (login, passwd) VALUES ('admin', '$pd')";
	 mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Noily Prat', 15.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Ricard', 18.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('51', 18.65, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Porto', 12.78, 'Apetirif', '', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('JB', 13.25, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Clan Campbell', 13.45, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('William Peel', 11.25, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Mojito', 15.95, 'Apetirif', '', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Rose Pamplemousse', 12.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Liqueur de Noix', 12.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Liqueur de Citron', 12.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Liqueur de Mure', 12.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Liqueur de Banane', 12.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Liqueur de Prune', 12.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Liqueur de Peche', 12.95, 'Apetirif', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);


	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Jenlain', 2.35, 'Biere', '', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('8.6', 0.95, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Rince Cochon', 2.95, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Leffe', 1.55, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Delirium', 2.55, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Duff', 4.55, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('La Gavroche', 1.80, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Hilano', 2.85, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Jupiler', 1.63, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('La Chouffe', 3.55, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Troubadour', 0.95, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Paulaner', 2.05, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Gordon', 2.15, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('8.6 Gold', 0.98, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Quintine', 3.00, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Pietra', 1.48, '', 'Biere', '', '')";
	mysqli_query($connection, $sql);


	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Rhum', 11.48, '', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Vodka', 13.47, '', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Wodka', 6.95, '', '', 'Spiritueux', '')";
	mysqli_query($connection, $sql);


	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Saint Emilion', 16.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Bourgogne', 6.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Argentine', 7.85, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Cote Rhone', 5.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Cote Provence', 4.75, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Villagoise', 2.00, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Chili', 8.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Sauterne', 12.05, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Margaux', 18.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Provence', 3.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Petit Caboulot', 1.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Val fruite', 1.85, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Vieux Pape', 3.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Jurancon', 12.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('Demoiselle', 11.55, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
	$sql = "INSERT INTO articles (nom, prix, cata, catb, catc, catd) VALUES ('De Table', 0.95, '', '', '', 'Vins')";
	mysqli_query($connection, $sql);
}
}
?>