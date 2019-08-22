<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>clic&book</title>

  <script type="text/javascript">
$(document).ready(function(){
    $('.container').hide();
$('.trou').hover(function(){
        $('.container').fadeIn(100);
});
})
  </script>
    <script type="text/javascript">
$(document).ready(function(){
$('.container').mouseleave(function(){
        $('.container').fadeOut(100);
});
})
  </script>
      <script type="text/javascript">
$(document).ready(function(){
$('.simple').hover(function(){
        $('.container').fadeOut(100);
});
})
  </script>

  <script>
  $(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
      var page = $(this).attr('href'); // Page cible
      var speed = 900; // Durée de l'animation (en ms)
      $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
      return false;
    });
  });
</script>

      <script type="text/javascript">
        $(document).ready(function() {
            $(".fa-bars").on("click", function() {
                  $(".fa-bars").hide(200);
                  $(".menu-tel").fadeIn(200);
                  $(".fa-times").fadeIn(200);

            });
      });
      </script>

      <script type="text/javascript">
        $(document).ready(function() {
            $(".fa-times").on("click", function() {
                  $(".fa-times").hide(200);
                  $(".menu-tel").fadeOut(200);
                  $(".fa-bars").fadeIn(200);

            });
      });
      </script>

      <script type="text/javascript">
            function menutel(){
                  document.getElementById("nav-test").style.background = "rgba(0,0,0,0)";
            }
      </script>

      <script type="text/javascript">
            function menutelfin(){
                  document.getElementById("nav-test").style.background= "rgba(0,102,204,1)";
            }
      </script>

</head>
<body>

  <nav id="nav-test">

  <div class="menu-tel">
    <i class="fa fa-times fa-2x" onclick="menutelfin()"></i>
  <div class="one">
    <div class="align-23">
    <input class="input-recherche-2" type="text" name="recherche" placeholder="Recherche"><button class="button-recherche-2" type="submit" name="submit"><img class="image-search-2" src="img/blue-loupe.png" alt=""></button>
    </div>
    <li class="liste-tel"><a class="simple" href="#">Accueil</a></li>
    <li class="liste-tel"><a class="simple" href="#">Livre</a></li>
  </div>
  </div>









<div class="menu-ordi">

  <p class="titre-site">Clic<span class="logo">&</span>Book.fr</p>  
    <div class="balle"><i class="fa fa-bars fa-2x" onclick="menutel()"></i></div>
  <div class="menu-sans-titre">
    <ul>
      <li><a class="simple" href="#">Accueil</a></li>
      <li><a class="trou js-scrollTo" href="#matière-container">Livres<img class="icon-arrow" src="img/sort-down.png"></a>
    <div class="container">
      <div class="triangle">
        
      </div>
        <ul class="test">
          <li class="liste-sub"><a class="active" href="#">CPGE</a></li>
          <li class="liste-sub"><a class="active" href="#">Université</a></li>
          <li class="liste-sub"><a class="active" href="#">Commerce</a></li>
          <li class="liste-sub"><a class="active" href="#">Ingénieur</a></li>
      </ul>
    </div>
  </li>
  <li><a class="simple" href="#"></a></li>
 <div class="align-2">
    <input class="input-recherche-2" type="text" name="recherche" placeholder="Recherche"><button class="button-recherche-2" type="submit" name="submit"><img class="image-search-2" src="img/blue-loupe.png" alt=""></button>
  </div>

</div>

</li>

    </ul>
  </div>
</div>
  </nav>

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
    <input class="input-recherche" type="text" name="recherche" placeholder="Quel est le nom de ton établissement ?"><button class="button-recherche" type="submit" name="submit"><img class="image-search" src="img/loupe.png" alt=""></button>
  </div>
  <a class="js-scrollTo" href="#matière-container"><img class="fleche-down" src="img/arrow-down.png"></a>
  </div>
</header>

<div id="matière-container">
    <h2 class="titre-noir placement">Tu recherches des manuels en particulier ?</h2>

    <div class="matière-liste">

      <div class="matière">
        <div class="rond-image rond-1"><img class="image-matière" src="img/cpge.png"></div>
        <h2 class="titre-matière">
          CPGE
        </h2>
        <p class="texte-matière">
          Toutes les matières sont réunies pour te permettre aussi bien de progresser dans tes matières faibles que de te perfectionner dans tes matières fortes.
        </p>
        <div class="align-3"><a class="lien-description" href="#">Voir matières</a></div>
      </div>

       <div class="matière">
        <div class="rond-image rond-3"><img class="image-matière" src="img/uni.png"></div>
        <h2 class="titre-matière">
          Universités
        </h2>
        <p class="texte-matière">
          Toutes les matières sont réunies pour te permettre aussi bien de progresser dans tes matières faibles que de te perfectionner dans tes matières fortes.
        </p>
        <div class="align-3"><a class="lien-description" href="#">Voir matières</a></div>
      </div>

       <div class="matière">
        <div class="rond-image rond-2"><img class="image-matière" src="img/engineer.png"></div>
        <h2 class="titre-matière">
          Ingénieur
        </h2>
        <p class="texte-matière">
          Toutes les matières sont réunies pour te permettre aussi bien de progresser dans tes matières faibles que de te perfectionner dans tes matières fortes.
        </p>
        <div class="align-3"><a class="lien-description" href="#">Voir matières</a></div>
      </div>

       <div class="matière">
        <div class="rond-image rond-4"><img class="image-matière" src="img/business.png"></div>
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

<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Clic&Book</h3>

        <p class="footer-links">
          <a class="js-scrollTo" href="#header-overlay">Accueil</a>
          ·
          <a class="js-scrollTo" href="#section-vehicule">Livres</a>
          ·
          <a class="js-scrollTo" href="#section-contact">Articles</a>
          ·
          <a class="js-scrollTo" href="#section-contact">Contact</a>
        </p>

        <p class="footer-company-name">Clic & Book &copy; 2019</p>
        <p class="footer-company-name space"><a>Mentions légales</a></p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>5 rue Jean Mermoz</span>L'Etang-la-ville, France</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+33 6 42 98 87 30</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:clicandbook@gmail.com">clicandbook@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>A propos de Clic & Book</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>

        </div>

      </div>

    </footer>

</body>
</html>