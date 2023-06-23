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

    <!-- theme meta -->
    <meta name="theme-name" content="dtox" />

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
                            <a class="nav-link"  href="{{ url('welcome') }}">Acceuil</a>
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

    <!-- hero area -->
    <section class="hero-section hero" data-background=""
        style="background-image: url(images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1">
                    <h1 class="mb-3">Planifier vos événements avec<br>
                        NADHEM WAKTEK</h1>
                    <p class="mb-4">'Nadhem Waktek' est une application web qui facilite la planication des événements
                        ,
                        les utilisateurs peuvent
                        envoyer un lien qui se connecte aux calendriers de chacun à tout moment.</p>
                    <div
                        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        <a href="{{ url('redirect/google') }}" class="btn btn-primary ml-lg-3 primary-shadow">
                            Connexion avec Google</a></a>

                        <img class="img-fluid w-100 banner-image" src="images/hero-area/banner.png" alt="banner-img">
                    </div>
                </div>
            </div>
            <!-- background shapes -->
            <div id="scene">
                <img class="img-fluid hero-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png"
                    alt="">
                <img class="img-fluid hero-bg-2 left-right-animation" src="images/background-shape/seo-ball-1.png"
                    alt="">
                <img class="img-fluid hero-bg-3 left-right-animation" src="images/background-shape/seo-half-cycle.png"
                    alt="">
                <img class="img-fluid hero-bg-4 up-down-animation" src="images/background-shape/green-dot.png"
                    alt="">
                <img class="img-fluid hero-bg-5 left-right-animation" src="images/background-shape/blue-half-cycle.png"
                    alt="">
                <img class="img-fluid hero-bg-6 up-down-animation" src="images/background-shape/seo-ball-1.png"
                    alt="">
                <img class="img-fluid hero-bg-7 left-right-animation"
                    src="images/background-shape/yellow-triangle.png" alt="">
                <img class="img-fluid hero-bg-8 up-down-animation"
                    src="images/background-shape/service-half-cycle.png" alt="">
                <img class="img-fluid hero-bg-9 up-down-animation" src="images/background-shape/team-bg-triangle.png"
                    alt="">
            </div>
    </section>
    <!-- /hero-area -->

    <!-- feature -->
    <br>
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Nos fonctionalités</h2>
                    <p class="mb-100">
                        <br>
                    </p>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-calendar feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Calendrier</h4>
                            <p>Découvrez notre calendrier interactif, l'outil idéal pour planifier tous vos événements
                                avec facilité et précision.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout-cta-left feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Notes</h4>
                            <p>Créez des notes d'événements avec facilité sur notre site de planification. Ajoutez tous
                                les détails importants pour garantir le succès de votre événement.</p>
                        </div>
                    </div>
                </div>

                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Taskboard</h4>
                            <p>Un taskboard innovant, est conçu pour vous informer en temps réel des événements passés,
                                présents et à venir..</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-dashboard feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Dashboard</h4>
                            <p>Le dashboard de notre site de planification d'événements offre une vue claire et complète
                                de toutes les informations essentielles nécessaires pour organiser et gérer vos
                                événements avec succès.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="images/background-shape/feature-bg-1.png" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="images/background-shape/feature-bg-2.png" alt="bg-shape">
    </section>
    <!-- /feature -->

    <!-- marketing -->
    <section class="section-lg seo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="seo-image">
                        <img class="img-fluid" src="images/marketing/cal.jpeg" width="150%" height="90%"
                            style="width:600px ;height:450px">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">Calendrier</h2>
                    <p style="width:500px;height:500px">Découvrez notre calendrier interactif, votre compagnon ultime
                        pour la planification d'événements.
                        Organisez facilement votre emploi du temps, visualisez les dates clés et gardez une trace de
                        tous les événements importants grâce à notre interface conviviale et intuitive. Avec notre
                        calendrier, vous pouvez créer des événements personnalisés, inviter des participants et même
                        recevoir des rappels automatiques pour ne jamais manquer une occasion spéciale.
                    </p>
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid seo-bg" src="images/backgrounds/seo-bg.png" alt="seo-bg">
        <!-- background-shape -->
        <img class="seo-bg-shape-1 left-right-animation" src="images/background-shape/seo-ball-1.png" alt="bg-shape">
        <img class="seo-bg-shape-2 up-down-animation" src="images/background-shape/seo-half-cycle.png"
            alt="bg-shape">
        <img class="seo-bg-shape-3 left-right-animation" src="images/background-shape/seo-ball-2.png" alt="bg-shape">
    </section>
    <!-- /marketing -->
    <section class="section-lg service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Note</h2>
                    <p class="mb-4">La note est un outil essentiel dans notre site de planification d'événements,
                        permettant aux utilisateurs de capturer et d'organiser facilement leurs idées, leurs événements
                        et leurs inspirations. Que ce soit pour noter les détails clés d'un événement, établir une liste
                        de choses à faire ou simplement prendre des notes créatives, notre fonctionnalité de note offre
                        une flexibilité totale pour rendre la planification d'événements plus efficace et agréable.</p>

                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <img class="img-fluid layer-3" src="images/marketing/note.jpeg" alt="service" width="150%"
                        height="90%" style="width:600px ;height:450px">
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid service-bg" src="images/backgrounds/service-bg.png" alt="service-bg">
        <!-- background shapes -->
        <img class="service-bg-shape-1 up-down-animation" src="images/background-shape/service-half-cycle.png"
            alt="background-shape">
        <img class="service-bg-shape-2 left-right-animation" src="images/background-shape/feature-bg-2.png"
            alt="background-shape">
    </section>
    <section class="section-lg seo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="seo-image">
                        <img class="img-fluid layer-3" src="images/service/service.png" alt="service"
                            width="150%" height="90%" style="width:600px ;height:450px">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">Taskboard</h2>
                    <p style="width:500px;height:500px">La taskboard du site de planification des événements constitue
                        une plateforme visuelle dynamique
                        qui regroupe de manière organisée les événements en cours, passés et à venir. Elle offre une vue
                        globale et détaillée de toutes les événements nécessaires à la réalisation des événements,
                        permettant ainsi une gestion efficace du processus de planification. Cette interface intuitive
                        facilite la coordination des équipes, la répartition des responsabilités et le suivi des
                        progrès, tout en favorisant une communication transparente et fluide entre les différents
                        acteurs impliqués.
                    </p>
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid seo-bg" src="images/backgrounds/seo-bg.png" alt="seo-bg">
        <!-- background-shape -->
        <img class="seo-bg-shape-1 left-right-animation" src="images/background-shape/seo-ball-1.png" alt="bg-shape">
        <img class="seo-bg-shape-2 up-down-animation" src="images/background-shape/seo-half-cycle.png"
            alt="bg-shape">
        <img class="seo-bg-shape-3 left-right-animation" src="images/background-shape/seo-ball-2.png" alt="bg-shape">
    </section>
    <!-- service -->
    <section class="section-lg service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Dashboard</h2>
                    <p class="mb-4">
                        Le dashboard du site de planification d'événements offre une expérience
                        utilisateur conviviale et puissante, regroupant de manière intelligente toutes les
                        fonctionnalités nécessaires pour orchestrer des événements réussis. Grâce à une interface
                        soigneusement conçue, les utilisateurs peuvent visualiser en temps réel les détails de leurs
                        événements, gérer les réservations de lieux, coordonner les fournisseurs, planifier les
                        activités et suivre les invitations et les confirmations.
                        <br> Avec ce tableau de bord complet et intuitif, la planification d'événements devient plus
                        simple, plus efficace et plus gratifiante pour tous les organisateurs."
                    </p>

                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <img class="img-fluid layer-3" src="images/hero-area/banner.png" alt="service" width="150%"
                        height="90%" style="width:600px ;height:450px">
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid service-bg" src="images/backgrounds/service-bg.png" alt="service-bg">
        <!-- background shapes -->
        <img class="service-bg-shape-1 up-down-animation" src="images/background-shape/service-half-cycle.png"
            alt="background-shape">
        <img class="service-bg-shape-2 left-right-animation" src="images/background-shape/feature-bg-2.png"
            alt="background-shape">
    </section>
    <!-- /service -->

    <!-- team -->
    <section class="section-lg team" id="team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Notre équipe</h2>
                    <p class="mb-100"><strong>Voici notre équipe, qui développe avec passion cette application
                        </strong></p>
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="team-slider">
                    <!-- team-member -->
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-111.jpg"
                                    alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Imen MEJRI</h4>

                            </div>
                        </div>

                    </div>
                    <!-- team-member -->

                    <!-- team-member -->

                    <!-- team-member -->

                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-2.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Hiba GHRAIRI</h4>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- backgound image -->
        <img src="images/backgrounds/team-bg.png" alt="team-bg" class="img-fluid team-bg">
        <!-- background shapes -->
        <img class="team-bg-shape-1 up-down-animation" src="images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="team-bg-shape-2 left-right-animation" src="images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="team-bg-shape-3 left-right-animation" src="images/background-shape/team-bg-triangle.png"
            alt="background-shape">
        <img class="team-bg-shape-4 up-down-animation img-fluid" src="images/background-shape/team-bg-dots.png"
            alt="background-shape">
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
                        <li class="list-inline-item"><a class="page-scroll" href="#feature">Nos fonctionalités</a>
                        </li>
                        <li class="list-inline-item"><a href="{{ url('/imen') }}">A propos de nous</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="{{ url('/hiba') }}">Nos
                                objectifs</a></li>

                    </ul>
                </nav>






                <!-- footer social icon -->
                <nav class="col-12">
                    <ul class="list-inline text-lg-right text-center social-icon">
                        <li class="list-inline-item">
                            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <br>
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
