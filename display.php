<?php

function display_apetirif($connection)
{
	$tab = mysqli_query($connection, "SELECT * FROM articles WHERE cata='Apetirif'");

	foreach ($tab as $key)
	{
		foreach ($key as $key2 =>$value)
		{
			print($value);
			// print("<br/>");
		}
	}

}

?>