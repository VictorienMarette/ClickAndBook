<?php
	include_once("includes/background/dph.php");

	if(isset($_GET["isbn"])){
		$ISBN = mysqli_real_escape_string($conn, $_GET["isbn"]);

		$sql = "SELECT * FROM livres WHERE livre_ISBN='$ISBN'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck == 1){
			if($trow = mysqli_fetch_assoc($result)){
				$row = $trow;
			}
		}
		if(!isset($row)){
			$sql = "SELECT * FROM livres WHERE livre_nom='$ISBN'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck == 1){
				if($trow = mysqli_fetch_assoc($result)){
					$row = $trow;
				}
			}
		}
	}

	if(isset($row)){
		$title = "Click&Book - ".$row['livre_nom'];
	}
	
  	include_once("includes/modules/header.php");
 
	if(isset($row)){
		echo '
		<div id="test-popup">
		<div class="align-lien-o">
			<h2 href="#" class="titre-livre tte">
				'.$row["livre_nom"].'
			</h2>
			<a  class="lien-amazon-p" href="'.$row["livre_lien"].'">Acheter sur Amazon<img class="amazon-image" src="amazon-logo.png"></a>
		</div>	
	</div>';
	}
?>

	<div class="conteneur-product-page">
				<?php
				if (isset($row)) {
					echo '<div class="conteneur-haut-milieu-bas">
					<div class="conteneur-haut">
						<div class="conteneur-product-photos">';
					if(file_exists("uploads/image_livre/".$row["livre_ISBN"].".jpg")){
						echo '<img class="image-product" src="uploads/image_livre/'.$row["livre_ISBN"].'.jpg">';
					}elseif (file_exists("uploads/image_livre/".$row["livre_ISBN"].".jpeg")) {
						echo '<img class="image-product" src="uploads/image_livre/'.$row["livre_ISBN"].'.jpeg">';
					}elseif (file_exists("uploads/image_livre/".$row["livre_ISBN"].".png")) {
						echo '<img class="image-product" src="uploads/image_livre/'.$row["livre_ISBN"].'.png">';
					}else{
						echo '<img class="image-product" src="uploads/bases/livre.jpg">';
					}

					echo '</div>
					<div class="conteneur-info-product">
						<h2 class="titre-info-product">'.$row["livre_nom"].'</h2>
						<p class="texte-info-product y1h">'.$row["livre_description"].'</p>
					<div class="conteneur-renseignement">
						<p class="titre-cate"><span class="iwc">Auteur :</span><a class="info-livre" href="#"> '.$row["livre_auteur"].'</a></p>
						<p class="titre-cate"><span class="iwc">Edition :</span><a class="info-livre" href="#"> '.$row["livre_edition"].'</a></p>';

					echo '<p class="titre-cate"><span class="iwc">Lycée :</span><a class="info-livre" href="#">';

					$sql = "SELECT * FROM formations WHERE formation_livres LIKE '%$ISBN%' AND formation_public ='1' AND formation_souscategoriebool='0'";
					$result = mysqli_query($conn, $sql);

					$first = true;

					while ($rowf = mysqli_fetch_assoc($result)) {
						if ($first == true) {
							$first = false;
						}else{
							echo ", ";
						}
						echo $rowf['formation_nom'];
					}
	     
					echo '</a></p>	
					<a  class="lien-amazon-product" href="'.$row["livre_lien"].'">Acheter sur Amazon<img class="amazon-image" src="amazon-logo.png"></a>
					<div class="conteneur-reseaux">
							<p class="titre-cate"><span class="iwc">Partager :</span></p>
								<a class="lien-share-1" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/psychoschoolVal/article.php?narticle=pastore">
									<img class="icon-share" src="facebook-share.png" alt="">
								</a>
								<a class="lien-share-2" href="https://twitter.com/home?status=http%3A//localhost/psychoschoolVal/article.php?narticle=pastore">
									<img class="icon-share" src="twitter-share.png" alt="">
								</a>
								<a class="lien-share-3" href="https://plus.google.com/share?url=http%3A//localhost/psychoschoolVal/article.php?narticle=pastore">
									<img class="icon-share-2" src="google-share.png" alt="">
								</a>
						</div>
					</div>
					</div>
				</div>
				<div class="conteneur-milieu">
					<h2 class="titre-info-product titre-22 vw">Description</h2>';
						echo '<p class="texte-info-product y1h bbg">'.$row["livre_description"].'</p>';
						echo '</div>
							<div class="conteneur-bas">
								<h2 class="titre-info-product titre-22">Vous pouriez également être intéressé par :</h2>
								<div class="conteneur-voir-plus">
									<div class="conteneur-div-produit-recherche-petit">
					<div class="conteneur-image-livre-petit">
						<img class="image-livre-petit" src="image-livre.jpg">
					</div>
					<div class="conteneur-info-livre-petit">
						<a href="#" class="titre-livre-petit">
							Intégrer HEC seconde
						</a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">By Emmanuel Vayleux</p></a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">Edition 2019</p></a>
						<div class="align-lien-petit"><a  class="lien-amazon-petit" href="#">Acheter sur Amazon<img class="amazon-image-petit" src="amazon-logo.png"></a></div>
					</div>
					</div>

					<div class="conteneur-div-produit-recherche-petit">
					<div class="conteneur-image-livre-petit">
						<img class="image-livre-petit" src="image-livre.jpg">
					</div>
					<div class="conteneur-info-livre-petit">
						<a href="#" class="titre-livre-petit">
							Intégrer HEC seconde
						</a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">By Emmanuel Vayleux</p></a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">Edition 2019</p></a>
						<div class="align-lien-petit"><a  class="lien-amazon-petit" href="#">Acheter sur Amazon<img class="amazon-image-petit" src="amazon-logo.png"></a></div>
					</div>
					</div>

					<div class="conteneur-div-produit-recherche-petit">
					<div class="conteneur-image-livre-petit">
						<img class="image-livre-petit" src="image-livre.jpg">
					</div>
					<div class="conteneur-info-livre-petit">
						<a href="#" class="titre-livre-petit">
							Intégrer HEC seconde
						</a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">By Emmanuel Vayleux</p></a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">Edition 2019</p></a>
						<div class="align-lien-petit"><a  class="lien-amazon-petit" href="#">Acheter sur Amazon<img class="amazon-image-petit" src="amazon-logo.png"></a></div>
					</div>
					</div>

					<div class="conteneur-div-produit-recherche-petit">
					<div class="conteneur-image-livre-petit">
						<img class="image-livre-petit" src="image-livre.jpg">
					</div>
					<div class="conteneur-info-livre-petit">
						<a href="#" class="titre-livre-petit">
							Intégrer HEC seconde
						</a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">By Emmanuel Vayleux</p></a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">Edition 2019</p></a>
						<div class="align-lien-petit"><a  class="lien-amazon-petit" href="#">Acheter sur Amazon<img class="amazon-image-petit" src="amazon-logo.png"></a></div>
					</div>
					</div>

					<div class="conteneur-div-produit-recherche-petit">
					<div class="conteneur-image-livre-petit">
						<img class="image-livre-petit" src="image-livre.jpg">
					</div>
					<div class="conteneur-info-livre-petit">
						<a href="#" class="titre-livre-petit">
							Intégrer HEC seconde
						</a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">By Emmanuel Vayleux</p></a>
						<a class="lien-info-petit" href="#"><p class="info-livre-petit">Edition 2019</p></a>
						<div class="align-lien-petit"><a  class="lien-amazon-petit" href="#">Acheter sur Amazon<img class="amazon-image-petit" src="amazon-logo.png"></a></div>
					</div>
					</div>
								</div>
							</div>
							
						</div>';
					}else{
						echo "Ce livre n'existe pas";
					}
				?>
		
	</div>
	<?php
		include_once("includes/modules/footer.php");
	?>

	<div class="test-notre">
		
	</div>

</body>
</html>