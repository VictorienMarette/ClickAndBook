<!DOCTYPE html>
<html>
<head>
<?php
	include_once("includes/background/dph.php");

	$formation_public = true;

	if(isset($_GET["code"])){
		$formation_code = mysqli_real_escape_string($conn, $_GET["code"]);


		$sql = "SELECT * FROM formations WHERE formation_code='$formation_code'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck == 1){
			if($trow = mysqli_fetch_assoc($result)){
				$row = $trow;
			}
		}

		if (!isset($row)) {
			$sql = "SELECT * FROM formations WHERE formation_nom='$formation_code'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck == 1){
				if($trow = mysqli_fetch_assoc($result)){
					if ($trow['formation_public'] == 1) {
						$row = $trow;
					}else{
						$formation_public = false;
					}
				}
			}
		}
	}

	if(isset($row)){
		echo "<title>Click&Book - ".$row['formation_nom']."</title>";
	}else{
		echo "<title>Click&Book - Formation Inexistante</title>";
	}

	?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

	<div class="mise-en-page">

	<?php
	if(isset($row)){
		echo '<div class="conteneur-lycée">';
		if(file_exists("uploads/image_formation/".$row["formation_index"].".jpg")){
			echo '<img class="image-lycée" src="uploads/image_formation/'.$row["formation_index"].'.jpg">';
		}elseif (file_exists("uploads/image_formation/".$row["formation_index"].".jpeg")) {
			echo '<img class="image-lycée" src="uploads/image_formation/'.$row["formation_index"].'.jpeg">';
		}elseif (file_exists("uploads/image_formation/".$row["formation_index"].".png")) {
			echo '<img class="image-lycée" src="uploads/image_formation/'.$row["formation_index"].'.png">';
		}else{
			echo '<img class="image-lycée" src="uploads/bases/formation.jpg">';
		}
		$lien_amazon = "#";
		if ($row['formation_souscategoriebool'] == 0) {
			$lien_amazon = $row["formation_lien"];
		}else{
			$index_categorie = $row['formation_souscategorieindex'];

			$sql = "SELECT * FROM formations WHERE formation_index='$index_categorie'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck == 1) {
				if ($rowsc = mysqli_fetch_assoc($result)) {
					$lien_amazon = $rowsc["formation_lien"];
				}
			}
		}
		echo '<h2 class="nom-lycée">'.$row["formation_nom"].'</h2>
		<div class="conteneur-lien-amazon-2">
			<div class="align-lien-v"><a  class="lien-amazon" href="'.$lien_amazon.'">Acheter sur Amazon<img class="amazon-image-2" src="amazon-logo.png"></a>
		</div>
	</div>
	</div>';
		echo '<div class="soulignement"></div>
	<h2 class="nom-lycée yy">Contenu détaillé de la liste :</h2>';

		$ISBNs = [];
			
		if ($row['formation_souscategoriebool'] == 0) {
			$liste_livres = $row["formation_livres"];
			$ISBNs = explode(",", $liste_livres);
		}else{
			if (isset($rowsc)) {
				$liste_livres = $rowsc["formation_livres"];
				$ISBNs = explode(",", $liste_livres);
			}
		}

		foreach ($ISBNs as $ISBNlivre) {
			$sql = "SELECT * FROM livres WHERE livre_ISBN='$ISBNlivre'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck == 1){
				if($rowl = mysqli_fetch_assoc($result)){
					echo '<div class="conteneur-aperçu">
					<div class="conteneur-image-lien">
						<div class="conteneur-image-livre-2">';

					if(file_exists("uploads/image_livre/".$rowl["livre_ISBN"].".jpg")){
						echo '<img class="image-livre-2" src="uploads/image_livre/'.$rowl["livre_ISBN"].'.jpg">';
					}elseif (file_exists("uploads/image_livre/".$rowl["livre_ISBN"].".jpeg")) {
						echo '<img class="image-livre-2" src="uploads/image_livre/'.$rowl["livre_ISBN"].'.jpeg">';
					}elseif (file_exists("uploads/image_livre/".$rowl["livre_ISBN"].".png")) {
						echo '<img class="image-livre-2" src="uploads/image_livre/'.$rowl["livre_ISBN"].'.png">';
					}else{
						echo '<img class="image-livre-2" src="uploads/bases/livre.jpg">';
					}
					echo '</div>
					</div>';

					echo '<div class="conteneur-description-2">
							<a class="lien-titre-description" href="#"><h3 class="titre-description-2">'.$rowl['livre_nom'].'</h3></a>
							<p class="texte-description-2">'.$rowl['livre_description'].'</p>
							<div class="conteneur-lien-amazon-2">
								<div class="align-lien-v"><a  class="lien-amazon" href="'.$rowl['livre_lien'].'">Acheter sur Amazon<img class="amazon-image-2" src="amazon-logo.png"></a>
							</div>
						</div>
					</div>
						
					</div>';
				}
			}
		}

	}elseif ($formation_public == false) {
		echo '<p>Cette formation n`est pas public</p><br>
		<a href="index.php">Menu<a>';
	}else{
		echo '<p>Cette formation n`existe pas</p><br>
		<a href="index.php">Menu<a>';
	}
	?>

</div>

</body>
</html>