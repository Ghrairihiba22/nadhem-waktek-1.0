<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="node_modules/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="node_modules/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="node_modules/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="node_modules/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="node_modules/c3/c3.min.css">
        <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.css">
        <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
        
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
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i>
                                     <span class="badge bg-danger">{{ count($todoEvents ?? []) }}</span>
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
                                        </a> @endforeach

                                    </div>
                                    <div class="footer">
    </div>
    </div>
    </div>


    <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i
            class="ik ik-grid"></i></button>
    <div class="dropdown">
        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
               @if($user->image)
            <img class="avatar" src="{{ asset('storage/images/' . $user->image) }}" alt=""></a>

                            @else
                                        <img class="avatar"  src="{{ asset('images/images/profile.png') }}" alt=""></a>

                           @endif
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
            <a class="dropdown-item" href="#"><span class="float-right"><span
                        class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
            <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
            <a class="dropdown-item" href="login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
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
        <div class="page-wrap">

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
                                        <a href="{{ url('/home') }}"><i
                                                class="ik ik-users"></i><span>Account</span></a>
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
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">

                                            <h6>Total mails</h6>
                                            <h2>2</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-award"></i>
                                        </div>
                                    </div>
                                    <small class="text-small mt-10 d-block">..</small>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Total Réunions: </h6>
                                            <h2>{{ \App\Models\FormSubmission::whereNotNull('lien')->count() }}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-message-square"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Total Tâches :</h6>
                                            <h2>{{ \App\Models\FormSubmission::whereNull('lien')->count() }}</h2>

                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-calendar"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                                </div>
                            </div>
                        </div>




                        <!-- les charts -->
                        <div class="rbt-elements-area bg-color-white rbt-section-gap">
                            <div class="container">
                                <!-- Start Card Style -->
                                <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="rbt-tutor-information-right">

                                                </div>
                                            </div>
                                            <!-- End Tutor Information  -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <h3>Réunions</h3>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div id="line_chart" class="chart-shadow"
                                                            style="height: 400px;"></div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card" style="min-height: 422px;">
                                                    <div class="card-header">
                                                        <h3>Taskboard</h3>


                                                    </div>
                                                    <div class="card-body">
                                                        <div id="c3-donut-chart"></div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-body">

                                                <h3>Tâches</h3>
                                            </div>
                                            <div class="card-block text-center">
                                                <div id="line_chart1" class="chart-shadow" style="height: 400px;">
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card" style="min-height: 412px;">
                                            <div class="card-header">
                                                <h3>A faire</h3>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                        <li><i class="ik ik-minus minimize-card"></i></li>
                                                        <li><i class="ik ik-x close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="task-list">
                                                    @foreach ($todoEvents as $notification)
                                                        <li class="list">
                                                            <span></span>
                                                            <div class="task-details">
                                                                <p class="date">
                                                                    <small
                                                                        class="text-primary">{{ $notification->name }}</small>
                                                                    - {{ $notification->lien }}
                                                                </p>
                                                                <p>{{ $notification->description }}</p>
                                                                <small>{{ \Carbon\Carbon::parse($notification->start_date)->diffForHumans() }}</small>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- partie mail -->

                                    <div class="card">
                                        <div class="card-header row">
                                            <div class="col col-sm-3">
                                                <div class="dropdown d-inline-block">
                                                    <a class="btn-icon checkbox-dropdown dropdown-toggle"
                                                        href="#" id="moreDropdown" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"></a>
                                                    <div class="dropdown-menu" aria-labelledby="moreDropdown">
                                                        <a class="dropdown-item" id="checkbox_select_all"
                                                            href="javascript:void(0);">Select All</a>
                                                        <a class="dropdown-item" id="checkbox_deselect_all"
                                                            href="javascript:void(0);">Deselect All</a>
                                                    </div>
                                                </div>
                                                <div class="card-options d-inline-block">
                                                    <a href="#"><i class="ik ik-inbox"></i></a>
                                                    <a href="#"><i class="ik ik-plus"></i></a>
                                                    <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                                    <div class="dropdown d-inline-block">
                                                        <a class="nav-link dropdown-toggle" href="#"
                                                            id="moreDropdown" role="button" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><i
                                                                class="ik ik-more-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="moreDropdown">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">More Action</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-sm-6">
                                                <div class="card-search with-adv-search dropdown">
                                                    <form action="">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search.." required>
                                                        <button type="submit" class="btn btn-icon"><i
                                                                class="ik ik-search"></i></button>
                                                        <button type="button" id="adv_wrap_toggler"
                                                            class="adv-btn ik ik-chevron-down dropdown-toggle"
                                                            data-toggle="dropdown" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="adv-search-wrap dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="adv_wrap_toggler">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email">
                                                            </div>
                                                            <button class="btn btn-theme">Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3">
                                                <div class="card-options text-right">
                                                    <span class="mr-5">1 - 50 of 2,500</span>
                                                    <a href="#"><i class="ik ik-chevron-left"></i></a>
                                                    <a href="#"><i class="ik ik-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">

                                            <div class="list-item-wrap">
                                                @foreach ($formSubmissions as $notification)
                                                    <div class="list-item">
                                                        <div class="item-inner">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="item_checkbox" name="item_checkbox"
                                                                    value="option1">
                                                                <span class="custom-control-label">&nbsp;</span>
                                                            </label>
                                                            <div class="list-title"><a>
                                                                    @foreach ($notification->emails as $email)
                                                                        <p>
                                                                            @if ($email->pivot->status === 'oui')
                                                                                {{ $email->email }} a accepté votre
                                                                                invitation a cette reuinion :
                                                                                {{ $email->FormSubmission[0]->name }}
                                                                            @else
                                                                                {{ $email->email }} a refusé votre
                                                                                invitation.
                                                                                a cette reuinion :
                                                                                {{ $email->FormSubmission[0]->name }}
                                                                            @endif
                                                                        </p>
                                                                    @endforeach
                                                                    </p>
                                                                </a></div>
                                                            <div class="list-actions">
                                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                                <a href="#"><i class="ik ik-inbox"></i></a>
                                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>



                                    <!-- ends here -->

                                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

                                    <!-- line chart1 -->
                                    <script>
                                        $(document).ready(function() {



                                            var chart = AmCharts.makeChart("line_chart", {
                                                "type": "serial",
                                                "theme": "light",
                                                "dataDateFormat": "YYYY-MM-DD",
                                                "precision": 2,
                                                "valueAxes": [{
                                                    "id": "v1",
                                                    "position": "left",
                                                    "autoGridCount": false,
                                                    "labelFunction": function(value) {
                                                        return "$" + Math.round(value) + "M";
                                                    }
                                                }, {
                                                    "id": "v2",
                                                    "gridAlpha": 0,
                                                    "autoGridCount": false
                                                }],
                                                "graphs": [{
                                                    "id": "g1",
                                                    "valueAxis": "v2",
                                                    "bullet": "round",
                                                    "bulletBorderAlpha": 1,
                                                    "bulletColor": "#FFFFFF",
                                                    "bulletSize": 8,
                                                    "hideBulletsCount": 50,
                                                    "lineThickness": 3,
                                                    "lineColor": "#2ed8b6",
                                                    "title": "Nombre de Réunions",
                                                    "useLineColorForBulletBorder": true,
                                                    "valueField": "market1",
                                                    "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                                                }],
                                                "chartCursor": {
                                                    "pan": true,
                                                    "valueLineEnabled": true,
                                                    "valueLineBalloonEnabled": true,
                                                    "cursorAlpha": 0,
                                                    "valueLineAlpha": 0.2
                                                },
                                                "categoryField": "date",
                                                "categoryAxis": {
                                                    "parseDates": false,
                                                    "dashLength": 1,
                                                    "minorGridEnabled": true
                                                },
                                                "legend": {
                                                    "useGraphSettings": true,
                                                    "position": "top"
                                                },
                                                "balloon": {
                                                    "borderThickness": 1,
                                                    "shadowAlpha": 0
                                                },
                                                "dataProvider": [
                                                    @foreach ($dailyMeetings as $key => $value)
                                                        {
                                                            "date": "{{ $key }}",
                                                            "market1": {{ $value }},

                                                        },
                                                    @endforeach

                                                ]


                                            });
                                        });
                                    </script>

                                    <!-- libne chart 2 -->

                                    <script>
                                        $(document).ready(function() {



                                            var chart2 = AmCharts.makeChart("line_chart1", {
                                                "type": "serial",
                                                "theme": "light",
                                                "dataDateFormat": "YYYY-MM-DD",
                                                "precision": 2,
                                                "valueAxes": [{
                                                    "id": "v2",
                                                    "position": "left",
                                                    "autoGridCount": false,
                                                    "labelFunction": function(value) {
                                                        return "$" + Math.round(value) + "M";
                                                    }
                                                }, {
                                                    "id": "v1",
                                                    "gridAlpha": 0,
                                                    "autoGridCount": false
                                                }],
                                                "graphs": [{
                                                    "id": "g2",
                                                    "valueAxis": "v1",
                                                    "bullet": "round",
                                                    "bulletBorderAlpha": 1,
                                                    "bulletColor": "#FFFFFF",
                                                    "bulletSize": 8,
                                                    "hideBulletsCount": 50,
                                                    "lineThickness": 3,
                                                    "lineColor": "#2ed8b6",
                                                    "title": "Nombre des Tâches",
                                                    "useLineColorForBulletBorder": true,
                                                    "valueField": "market2",
                                                    "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                                                }],
                                                "chartCursor": {
                                                    "pan": true,
                                                    "valueLineEnabled": true,
                                                    "valueLineBalloonEnabled": true,
                                                    "cursorAlpha": 0,
                                                    "valueLineAlpha": 0.2
                                                },
                                                "categoryField": "date",
                                                "categoryAxis": {
                                                    "parseDates": false,
                                                    "dashLength": 1,
                                                    "minorGridEnabled": true
                                                },
                                                "legend": {
                                                    "useGraphSettings": true,
                                                    "position": "top"
                                                },
                                                "balloon": {
                                                    "borderThickness": 1,
                                                    "shadowAlpha": 0
                                                },
                                                "dataProvider": [
                                                    @foreach ($dailyTasks as $key => $value)
                                                        {
                                                            "date": "{{ $key }}",
                                                            "market2": {{ $value }},

                                                        },
                                                    @endforeach

                                                ]


                                            });
                                        });
                                    </script>


                                    <!-- tasks  -->
                                    <script>
                                        $(document).ready(function() {
                                            (function($) {
                                                'use strict';

                                                var c3DonutChart = c3.generate({
                                                    bindto: '#c3-donut-chart',
                                                    data: {
                                                        columns: [
                                                            ["Terminé", {{ $doneEventsCount }}],
                                                            ["En cours", {{ $inProgressEventsCount }}],
                                                            ["A faire", {{ $todoEventsCount }}]
                                                        ],
                                                        type: 'donut',
                                                        onclick: function(d, i) {
                                                            console.log("onclick", d, i);
                                                        },
                                                        onmouseover: function(d, i) {
                                                            console.log("onmouseover", d, i);
                                                        },
                                                        onmouseout: function(d, i) {
                                                            console.log("onmouseout", d, i);
                                                        }
                                                    },
                                                    color: {
                                                        pattern: ['rgba(88,216,163,1)', 'rgba(4,189,254,0.6)', 'rgba(237,28,36,0.6)']
                                                    },
                                                    padding: {
                                                        top: 0,
                                                        right: 0,
                                                        bottom: 30,
                                                        left: 0,
                                                    },
                                                    donut: {
                                                        title: "Taskboard"
                                                    }
                                                });
                                            })(jQuery);
                                        });
                                    </script>
                                    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
                                    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
                                    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
                                    <script src="node_modules/screenfull/dist/screenfull.js"></script>
                                    <script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
                                    <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                                    <script src="node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                                    <script src="node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
                                    <script src="node_modules/jvectormap/jquery-jvectormap.min.js"></script>
                                    <script src="node_modules/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
                                    <script src="node_modules/moment/moment.js"></script>
                                    <script src="node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
                                    <script src="node_modules/d3/dist/d3.min.js"></script>
                                    <script src="node_modules/c3/c3.min.js"></script>


                                    <script src="dist/js/theme.min.js"></script>

                                    <script src="../node_modules/jquery-knob/dist/jquery.knob.min.js"></script>
                                    <!-- les script ta3 line chart -->
                                    <script src="../node_modules/amcharts3/amcharts/amcharts.js"></script>
                                    <script src="../node_modules/amcharts3/amcharts/gauge.js"></script>
                                    <script src="../node_modules/amcharts3/amcharts/serial.js"></script>
                                    <script src="../node_modules/amcharts3/amcharts/themes/light.js"></script>
                                    <script src="../node_modules/amcharts3/amcharts/plugins/animate/animate.js"></script>
                                    <script src="../node_modules/amcharts3/amcharts/pie.js"></script>
                                    <script src="../node_modules/ammap3/ammap/ammap.js"></script>
                                    <script src="../node_modules/ammap3/ammap/maps/js/usaLow.js"></script>
                                    <script src="../js/chart-amcharts.js"></script>
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
