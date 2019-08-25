<?php
if (isset($_POST["recherche"])) {
	include_once("../background/dph.php");

	$recherche = mysqli_real_escape_string($conn, $_POST["recherche"]);

	$nombre_resultat = 5;

	$sql = "SELECT * FROM formations WHERE formation_nom LIKE '$recherche%' AND formation_public='1' ORDER BY formation_nom";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck>0) {
		$nb_proposition = 0;
		while ($row = mysqli_fetch_assoc($result) and $nb_proposition < $nombre_resultat) {
			$nb_proposition = $nb_proposition + 1;
			echo '<option>'.$row["formation_nom"].'</option>';
		}
	}
}
