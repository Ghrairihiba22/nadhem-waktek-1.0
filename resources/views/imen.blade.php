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

    <!-- * Plugins Needed for the Project * -->
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
               <a class="navbar-brand ms-5"  href="{{ url('welcome') }}" style="margin-left: 50px">
                    <img class="rounded-circle img-fluid" src="images/team/logo.png" style="width:170px;height:170px;">

                </a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ url('welcome') }}">Acceuil</a>
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
                        <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3 primary-shadow">Connexion</a>
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
    
    <!-- about us -->
    <section class="section-lg about pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">A PROPOS DE NOUS</h2>
                </div>
                <div class="col-lg-12 mb-100">
                 <p>Notre plateforme vous offre la facilité de définir vos disponibilités, gérer vos événements, prendre des notes , consulter vos statistiques et personnaliser votre calendrier selon vos préférences.
                 Dans notre application, vous pouvez :<br>
                    <br>
                    - Ajouter vos propres tâches<br>
                    - Partager vos réunions en fonction de votre disponibilité<br>
                    - Surveiller la réception de votre contenu<br>
                    - Prendre des notes pendant vos réunions<br>
                    - Simplifier votre organisation quotidienne<br>
                    - Gagner du temps<br>
                    - Organiser et attribuer des tâches<br>
                    - Gérer votre emploi du temps facilement<br>
                    - Aussi vous pouvez consulter votre statistiques.<br>
                     </div>

    
        <!-- background shapes -->
        <img src="images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
        <img src="images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
        <img src="images/background-shape/green-half-cycle.png" alt="background-shape"
            class="about-bg-3 up-down-animation">
        <img src="images/background-shape/seo-ball-1.png" alt="background-shape"
            class="about-bg-4 left-right-animation">
        <img src="images/background-shape/team-bg-triangle.png" alt="background-shape"
            class="about-bg-5 up-down-animation">
        <img src="images/background-shape/service-half-cycle.png" alt="background-shape"
            class="about-bg-6 left-right-animation">
    </section>
    <!-- /about us -->

        <!-- our vision -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-title">Notre vision </h2>
                        <p>Cette application révolutionnaire offre une réelle valeur 
                            ajoutée en proposant aux utilisateurs une expérience fluide et efficace dans
                             la gestion de leurs horaires et événements. <br>
                             Grâce à ses fonctionnalités de planification simplifiée et d'organisation optimisée,
                              les utilisateurs pourront gérer leur emploi du temps de manière plus efficace. <br>
                              Ils pourront consacrer davantage de temps aux événements essentielles, 
                              ce qui améliorera leur productivité globale. En simplifiant la gestion des horaires et en facilitant la coordination des événements, cette application apporte une solution pratique et 
                            efficace pour optimiser la gestion du temps et des ressources.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/about/vision.png" alt="vision" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>
        <!-- /our vision -->

       
    </section>
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
                        <li class="list-inline-item active"><a href=" {{ url('welcome') }}">Acceuil</a></li>
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
     <a class="email" href=https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox><i class="ti-email"></i>
                            
                            </a>
                            nadhemwaktek2023@gmail.com
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