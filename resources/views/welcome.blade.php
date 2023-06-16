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
                <img class="img-fluid hero-bg-7 left-right-animation" src="images/background-shape/yellow-triangle.png"
                    alt="">
                <img class="img-fluid hero-bg-8 up-down-animation"
                    src="images/background-shape/service-half-cycle.png" alt="">
                <img class="img-fluid hero-bg-9 up-down-animation" src="images/background-shape/team-bg-triangle.png"
                    alt="">
            </div>
    </section>
    <!-- /hero-area -->

    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Nos fonctionalités</h2>
                    <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident</p>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-ruler-pencil feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Calendrier</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
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
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-split-v-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Taskboard</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Dashboard</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
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
                        <img class="img-fluid" src="images/marketing/cal.jpeg" width="150%" height="90%">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">A Complete Range Of SEO Marketing Services!</h2>
                    <p>Far far away, behind the word mountains, far
                        from the countries Vokalia and Consonantia.<br>
                        There live the blind texts. Separated they
                        live in Bookmarksgrove right at the coast of
                        the Semantics, a large language ocean.
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

    <!-- service -->
    <section class="section-lg service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Powerful Layout From Top To Bottom</h2>
                    <p class="mb-4">Far far away, behind the word mountains,
                        far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they
                        live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean.</p>
                    <ul class="pl-0 service-list">
                        <li><i class="ti-layout-tab-window text-purple"></i>Responsive on any device</li>
                        <li><i class="ti-layout-placeholder text-purple"></i>Very easy to customize</li>
                        <li><i class="ti-support text-purple"></i>Effective support</li>
                    </ul>
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <img class="img-fluid layer-3" src="images/service/service.png" alt="service">
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
                    <h2 class="section-title">Our Team</h2>
                    <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu<br>
                        fugiat nulla pariatur. Excepteur sint occaecat </p>
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="team-slider">
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-1.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Becroft</h4>
                                <h6 class="text-color">web designer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-2.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>John Doe</h4>
                                <h6 class="text-color">web developer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-3.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Erik Ligas</h4>
                                <h6 class="text-color">Programmer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live
                            the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-1.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Erik Ligas</h4>
                                <h6 class="text-color">Programmer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live
                            the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-2.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>John Doe</h4>
                                <h6 class="text-color">web developer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. S eparated they</p>
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
    <!-- /team -->

    <!-- pricing -->

    <!-- /pricing -->

    <!-- client logo slider -->

    <!-- /client logo slider -->

    <!-- newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Receive updates, news and deals</p>
                </div>
                <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                    <form action="#">
                        <div class="input-wrapper position-relative">
                            <input type="email" class="newsletter-form" id="newsletter"
                                placeholder="Enter your email">
                            <button type="submit" value="send" class="btn newsletter-btn">subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="newsletter-bg-shape left-right-animation" src="images/background-shape/seo-ball-2.png"
            alt="background-shape">
    </section>
    <!-- /newsletter -->

    <!-- footer -->
    <footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="index.html">
                        <H4><STRONG> NADHEM WAKTEK</STRONG></H4>
                    </a>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="index.html">Home</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#feature">Nos fonctionalités</a>
                        </li>
                        <li class="list-inline-item"><a href="{{ url('/imen') }}">A propos de nous</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#team">Nos objectifs</a></li>

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
