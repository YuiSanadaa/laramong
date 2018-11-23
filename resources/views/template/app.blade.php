<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Sim Maker!</title>
    <link href="{{ asset('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="{{ asset('images/logo.png') }}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="{{ asset('images/logo-text.png') }}" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn" style="width: 50%">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-12  m-b-30">
                                        <h4 class="m-b-20">Report BUG</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Enter email"> </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- End Messages -->
                            </ul>
                            <!-- User profile and search -->
                            <ul class="navbar-nav my-lg-0">

                                <!-- End Messages -->
                                <!-- Profile -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                        <ul class="dropdown-user">
                                            <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                            <li><a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form><i class="fa fa-power-off"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="left-sidebar">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                      <!-- Sidebar navigation-->
                      <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-label">Home</li>
                            <li> <a class="" href="" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></span></a></li>
                            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Pemohon</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{route('pemohon.index')}}">List para Pemohon</a></li>
                                    <li><a href="{{route('pemohon.create')}}">Tambah Pemohon</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-id-card"></i><span class="hide-menu">Sim</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="{{route('sim.index')}}">List Sim yang terbuat</a></li>
                                    <li><a href="{{route('sim.create')}}">Tambah Sim</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </div>
            <div class="page-wrapper">
                <!-- Bread crumb -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-primary">Dashboard</h3> </div>
                        <div class="col-md-7 align-self-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Bread crumb -->
                    <!-- Container fluid  -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- End Container fluid  -->
                    <!-- footer -->
                    <!-- End footer -->
                </div>
            </div>

            <footer class="footer"> © 2018 All rights reserved. Template designed by Technosoft</footer>
            <script src="{{ asset('js/jquery.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('js/lib/bootstrap/js/popper.min.js') }}"></script>
            <script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
            <script src="{{ asset('js/sidebarmenu.js') }}"></script>
            <script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
            <script src="{{ asset('js/lib/datamap/d3.min.js') }}"></script>
            <script src="{{ asset('js/lib/datamap/topojson.js') }}"></script>
            <script src="{{ asset('js/lib/datamap/datamaps.world.min.js') }}"></script>
            <script src="{{ asset('js/lib/datamap/datamap-init.js') }}"></script>
            <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
            <script src="{{ asset('js/lib/weather/weather-init.js') }}"></script>
            <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
            <script src="{{ asset('js/lib/chartist/chartist.min.js') }}"></script>
            <script src="{{ asset('js/lib/chartist/chartist-plugin-tooltip.min.js') }}"></script>
            <script src="{{ asset('js/lib/chartist/chartist-init.js') }}"></script>
            <script src="{{ asset('js/custom.min.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            <script src="{{ asset('js/lib/datatables/datatables.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
            <script src="{{ asset('js/lib/datatables/datatables-init.js') }}"></script>
            <script type="text/javascript">
              $(document).ready(function(){

                $('#example23').dataTables({
                  "ordering": false,
              });
                $('.js-example-basic-multiple').select2();
                $('.js-example-basic-single').select2();
                $("#sidebarnav li:nth-child(3)").css("background-color", 'red');
                $("#sidebarnav li:nth-child(4) ul").removeClass("collapse in").attr("aria-expanded", 'false').addClass("collapse");
            });
        </script>

    </body>

    </html>