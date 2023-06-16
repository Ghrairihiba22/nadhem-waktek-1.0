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
                        <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3 primary-shadow">Connexion</a>

                        <a href="{{ route('register') }}" class="btn btn-primary ml-lg-3 primary-shadow">Inscription</a>

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
                    <p>Notre platforme va vous permettre d'avoir la facilité de définiser vos disponibilités , gérer vos
                        tàches , ajouter vos notes suite à vos réunions et de manipuler votre calendrier selon votre
                        choix .</p>
                    <P>Dans notre application vous pouvez:
                        -Ajoutez votre propre tàches .<BR>
                        -Partager vos réunions selon votre disponibilitées .<BR>
                        -Surveillez la façon dont votre contenu est reçu.<BR>
                        -Prendre des notes au cours de votre reunion.<BR>
                        -Organiser votre vie simplement .<BR>
                        -Gagner du temps .<BR>
                        -Organiser et d'attribuer des tâches.<BR>
                        -Gérez facilement votre emploi du temps.<BR>
                        -Coordonner les horaires en quelques secondes .</P>
                </div>

            </div>
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

    <!-- product -->
    <section class="section product" style="background-image: url(images/backgrounds/about-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Our Product</h2>
                    <p class="mb-100">Far far away, behind the word mountains, far from the <br> countries Vokalia and
                        Consonantia.</p>
                </div>
                <div class="col-md-4 col-sm-6 mb-50">
                    <a href="#"><img src="images/product/product-1.jpg" alt="product-img"
                            class="rounded w-100 img-fluid"></a>
                </div>
                <div class="col-md-4 col-sm-6 mb-50">
                    <a href="#"><img src="images/product/product-2.jpg" alt="product-img"
                            class="rounded w-100 img-fluid"></a>
                </div>
                <div class="col-md-4 col-sm-6 mb-50">
                    <a href="#"><img src="images/product/product-3.jpg" alt="product-img"
                            class="rounded w-100 img-fluid"></a>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary">Explore More Product</a>
                </div>
            </div>
        </div>

        <!-- our vision -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-title">Our Vision</h2>
                        <p>Far far away, behind the word mountains,
                            far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they
                            live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/about/vision.png" alt="vision" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>
        <!-- /our vision -->

        <!-- clients -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Our Clients</h2>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-1.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-2.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-3.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-4.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-5.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-6.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-7.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                            <li class="list-inline-item mx-5 mb-5"><a href="#"><img
                                        src="images/clients-logo/client-8.png" alt="clients-logo"
                                        class="img-fluid"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /clients -->
    </section>
    <!-- /product -->



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
