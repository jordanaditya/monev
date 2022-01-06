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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>

    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="img/monev_logo.jpeg" width="250px" height="80px">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="laporaninfrastruktur/index">
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
                        <a class="collapse-item " href="/profile">Profil</a>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>