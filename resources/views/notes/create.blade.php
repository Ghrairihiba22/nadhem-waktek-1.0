<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Note</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../node_modules/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../dist/css/theme.min.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>



</head>

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
                        

                                   
                                    <div class="footer">
   
                                    </div>
                                    
     <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
    <div class="dropdown">
    
     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ url('/home') }}"><i class="ik ik-user dropdown-icon"></i> Profil</a>
            <a class="dropdown-item" href="{{ url('/dashboard') }}"><i class="ik ik-bar-chart-2"></i> Dashboard </a>
            <a class="dropdown-item" href="{{ url('/taskboard') }}"><i class="ik ik-server"></i> Taskboard</a>
            <a class="dropdown-item" href="{{ url('/hel') }}"><i class="ik ik-calendar"></i> Ma calendrier</a>
        </div> </div>

        </header>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                </div>
            </div>
        </div>


        <div class="container-fluid h-100 bg-image">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 offset-3 mt-4">
                        <div class="card-body">
                            <form id="formNotes" method="POST" action="{{ route('notes.edit', $ev->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <textarea class="form-control" name="note" id="summernote">{{ $ev->note }}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Enregistrer note</button>
                                    <button type="button" class="btn btn-danger" id="deleteNoteBtn"
                                        data-note-id="{{ $ev->id }}">Supprimer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <a href="{{ url('/taskboard') }}"><i
                                        class="ik ik-server"></i><span>Taskboard</span></a>
                            </div>

                        </nav>
                    </div>
                </div>

            </div>
            <!-- ethiye links  -->


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
                        <!-- summernote css/js -->

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
                        <script src="../js/taskboard.js"></script>
                        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->



                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote({
                                    height: 400
                                });

                                var note = localStorage.getItem('note');
                                var storedNoteId = localStorage.getItem('noteId');
                                var formElement = document.getElementById('formNotes');

                                if (formElement) {
                                    formElement.action = formElement.action.replace('__EVENT__', storedNoteId);
                                }

                                // Delete note AJAX request
                                $('#deleteNoteBtn').click(function() {
                                    var noteId = $(this).data('note-id');
                                    deleteNote(noteId);
                                });

                                function deleteNote(noteId) {
                                    if (confirm('Êtes-vous sûr(e) de vouloir supprimer cette note ?')) {
                                        fetch('/notes/delete/' + noteId, {
                                                method: 'DELETE',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                }
                                            })
                                            .then(function(response) {
                                                if (response.ok) {
                                                    return response.json();
                                                } else {
                                                    throw new Error('Échec de la suppression de la note');
                                                }
                                            })
                                            .then(function(data) {
                                                alert(data.message);
                                                window.location.href = '/hel';
                                            })
                                            .catch(function(error) {
                                                alert(error.message);
                                            });
                                    }
                                }
                            });
                        </script>
                        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css"
                            rel="stylesheet">
                        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</body>

</html>

<style>
    .bg-image {
        background-image: url('/images/backgrounds/about-bg.png');
        background-size: cover;
    }
</style>
