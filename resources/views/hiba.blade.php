<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>NADHEM WAKTEK</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/Venobox/venobox.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


 
    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container-fluid ">
            <nav class="navbar navbar-expand-lg navbar-light ms-5">
                <a class="navbar-brand ms-5" href="{{ route('app') }}" style="margin-left: 50px">

                    <H4><strong>NADHEM <br>
                            WAKTEK</strong></H4>
                </a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('app') }}">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#feature">Nos fonctionalités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/imen') }}">A propos de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/hiba') }}">Nos objectifs</a>
                        </li>


                    </ul>

                    <div
                        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3 primary-shadow">Connexion </a>
                        <a href="{{ route('register') }}" class="btn btn-primary ml-lg-3 primary-shadow">Inscription</a>
                        <div class="form-submit-group">

                            <span class="icon-reverse-wrapper">




                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                            </button>
                        </div>

                    </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->

    <!-- service -->
    <section class="section-lg service-bg-image position-relative"
        style="background-image: url(images/backgrounds/service-page.png);">
        <div class="container">
            <div class="row">

                <!-- service item -->
                <div class="col-sm-6 mb-4">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon blue mb-4"></i>
                        <h4>Faciliter la planification:</h4>
                        <p>L'objectif principal de notre application est de simplifier le processus de planification des événements en ligne. Nous visons à fournir des fonctionnalités conviviales et intuitives qui permettront aux utilisateurs de créer, organiser et gérer facilement leurs événements virtuels..</p>
                    </div>
                </div>


                <!-- service item -->
                <div class="col-sm-6 mb-4 translate-y-150">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon blue mb-4"></i>
                        <h4>Optimiser la collaboration :</h4>
                        <p>Nous souhaitons offrir aux utilisateurs un espace de collaboration efficace pour travailler ensemble sur la planification des événements en ligne. Notre application permettra aux organisateurs d'inviter des membres d'équipe, de déléguer des tâches, de partager des fichiers et de communiquer en temps réel, favorisant ainsi une collaboration fluide et productive.</p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon green mb-4"></i>
                        <h4>Offrir des fonctionnalités personnalisées :</h4>
                        <p>Chaque événement est unique, c'est pourquoi nous nous engageons à fournir des fonctionnalités personnalisables dans notre application de planification. Les utilisateurs pourront ajuster les paramètres en fonction de leurs besoins spécifiques, tels que la gestion des invitations, la configuration des horaires, la personnalisation des formulaires d'inscription.</p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4 translate-y-150">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon orange mb-4"></i>
                        <h4>Assurer une expérience utilisateur de qualité : </h4>
                        <p> Nous accordons une grande importance à l'expérience utilisateur dans notre application. Notre objectif est de créer une interface conviviale, esthétiquement plaisante et intuitive. Nous veillerons à ce que les utilisateurs puissent naviguer facilement dans l'application, accéder rapidement aux fonctionnalités essentielles et bénéficier d'un support réactif en cas de besoin.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="service-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="">
        <img class="service-bg-2 left-right-animation" src="images/background-shape/seo-half-cycle.png" alt="">
        <img class="service-bg-3 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
        <img class="service-bg-4 left-right-animation" src="images/background-shape/green-dot.png" alt="">
        <img class="service-bg-5 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
    </section>
    <!-- /service -->
<button onclick="scrollToTop()" id="scroll-button" title="Go to top">Up</button>



   <!-- footer -->
   <footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="index.html">
                        <h3><strong>NADHEM WAKTEK</strong> </h3>
                    </a>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="{{ route('app') }}">Acceuil</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#feature">Nos fonctionalités</a></li>
                        <li class="list-inline-item"><a href="{{ url('/imen') }}">A propos de nous</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="{{ url('/hiba') }}">Nos objectifs</a></li>
                        
                    </ul>
                </nav>

                


                 

                <!-- footer social icon -->
                <nav class="col-12">
                    <ul class="list-inline text-lg-right text-center social-icon">
                        <li class="list-inline-item">
                            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
    <a class="email" href="mailto:your-email@example.com"><i class="ti-email"></i></a>
</li>
                       
                        <li class="list-inline-item">
                            <a class="black" href="#"><i class="ti-github"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- venobox -->
    <script src="plugins/Venobox/venobox.min.js"></script>
    <!-- aos -->
    <script src="plugins/aos/aos.js"></script>
    <!-- Main Script -->
    <script src="js/script.js"></script>
  <script>
    // JavaScript function to scroll to the top of the page
    function scrollToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    // Show or hide the scroll button based on scrolling position
    window.onscroll = function() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll-button").style.display = "block";
      } else {
        document.getElementById("scroll-button").style.display = "none";
      }
    };
  </script>

<style>
    /* CSS for the scroll button */
    #scroll-button {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      border: none;
      outline: none;
      background-color: #663399;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 50%;
    }

    #scroll-button:hover {
      background-color: #777;
    }
  </style>
</body>

</html>
