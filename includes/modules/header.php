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
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <?php
    if (isset($title)) {
      echo '<title>'.$title.'</title>';
    }else{
      echo '<title>Clic&Book</title>';
    }
  ?>

<script type="text/javascript">
  $(window).scroll(function(){
    if ($(window).scrollTop()<500) {
  $('#test-popup').fadeOut(200);
    }else{
  $('#test-popup').fadeIn(200); 
    }
  });
</script>

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
    $('.container-filter').hide();
$('.widget-tri').hover(function(){
        $('.container-filter').fadeIn(200);
});
})
  </script>

      <script type="text/javascript">
$(document).ready(function(){
$('.widget-tri').mouseleave(function(){
        $('.container-filter').fadeOut(200);
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
    <form method="GET" action="div-produit-recherche.php">
      <input class="input-recherche-2" type="text" name="code" placeholder="Recherche"><button class="button-recherche-2" type="submit"><img class="image-search-2" src="img/blue-loupe.png" alt=""></button>
    </form>
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
      <li><a class="simple" href="index.php">Accueil</a></li>
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
    <form method="GET" action="div-produit-recherche.php">
      <input class="input-recherche-2" type="text" name="recherche" placeholder="Recherche"><button class="button-recherche-2" type="submit" name="submit"><img class="image-search-2" src="img/blue-loupe.png" alt=""></button>
    </form>
  </div>

</div>

</li>

    </ul>
  </div>
</div>
  </nav>