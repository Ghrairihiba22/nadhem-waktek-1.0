<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Taskboard </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="../node_modules/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../dist/css/theme.min.css">
        <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
                                <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">{{ count($todoEvents) }}</span></a>
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">Notifications</h4>
                                    <div class="notifications-wrap">
                                    @foreach ($todoEvents as $task)
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-calendar"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">{{ $task->name }}</span> 
                                                <span class="media-content">{{ $task->lien }}</span>
                                                <span class="media-content">{{ $task->start_date }}</span>
                                                  <span class="media-content">{{ $task->end_date }}</span>
                                            </span>
                                        </a> 
                                    @endforeach

                                    </div>
                                    <div class="footer">
                                </div>
                                </div>
                                </div>


    <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i
            class="ik ik-grid"></i></button>
    <div class="dropdown">
        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">  @if($user->image)
            <img class="avatar" src="{{ asset('storage/images/' . $user->image) }}" alt=""></a>

                            @else
                                        <img class="avatar"  src="{{ asset('images/images/profile.png') }}" alt=""></a>

                           @endif</a>
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

                    <span class="text">Nathem Waktek</span>
                </a>
                <button type="button" class="nav-toggle"><i data-toggle="expanded"
                        class="ik ik-toggle-right toggle-icon"></i></button>
                <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
            </div>

            <div class="sidebar-content">
                <div class="nav-container">
                    <nav id="main-menu-navigation" class="navigation-main">
                        <div class="nav-lavel">Navigation</div>
                        <div class="nav-item">
                            <a href="{{ url('/dashboard') }}"><i
                                    class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
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

        <div class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="ik ik-server bg-blue"></i>
                                <div class="d-inline">
                                    <h5>Taskboard</h5>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="card task-board">
                            <div class="card-header">
                                <h3>A faire</h3>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                        <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i>
                                        </li>
                                        <li><i class="ik ik-minus minimize-card"></i></li>
                                        <li><i class="ik ik-x close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body todo-task">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        @foreach ($todoEvents as $task)
                                            <li class="dd-item" data-id="{{ $task->id }}">
                                                <div class="dd-handle">
                                                    <h6>{{ $task->name }}</h6>

                                                    <span class="media-content">{{ $task->lien }}</span><br>
                                                    <span class="media-content">start
                                                        {{ \Carbon\Carbon::parse($task->start_date)->diffForHumans() }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3>En cours</h3>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                        <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i>
                                        </li>
                                        <li><i class="ik ik-minus minimize-card"></i></li>
                                        <li><i class="ik ik-x close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body progress-task">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        @foreach ($inProgressEvents as $task)
                                            <li class="dd-item" data-id="{{ $task->id }}">
                                                <div class="dd-handle">
                                                    <h6>{{ $task->name }}</h6>
                                                    <span class="media-content">{{ $task->lien }}</span><br>
                                                    <span
                                                        class="media-content">{{ \Carbon\Carbon::parse($task->start_date)->format('d M') }}</span>
                                                    <span class="media-content">to
                                                        {{ \Carbon\Carbon::parse($task->end_date)->diffForHumans() }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3>Terminé</h3>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                        <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i>
                                        </li>
                                        <li><i class="ik ik-minus minimize-card"></i></li>
                                        <li><i class="ik ik-x close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body completed-task">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        @foreach ($doneEvents as $task)
                                            <li class="dd-item" data-id="{{ $task->id }}">
                                                <div class="dd-handle">
                                                    <h6>{{ $task->name }}</h6>
                                                    <span class="media-content">{{ $task->lien }}</span><br>
                                                    <span class="media-content">{{ $task->lien }}</span><br>
                                                    <span
                                                        class="media-content">{{ \Carbon\Carbon::parse($task->start_date)->format('d M') }}</span>

                                                </div>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog"
            aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                    class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control"
                                            placeholder="Search..." />
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
                                    <a href="{{ url('/dashboard') }}"><i
                                            class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>

                                <div class="app-item">
                                    <a href="{{ url('/home') }}"><i class="ik ik-users"></i><span>Account</span></a>
                                </div>

                                <div class="app-item">
                                    <a href="{{ url('/hel') }}"><i
                                            class="ik ik-calendar"></i><span>Calendar</span></a>
                                </div>

                                <div class="app-item">
                                    <a href="{{ url('/taskboard') }}"><i
                                            class="ik ik-layers"></i><span>Taskboard</span></a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')
        </script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../node_modules/screenfull/dist/screenfull.js"></script>
        <script src="../node_modules/nestable/jquery.nestable.js"></script>
        <script src="../dist/js/theme.min.js"></script>

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

        </body>

</html>
