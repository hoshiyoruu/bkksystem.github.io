<?php
session_start();
include ("connection.php");
if(!isset($_SESSION['userlogged']) || $_SESSION['userlogged'] != 1)
{
    header("Location: loginAJK.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BKK Madrasah Hidayah System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Logo -->
  <link href="unnamed.png" rel="icon">
  <link href="unnamed.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!--padding is jarak antara | and perkataan Home dan Dashboard-->
  <style>
    ul.breadcrumb li {
      display: inline;
      font-size: 15px;
    }
    ul.breadcrumb li+li:before {
      padding: 8px; 
      color: rgb(73, 67, 67);
      content: "|\00a0";
    }
    ul.breadcrumb li a {
      color: rgb(73, 67, 67);
      text-decoration: none;
    }
    ul.breadcrumb li a:hover {
      color: rgb(73, 67, 67);
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboardAJK.php" class="logo d-flex align-items-center">
        <img src="unnamed.png" alt="">
        <span class="d-none d-lg-block">BKK Madrasah Hidayah System</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php if(isset($_SESSION['type'])) { echo $_SESSION['type']; } ?></span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php if(isset($_SESSION['userName'])) { echo $_SESSION['userName']; } ?></h6>
              <span><?php if(isset($_SESSION['type'])) {echo $_SESSION['type']; } ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!--<li class="nav-item">
        <a class="nav-link " href="dashboardAJK.php">
          <i class="bi bi-grid"></i>
          <span>Laman Utama</span>
        </a>
      </li> End Dashboard Nav 

      <li class="nav-item">
        <a class="nav-link collapsed" href="SenaraiAhliBKK.php">
          <i class="bi bi-clipboard"></i>
          <span>Senarai Ahli BKK</span>
        </a>
      </li> End Senarai Ahli BKK Page Nav 

      <li class="nav-item">
        <a class="nav-link collapsed" href="statusByrn.php">
          <i class="bi bi-cash-stack"></i>
          <span>Status Bayaran</span>
        </a>
      </li> End Blank Page Nav -->
      <?php include('sidebar.php'); ?>
    </ul>
  </aside> <!-- End Sidebar -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="color:rgb(73, 67, 67)">Laman Utama</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="dashboardAJK.php"><i class="bi bi-house-door"></a></i></li>
        <li style="color:rgb(73, 67, 67)">Laman Utama</li>
      </ul> 
    </div> <!-- End Page Title -->
    
    <section class="dashboard">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Ahli Terkini</h5>
              <div class="d-flex align-items-center" style="color:rgb(56, 100, 167)">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgb(172, 217, 224);">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h4><b>  <?php 
                            include("connection.php");

                            $sql="SELECT count(*) FROM membersdetail";
                            $result = $conn-> query($sql);
                                
                            if ($result-> num_rows > 0)
                            {
                              while ($row = $result-> fetch_assoc())
                              {
                                echo $row["count(*)"];
                              }
                            }
                            else
                            {
                              echo "0 result";
                            }
                            ?></b></h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bil. Sudah Bayar Yuran</h5>
                <div class="d-flex align-items-center" style="color:rgb(15, 143, 68)">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color:rgb(193, 236, 211)">
                    <i class="bi bi-hand-thumbs-up"></i>
                  </div>
                  <div class="ps-3">
                    <h4><b> <?php 
                            include("connection.php");

                            $sql="SELECT count(idfee) FROM fee WHERE statusID=1";
                            $result = $conn-> query($sql);
                                
                            if ($result-> num_rows > 0)
                            {
                              while ($row = $result-> fetch_assoc())
                              {
                                echo $row["count(idfee)"];
                              }
                            }
                            else
                            {
                              echo "0 result";
                            }
                            ?></b></h4>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bil. Belum Bayar Yuran</h5>
              <div class="d-flex align-items-center" style="color:rgb(179, 123, 21)">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color:rgb(236, 217, 193)">
                  <i class="bi bi-hand-thumbs-down"></i>
                </div>
                <div class="ps-3">
                  <h4><b> <?php 
                          include("connection.php");

                          $sql="SELECT count(idfee) FROM fee WHERE statusID=2";
                          $result = $conn-> query($sql);
                                
                          if ($result-> num_rows > 0)
                          {
                            while ($row = $result-> fetch_assoc())
                            {
                              echo $row["count(idfee)"];
                            }
                          }
                          else
                          {
                            echo "0 result";
                          }
                          ?></b></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>
      <?php
      //utk hide klu selain pengerusi
      include ("connection.php");
      if(isset($_SESSION['typeID'])) 
      {
        if($_SESSION['typeID']=='2')
        {
          echo '<!-- Bordered Table -->
          <table class="table table-bordered" style="border-color:rgb(73, 67, 67)" border="2px">
            <div class="table-title"><h4 style="color:rgb(73, 67, 67); font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;">Borang Yang Perlu Disemak</h4></div>
            <thead>
              <tr style="text-align:center">
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>';
    
            $sqlForm="SELECT m.tokenID, m.email, m.memberName, sr.statusType FROM membersdetail m LEFT JOIN statusregistration sr ON sr.idStatusReg = m.idStatusReg WHERE sr.idStatusReg = 'P'";
            $resultForm = $conn-> query($sqlForm);
            
            if($resultForm !== false && $resultForm-> num_rows > 0)
            {
              while ($m = $resultForm-> fetch_assoc())
              {
                echo "<tr>
                <td>". $m['memberName'] ."</td>
                <td>". $m['statusType'] ."</td>
                <td style='text-align:center'> <button type='button' name='btn_view' class='btn btn-success'><i class='bi bi-me-1'></i><a href='pengesahan.php?id=".$m["tokenID"]."' style='color:white'>Lihat</a></button>
                </td>
                </tr>";
              }
              echo "</table>";
            }
            $conn-> close();
            echo '</tbody>';
        }
      }
      ?>
      </table>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>