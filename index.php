<?php 
  session_start();
  error_reporting(0);
  include 'koneksi.php';
  if(!isset($_SESSION['username']))
{
    echo "<script>alert('anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trend Moment</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <!-- DataTables -->
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src ="img/images.jpg" width="40px" height="30px"/>
        </div>
        <div class="sidebar-brand-text mx-3">Kedai <sup>24</sup>jam</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
       <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php?halaman=admin">
          <i class="fas fa-fw fa-user"></i>
          <span>Data Admin</span></a>
      </li>
       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-list"></i>
          <span>Data Order 2019</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Stok Order 2019</h6>
            <a class="collapse-item" href="index.php?halaman=stok-bcoklat">Bubuk Coklat</a>
          </div>
        </div>
      </li>
       <!-- Divider -->
      <hr class="sidebar-divider">

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseldataramal" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Ramal</span>
        </a>
        <div id="collapseldataramal" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Ramal :</h6>
            <a class="collapse-item" href="index.php?halaman=data-ramalbcoklat"> Data Ramal Bubuk Coklat</a>
          </div>
        </div>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseldataorder2020" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Order 2020</span>
        </a>
        <div id="collapseldataorder2020" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Stok order 2020 :</h6>
            <a class="collapse-item" href="index.php?halaman=stok-bcoklat2020">Bubuk Coklat</a>
          </div>
        </div>
      </li>

      
      <!-- Divider -->
      <hr class="sidebar-divider">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item">
        <a class="nav-link" href="index.php?halaman=report">
          <i class="fas fa-fw fa-user"></i>
          <span>Report</span></a>
      </li>
       <!-- Divider -->
      <hr class="sidebar-divider">

          <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
			<li class="nav-item">
        <a class="nav-link" href="login.php">
          <span>logout</span></a>
      </li>
           
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          
         <?php
                    if (isset($_GET['halaman']))
                    {
                    if ($_GET['halaman']=="admin")
                    {
                        include 'admin.php';
                    }
                        elseif ($_GET['halaman']=="stok-bcoklat")
                    {
                        include 'stok-bcoklat.php';
                    }
                        elseif ($_GET['halaman']=="hitung-bcoklat")
                    {
                        include 'hitung-bcoklat.php';
                    }
                        elseif ($_GET['halaman']=="hasil-bcoklat")
                    {
                        include 'hasil-bcoklat.php';
                    }
                        elseif ($_GET['halaman']=="tes")
                    {
                        include 'tes.php';
                    }
                        elseif ($_GET['halaman']=="lapor-orderbcoklat")
                    {
                        include 'lapor-orderbcoklat.php';
                    }
                        elseif ($_GET['halaman']=="lapor-ramalbcoklat")
                    {
                        include 'lapor-ramalbcoklat.php';
                    }
                        elseif ($_GET['halaman']=="data-ramalbcoklat")
                    {
                        include 'data-ramalbcoklat.php';
                    }
                        elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                        elseif ($_GET['halaman']=="stok-bcoklat2020")
                    {
                        include 'stok-bcoklat2020.php';
                    }
                        elseif ($_GET['halaman']=="report")
                    {
                        include 'report.php';
                    }
                    }           
                        else
                    {
                        include 'home.php';
                    }
                    ?>

        </div>
      </div>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


   <script>
    $(document).ready(function() {
      $('#example').DataTable({
        "scrollX": true,
      });
    });
  </script>


</body>

</html>
