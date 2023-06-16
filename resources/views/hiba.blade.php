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
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('app') }}">
                    <br>
                    <div><strong>NADHEM <br>WAKTEK</strong></div>
                </a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/welcome') }}">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#feature">Nos <br>fonctionalités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/imen') }}">A propos<br> de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/hiba') }}">Nos objectifs</a>
                        </li>


                    </ul>

                    <div
                        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3 primary-shadow">Login</a>

                        <a href="{{ route('register') }}" class="btn btn-primary ml-lg-3 primary-shadow">Register</a>

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
                        <h4>Organisation des réunions à distance :</h4>
                        <p>Les réunions virtuelles éliminent le besoin pour l'équipe et les participants d'être
                            physiquement au même endroit pendant la réunion. Pendant la pandémie de covid-19, les
                            réunions à distance sont de plus en plus courantes.</p>
                    </div>
                </div>


                <!-- service item -->
                <div class="col-sm-6 mb-4 translate-y-150">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon blue mb-4"></i>
                        <h4>Confirmation et rappels automatisés</h4>
                        <p>Vous n'avez plus besoin de faire phone appels ou envoyer des e-mails pour confirmer l'heure
                            de la réunion avec les participants. Tout ce que vous avez à faire est d'ajouter les
                            participants à la réunion, et ils seront automatiquement invités à confirmer.</p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon green mb-4"></i>
                        <h4>Réaliser une économie:</h4>
                        <p>organiser une réunion de travail en ligne vous permet de réaliser des économies non
                            négligeables. Non seulement vos collaborateurs ne se déplacent pas, mais vous n’avez plus
                            besoin de louer une salle ni de prévoir des collations..</p>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-sm-6 mb-4 translate-y-150">
                    <div class="rounded bg-white p-4 shadow-primary">
                        <i class="ti-layers-alt round-icon orange mb-4"></i>
                        <h4>Déterminer la date convenable:</h4>
                        <p>vous permet d’effectuer rapidement des sondages sur les disponibilités des participants à la
                            réunion : vous créez l’événement, chacun reçoit son invitation et vote pour les créneaux
                            qu’il souhaite, puis vous déterminez la date qui convient le mieux..</p>
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

    <!-- footer -->
    <footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="index.html">
                        <h4><strong>NADHEM <BR> WAKTEK </strong></h4>
                    </a>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="index.html">Home</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#feature">Feature</a></li>
                        <li class="list-inline-item"><a href="about.html">About</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#team">Team</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
                        <li class="list-inline-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- footer social icon -->
                <nav class="col-12">
                    <ul class="list-inline text-lg-right text-center social-icon">
                        <li class="list-inline-item">
                            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="linkedin" href="#"><i class="ti-linkedin"></i></a>
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

</body>

</html>
