<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monev | @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href= "{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
      .form-rounded{
         border-radius: 3rem;
      }
      
      .font-perfect{
        font-size:14px;
      }
      html {
        -webkit-font-smoothing: antialiased!important;
        -moz-osx-font-smoothing: grayscale!important;
        -ms-font-smoothing: antialiased!important;
      }
        body {
        font-family: 'Open Sans', sans-serif;
        font-size:16px;
        color:#555555; 
        }
        .md-stepper-horizontal {
            display:table;
            width:100%;
            margin:0 auto;
            background-color:#FFFFFF;
            box-shadow: 0 3px 8px -6px rgba(0,0,0,.50);
        }
        .md-stepper-horizontal .md-step {
            display:table-cell;
            position:relative;
            padding:24px;
        }
        .md-stepper-horizontal .md-step:hover,
        .md-stepper-horizontal .md-step:active {
            background-color:rgba(0,0,0,0.04);
        }
        .md-stepper-horizontal .md-step:active {
            border-radius: 15% / 75%;
        }
        .md-stepper-horizontal .md-step:first-child:active {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .md-stepper-horizontal .md-step:last-child:active {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .md-stepper-horizontal .md-step:hover .md-step-circle {
            background-color:#757575;
        }
        .md-stepper-horizontal .md-step:first-child .md-step-bar-left,
        .md-stepper-horizontal .md-step:last-child .md-step-bar-right {
            display:none;
        }
        .md-stepper-horizontal .md-step .md-step-circle {
            width:30px;
            height:30px;
            margin:0 auto;
            background-color:#999999;
            border-radius: 50%;
            text-align: center;
            line-height:30px;
            font-size: 16px;
            font-weight: 600;
            color:#FFFFFF;
        }
        .md-stepper-horizontal.green .md-step.active .md-step-circle {
            background-color:#00AE4D;
        }
        .md-stepper-horizontal.orange .md-step.active .md-step-circle {
            background-color:#F96302;
        }
        .md-stepper-horizontal .md-step.active .md-step-circle {
            background-color: rgb(33,150,243);
        }
        .md-stepper-horizontal .md-step.done .md-step-circle:before {
            font-family:'FontAwesome';
            font-weight:100;
            content: "\f00c";
        }
        .md-stepper-horizontal .md-step.done .md-step-circle *,
        .md-stepper-horizontal .md-step.editable .md-step-circle * {
            display:none;
        }
        .md-stepper-horizontal .md-step.editable .md-step-circle {
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }
        .md-stepper-horizontal .md-step.editable .md-step-circle:before {
            font-family:'FontAwesome';
            font-weight:100;
            content: "\f040";
        }
        .md-stepper-horizontal .md-step .md-step-title {
            margin-top:16px;
            font-size:16px;
            font-weight:600;
        }
        .md-stepper-horizontal .md-step .md-step-title,
        .md-stepper-horizontal .md-step .md-step-optional {
            text-align: center;
            color:rgba(0,0,0,.26);
        }
        .md-stepper-horizontal .md-step.active .md-step-title {
            font-weight: 600;
            color:rgba(0,0,0,.87);
        }
        .md-stepper-horizontal .md-step.active.done .md-step-title,
        .md-stepper-horizontal .md-step.active.editable .md-step-title {
            font-weight:600;
        }
        .md-stepper-horizontal .md-step .md-step-optional {
            font-size:12px;
        }
        .md-stepper-horizontal .md-step.active .md-step-optional {
            color:rgba(0,0,0,.54);
        }
        .md-stepper-horizontal .md-step .md-step-bar-left,
        .md-stepper-horizontal .md-step .md-step-bar-right {
            position:absolute;
            top:36px;
            height:1px;
            border-top:1px solid #DDDDDD;
        }
        .md-stepper-horizontal .md-step .md-step-bar-right {
            right:0;
            left:50%;
            margin-left:20px;
        }
        .md-stepper-horizontal .md-step .md-step-bar-left {
            left:0;
            right:50%;
            margin-right:20px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <img src="{{ asset('img/monev_logo.jpeg') }}" width="250px" height="80px">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/laporaninfrastruktur/index">
                    <br>
                    <span style="font-size:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" fill="currentColor" class="bi bi-circle-fill" viewBox="0 6 24 16">
  <circle cx="10" cy="10" r="10"/>
</svg> LAPORAN INFRASTRUKTUR TIK</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span style="font-size:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" fill="currentColor" class="bi bi-circle-fill" viewBox="0 6 24 16">
  <circle cx="10" cy="10" r="10"/>
</svg> PROFIL PERANGKAT DAERAH</span></a>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class=" bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="/profilperangkatdaerah/profil">Profil</a>
                        <a class="collapse-item " href="cards.html">Layanan</a>
                        <a class="collapse-item " href="cards.html">Sumber Daya Manusia</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span style="font-size:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" fill="currentColor" class="bi bi-circle-fill" viewBox="0 6 24 16">
  <circle cx="10" cy="10" r="10"/>
</svg> PROSEDUR / KEBIJAKAN TIK</span></a>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class=" bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="utilities-color.html">Unit Khusus Pengelolaan <br>TIK</a>
                        <a class="collapse-item " href="utilities-border.html">Peraturan / Prosedur <br>Operasional TIK</a>
                        <a class="collapse-item " href="utilities-animation.html">Fasilitas Lain</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span style="font-size:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" fill="currentColor" class="bi bi-circle-fill" viewBox="0 6 24 16">
  <circle cx="10" cy="10" r="10"/>
</svg> SISTEM APLIKASI</span></a>
                </a>
                <div id="collapsethree" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class=" bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="utilities-color.html">Umum</a>
                        <a class="collapse-item " href="utilities-border.html">Perangkat Lunak</a>
                        <a class="collapse-item " href="utilities-animation.html">Perangkat Keras</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <span style="font-size:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" fill="currentColor" class="bi bi-circle-fill" viewBox="0 6 24 16">
  <circle cx="10" cy="10" r="10"/>
</svg> PERENCANAAN DAN ANGGARAN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                                                    
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                
                @yield('container')






                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer>
               
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>