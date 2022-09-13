<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BKK Madrasah Hidayah System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--Favicons -->
  <link href="unnamed.png" rel="unnamed">
  <link href="unnamed.png" rel="unnamed">

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
      <a class="nav-link " href="dashboardPres.php">
        <i class="bi bi-grid"></i>
        <span>Laman Utama</span>
      </a>
    </li> End Dashboard Nav 

    <li class="nav-item">
      <a class="nav-link collapsed" href="SenaraiAhliBKK.html">
        <i class="bi bi-clipboard"></i>
        <span>Senarai Ahli BKK</span>
      </a>
    </li> End Senarai Ahli BKK Nav 

    <li class="nav-item">
      <a class="nav-link collapsed" href="byrnTahunan.html">
        <i class="bi bi-cash-stack"></i>
        <span>Status Bayaran</span>
      </a>
    </li> End Status Bayaran Nav 

    <li class="nav-item">
      <a class="nav-link collapsed" href="registerAJK.php">
      <i class="bi bi-bookmark-plus"></i>
        <span>Daftar AJK</span>
      </a>
    </li> End Daftar AJK Nav -->
    <?php include('sidebar.php'); ?>
  </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <div class="pagetitle">
      <h1 style="color:rgb(73, 67, 67)">Daftar AJK</h1>
      <ul class="breadcrumb">
      <li class="breadcrumb-item active"><i class="bi bi-house-door"></i></li>
        <li style="color:rgb(73, 67, 67)"><a href="dashboardPres.php">Laman Utama</a></li>
        <li style="color:rgb(73, 67, 67)">Daftar AJK</li>
      </ul> 
    </div> <!-- End Page Title -->

    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!--<div class="d-flex justify-content-center py-4">
                <a href="dashboardAJK.php" class="logo d-flex align-items-center w-auto">
                  <img src="unnamed.png" width=50 height=100 alt="">
                  <span class="d-none d-lg-block"><center>BKK Madrasah Hidayah Sytem</center></span>
                </a>
              </div> End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buka Akaun Baharu</h5>
                    <p class="text-center small">Masukkan maklumat diri anda untuk membuka akaun baharu</p>
                  </div>

                  <script language="javascript">
                    function checkPasswords()
                    {
                        var passmatch = true;
                        var p1 = document.getElementById("userPassword1").value;
                        var p2 = document.getElementById("userPassword2").value;

                        if(p1 != p2)
                        {
                          alert("Passwords do not match!")
                          passmatch = false;
                          document.getElementById("userPassword1").value = null;
                          document.getElementById("userPassword2").value = null;
                        }
                        return passmatch;
                    }
                  </script>

                  <form id="register" name="register" method="post" action="pregisterAJK.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="userName" class="form-label">Nama</label>
                      <input type="text" name="userName" class="form-control" id="userName" required>
                      <div class="invalid-feedback">Masukkan nama anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="idMember" class="form-label">No Ahli</label>
                      <div class="input-group has-validation">
                        <input type="text" name="noAhli" class="form-control" id="noAhli" required>
                        <div class="invalid-feedback">Sila masukkan No Ahli!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="userPassword" class="form-label">Kata Laluan</label>
                      <input type="password" name="userPassword1" class="form-control" id="userPassword1" required>
                      <div class="invalid-feedback">Sila masukkan kata laluan!</div>
                    </div>

                    <div class="col-12">
                      <label for="userPassword" class="form-label">Pengesahan Kata Laluan</label>
                      <input type="password" name="userPassword2" class="form-control" id="userPassword2" required>
                      <div class="invalid-feedback">Sila masukkan kata laluan!</div>
                    </div>

                    <!--<div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>-->
                    <div class="col-12">
                      <button class="btn btn-success w-100" name="submit" type="submit" onclick="return checkPasswords()">Buat Akaun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah mempunyai akaun? <a href="loginAJK.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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