        <!doctype html>
        <html class="no-js" lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Nathem_Waktek</title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">


            <link rel="icon" href="../favicon.ico" type="image/x-icon" />
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                crossorigin="anonymous">
            <!--  jQuery -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
            <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <!-- Custom CSS -->
            <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

            <!--multiple mail -->
            <link rel="stylesheet" href="css/lib/email.css" />
            <script src="js/lib/utils.js"></script>
            <script src="js/lib/emails-input.js"></script>


            <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css"> <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
            <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">            <link rel="stylesheet" href="../node_modules/icon-kit/dist/css/iconkit.min.css">
            <link rel="stylesheet" href="../node_modules/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
            <link rel="stylesheet" href="../node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">            <link rel="stylesheet" href="../dist/css/theme.min.css">
     <link rel="stylesheet" href="../dist/css/theme.min.css">            <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">     <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../node_modules/icon-kit/dist/css/iconkit.min.css">      <link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
  <link rel="stylesheet" href="../dist/css/theme.min.css">
        <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
            <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>        </head>

        <body>
        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                  
                                  
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                            
                        <div class="footer">
                            </div>
    </div>


 
    
                            <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                            <div class="dropdown">
                               <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
               @if($user->image)
            <img class="avatar" src="{{ asset('storage/images/' . $user->image) }}" alt=""></a>

                            @else
                                        <img class="avatar"  src="{{ asset('images/images/profile.png') }}" alt=""></a>

                           @endif


           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ url('/home') }}"><i class="ik ik-user dropdown-icon"></i> Profil</a>
            <a class="dropdown-item" href="{{ url('/dashboard') }}"><i class="ik ik-bar-chart-2"></i> Dashboard </a>
            <a class="dropdown-item" href="{{ url('/taskboard') }}"><i class="ik ik-server"></i> Taskboard</a>
            <a class="dropdown-item" href="{{ url('/hel') }}"><i class="ik ik-calendar"></i> Ma calendrier</a>
        </div>
    </div>

    </div>
    </div>
    </div>
            </header>
             <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                           
                            <span class="text">Nadhem Waktek</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item">
                                    <a href="{{ url('/dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ url('/home') }}"><i class="ik ik-menu"></i><span>Profile</span> 
                                </div>
                              
                               

                                <div class="nav-lavel">Apps</div>
                                <div class="nav-item">
                                    <a href="{{ url('/hel') }}"><i class="ik ik-calendar"></i><span>Calendar</span></a>
                                </div>
                                <div class="nav-item active">
                                    <a href="{{ url('/taskboard') }}"><i class="ik ik-server"></i><span>Taskboard</span></a>
                                </div>
    
                            </nav>
                        </div>
                    </div>
                </div>

              </div>
                
                    <div class="page-wrap">

                  <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="{{ url('/dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                               
                                <div class="app-item">
                                    <a href="{{ url('/home') }}"><i class="ik ik-users"></i><span>Account</span></a>
                                </div>
                               
                                <div class="app-item">
                                    <a href="{{ url('/hel') }}"><i class="ik ik-calendar"></i><span>Calendar</span></a>
                                </div>
                             
                                <div class="app-item">
                                    <a href="{{ url('/taskboard') }}"><i class="ik ik-layers"></i><span>Taskboard</span></a>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
                 <div class="main-content">
                    <div class="container-fluid">
         <div class="page-header">                     
                                    
                
                <section class="hero-section hero" data-background=""
                    style="background-image: url(images/hero-area/banner-bg.png);">
                    <div class="container">
                        <div class="row">
                           

                            <div class="col-lg-12 text-center zindex-1">
                                <h1 class="mb-3">Planifier votre réunion avec<br>
                                    NADHEM WAKTEK</h1>
                                <br> <br>
                                <p class="mb-4">'Nadhem Waktek' est une application web qui facilite la planication des
                                    réunions , les utilisateurs peuvent
                                    envoyer un lien qui se connecte aux calendriers de chacun à tout moment.</p>


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
                        <img class="img-fluid hero-bg-5 left-right-animation"
                            src="images/background-shape/blue-half-cycle.png" alt="">
                        <img class="img-fluid hero-bg-6 up-down-animation" src="images/background-shape/seo-ball-1.png"
                            alt="">
                        <img class="img-fluid hero-bg-7 left-right-animation"
                            src="images/background-shape/yellow-triangle.png" alt="">
                        <img class="img-fluid hero-bg-8 up-down-animation"
                            src="images/background-shape/service-half-cycle.png" alt="">
                        <img class="img-fluid hero-bg-9 up-down-animation" src="images/background-shape/team-bg-triangle.png"
                            alt="">
                    </div>
                    <br><br><br>


                    <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->





                    <div class="row">
                        <div class="col-md-12">

                            <div class="card-body">
                                <div id="calendar1"></div>
                            </div>
                        </div>
                    </div>
            </div>
        <!-- Edit Event Modal -->
        <!-- Modal HTML -->
        <div id="editEvent1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editEvent1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEvent1Label">Modifier événement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editEventForm" method="POST">
                <div class="modal-body">
                <div class="form-group" >
                    <label for="note-id" hidden >id</label>
                    <input type="text" class="form-control" id="note-id" name="id" autocomplete="off" hidden >
                </div>
                <input type="hidden" name="type" id="type" value="1" autocomplete="off">
                                                @csrf
                <div class="form-group">
                    <label for="editEname1">Nom évenement</label>
                    <input type="text" class="form-control" id="editEname1" name="name">
                </div>
                <div class="form-group">
                    <label for="start_date">Date début</label>
                    <input type="datetime-local" class="form-control" id="start_date" name="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">Date fin</label>
                    <input type="datetime-local" class="form-control" id="end_date" name="end_date">
                </div>
                
                <label for="notes"></label>
                    <a id="create-link" >Création d'une note</a>
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-danger delete-event">Supprimer</button>
                </div>
            </form>
            </div>
        </div>
        </div>


            <div class="modal" id="addEvent1" tabindex="-1" role="dialog" aria-labelledby="addEventLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    
                            <div class="tab-content">
                                <div class="container">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

                                    <br>

                                    <!-- Nav tabs -->
                                

                                    <div id="content">
                                        <div class="form-group">
                                            
                                    <label>Réunions</label>
                                    <input type="radio" name="content" value="show" >
                                    <div>
            
                                    <label>Tâches</label>
                                    <input type="radio" name="content" value="hide"checked>
        <form id="addEventForm1" method="POST"action="{{ route('submit-form') }}"onsubmit="return validateForm()" >
                            <input type="hidden" name="type" id="type-p" value="1" autocomplete="off">
                                                @csrf
                                                

        <div class="form-group">
                    <label for="inputGroupSelect02">Lien de la réunion*: </label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect02" name="lien" >
                            <option value="">  </option>
                            <option>https://meet.google.com/cpf-vqrv-xjw</option>
                            <option >https://us05web.zoom.us/j/89368070937?pwd=a2pJeW1ranhwS2N3eWNhcjRyNTFNZz09</option>
                            <option >https://teams.microsoft.com/</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="email">Email de l'invité*:</label>
                        <input type="text" class="form-control" name="emails"
                            id="email">

                        @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div> @endif
                    </div> 
                 
                 
            </div>




            </div>
            </div>

            <div>
                <label for="name">Titre *:</label><br>
                <input type="text" name="name" id="new-event"class="form-control">
            </div>

            <div>
                <label for="exampleFormControlTextarea1">Description*:</label><br>
                <textarea name="message" id="exampleFormControlTextarea1"class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="start_date">Date début*:</label>
                <input type="datetime-local" name="start_date" class="form-control" id="start_date">
            </div>
              <div class="form-group">
                <label for="end_date" >Date fin*:</label>
                <input type="datetime-local" name="end_date" class="form-control" id="end_date">
            </div>
            
            <input type="hidden" name="colorChosen" id="colorChosen">
            <div>
                <label for="colorChosen"> Couleur réunion*:</label>
                <ul class="color-selector">

                    <li class="bg-yellow">
                        <input type="radio" data-color="bg-yellow" name="colorChosen" id="addColorYellow" value="bg-yellow">
                        <label for="addColorYellow"></label>
                    </li>
                    <div>
                        <label for="colorChosen">Couleur tâche*:</label>
                        <ul class="color-selector">



                            <li class="bg-green">
                                <input type="radio" data-color="bg-green" name="colorChosen" id="addColorGreen"
                                    value="bg-green">
                                <label for="addColorGreen"></label>
                            </li>

                        </ul>
                    </div>
                </ul>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Enregistrer</button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>



            </div>
            </form>
            
            
            @if (session('error'))

    <script>
        location.reload();
        alert('{{ session('error') }}');
                

    </script> @endif
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script>
                window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')
            </script>
            <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
            <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
            <script src="../node_modules/screenfull/dist/screenfull.js"></script>
            <script src="../node_modules/moment/moment.js"></script>
            <script src="../node_modules/fullcalendar/dist/fullcalendar.min.js"></script>
            <script src="../node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
            <script src="../dist/js/theme.min.js"></script>
            <script src="../js/tache.js"></script>
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
                     
 <script>
     (function(b, o, i, l, e, r) {
         b.GoogleAnalyticsObject = l;
         b[l] || (b[l] =
             function() {
                 (b[l].q = b[l].q || []).push(arguments)
             });
         b[l].l = +new Date;
         e = o.createElement(i);
         r = o.getElementsByTagName(i)[0];
         e.src = 'https://www.google-analytics.com/analytics.js';
         r.parentNode.insertBefore(e, r)
     }(window, document, 'script', 'ga'));
     ga('create', 'UA-XXXXX-X', 'auto');
     ga('send', 'pageview');
 </script>
        
    <script>
        $(document).ready(function() {
            // Hide the form initially
            $('#addEventForm1').hide();

            // Show/hide the form based on the radio button selection
            $('input[type=radio][name=content]').change(function() {
                if (this.value == 'show') {
                    $('#addEventForm1').show();

                    $('#type-p').val(2);
                } else {
                    $('#addEventForm1').hide();
                    $('#type-p').val(1);

                }
            });
        });

        function validateForm() {
            var title = document.forms["addEventForm1"]["name"].value;
            var description = document.forms["addEventForm1"]["message"].value;
            var startDate = document.forms["addEventForm1"]["start_date"].value;

            if (title == "" || description == "" || startDate == "") {
                alert("veuillez remplir tous les champs!");
                return false;
            }
        }
        $(document).ready(function() {
            $('.color-selector input[type="radio"]').change(function() {
                var colorChosen = $(this).data('color');
                $('#colorChosen').val(colorChosen);
            });
        });


        $('#create-link').on('click', function() {
            var noteId = $("#note-id").val();
            var createLink = "{{ route('notes.create', ':noteId') }}";
            createLink = createLink.replace(':noteId', noteId.trim());
            window.location.href = createLink;
        });
    </script>
        
<script>
    var eventUpdateRoute = "{{ route('eventUpdate') }}";
</script>
 
            </body>

        </html>
