<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AGCP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugin/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/foundation.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>

<body>
  <header class="navbar">
    <div class="navbar__container">
      <!-- Navbar do Foundation -->
        <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle="example-menu"></button>
            <div class="title-bar-title">Menu</div>
          </div>

          <div class="top-bar" id="example-menu">
            <div class="top-bar-left">
              <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">AGCP</li>
                <li><a href="#">One</a></li>    
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </div>
            <div class="top-bar-right">
              <ul class="menu">
                <li><input type="search" placeholder="Search"></li>
                <li><button type="button" class="button">Search</button></li>
              </ul>
            </div>
          </div>
    </div>
  </header>

  <!-- Carousel do Hero -->

  <section id="hero">
    <div class="hero__container">
        <div id="owl-changes" class="owl-carousel owl-theme">
            <div class="">
                <img class="" src="images/logo.jpg">
            </div> 
            <div class="">
                <img class="" src="images/logo.jpg">
            </div> 
            <div class="">
                <img class="" src="images/logo.jpg">
            </div>
            <div class="">
                <img class="" src="images/logo.jpg">
            </div> 
            <div class="">
                <img class="" src="images/logo.jpg">
            </div>    
        </div>
    </div>
  </section>
  
  <!-- Inicialização de plugins (Owl Carousel e Foundation) -->

  <script src="plugin/jquery/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="plugin/owlcarousel/owl.carousel.min.js"></script>
    <script>
      $(document).foundation();
    </script>

        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: "",
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        </script>   

</body>

</html>
