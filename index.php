<?php
  include_once("includes/modules/header.php");
?>

  <header class="v-header container-1">
    <div class="fullscreen-video-wrap">
    <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
    <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN>
     USE THE ONE ABOVE -->
    <img src="img/library.jpg">
  </div>
  <div id="header-overlay"></div>
  <div class="header-content text-md-center">
    <h1>Clic<span class="co">&</span>Book</h1>
    <p>
      Ne perdez pas de temps à commander vos livres scolaires, on le fait pour vous.
    </p>
  <div class="align">
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$("#bare_index").keyup(function(){
  				var recherche = $("#bare_index").val();
  				$.post("includes/ajax/sugestion.php",{
  					recherche: recherche
  				},function(data, status){
  					$("#datalist1").html(data);
  				});
  			});
  		});
  	</script>
    <form class="form-search" method="GET" action="div-produit-recherche.php" autocomplete="off">
      <input class="input-recherche" type="text" placeholder="Quel est le nom de ton établissement ?" name="code" list="datalist1" id="bare_index">
      <datalist id="datalist1"></datalist>
      <button class="button-recherche" type="submit"><img class="image-search" src="img/loupe.png" alt=""></button>
    </form>
  </div>
  <a class="js-scrollTo" href="#matière-container"><img class="fleche-down" src="img/arrow-down.png"></a>
  </div>
</header>

<div id="matière-container">
    <h2 class="titre-noir placement">Tu recherches des manuels en particulier ?</h2>

    <div class="matière-liste">

      <div class="matière">
        <div class="rond-image rond-1"><img class="image-matière" src="img/cpge.png"></div>
      <div class="responsive-matière">
        <h2 class="titre-matière">
          CPGE
        </h2>
        <p class="texte-matière">
          Toutes les matières sont réunies pour te permettre aussi bien de progresser dans tes matières faibles que de te perfectionner dans tes matières fortes.
        </p>
        <div class="align-3"><a class="lien-description" href="#">Voir matières</a></div>
      </div>
      </div>

       <div class="matière">
        <div class="rond-image rond-3"><img class="image-matière" src="img/uni.png"></div>
        <div class="responsive-matière">
        <h2 class="titre-matière">
          Universités
        </h2>
        <p class="texte-matière">
           Sont réunies pour te permettre aussi bien de progresser dans tes matières faibles que de te perfectionner dans tes matières fortes. Salut c'est Martin.
        </p>
        <div class="align-3"><a class="lien-description" href="#">Voir matières</a></div>
      </div>
      </div>

       <div class="matière">
        <div class="rond-image rond-2"><img class="image-matière" src="img/engineer.png"></div>
        <div class="responsive-matière">
        <h2 class="titre-matière">
          Ingénieur
        </h2>
        <p class="texte-matière">
          Toutes les matières sont réunies pour te permettre aussi bien de progresser dans tes matières faibles que de te perfectionner dans tes matières fortes.
        </p>
        <div class="align-3"><a class="lien-description" href="#">Voir matières</a></div>
      </div>
      </div>

       <div class="matière">
        <div class="rond-image rond-4"><img class="image-matière" src="img/business.png"></div>
        <div class="responsive-matière">
        <h2 class="titre-matière">
          Commerce
        </h2>
        <p class="texte-matière">
          Toutes les matières sont réunies pour te permettre aussi bien de progresser dans tes matières faibles que de te perfectionner dans tes matières fortes.
        </p>
        <div class="align-3"><a class="lien-description" href="#">Voir matières</a></div>
      </div>
      </div>
    </div>
</div>

<?php
  include_once("includes/modules/footer.php");
?>

</body>
</html>