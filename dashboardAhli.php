<?php
session_start();
include("connection.php");
$sql="SELECT * FROM membersdetail m JOIN systemuser s ON s.idMember=m.idMember where m.memberIC = '" . $_SESSION['userID']."'";
echo $sql;
$result = $conn-> query($sql);
$row = $result -> fetch_assoc();
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

  <!-- Prevent browser from going back to login form page once user is logged in-->
  <script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
  </script>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!--for line 256 until 263-->
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
      <a href="dashboardAhli.php" class="logo d-flex align-items-center">
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
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php if(isset($_SESSION['userName'])) { echo $_SESSION['userName']; } ?></span>
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

      <li class="nav-item">
        <a class="nav-link " href="dashboardAhli.php">
          <i class="bi bi-grid"></i>
          <span>Laman Utama</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="updateMaklumatForm.php">
          <i class="bi bi-clipboard"></i>
          <span>Borang Kemaskini Maklumat Ahli</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tanggungan.php">
          <i class="bi bi-people"></i>
          <span>Daftar Tanggungan</span>
        </a>
      </li><!-- End Form Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="statusYuran.php">
          <i class="bi bi-cash-stack"></i>
          <span>Status Yuran</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="plogoutAhli.php">
          <i class="bi bi-box-arrow-right"></i>
          <span style="color:red">Daftar Keluar</span>
        </a>
      </li>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="color:rgb(73, 67, 67)">Laman Utama</h1>

    <ul class="breadcrumb">
      <li class="breadcrumb-item active"><a href="dashboardAhli.html"><i class="bi bi-house-door"></i></a></li>
      <li style="color:rgb(73, 67, 67)">Laman Utama</li>
    </ul> 

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Utama</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Tukar Kata Laluan</button>
            </li>

          </ul>

          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Maklumat Ahli</h5>

              <!--<div class="row">
                <div class="col-lg-3 col-md-4 label ">
                  <div style=color:black>idMember</div>
                </div>
                <div class="col-lg-9 col-md-8">
                  <?php 
                  //echo $row["idMember"]
                  ?>
                </div>
              </div>-->

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">
                  <div style=color:black><b>Nombor Ahli</b></div>
                </div>
                <div class="col-lg-9 col-md-8">
                  <?php 
                  echo $row["noAhli"]
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">
                  <div style=color:black><b>Nama Ahli</b></div>
                </div>
                <div class="col-lg-9 col-md-8">
                <?php 
                  echo $row["memberName"]
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">
                  <div style=color:black><b>Nombor Telefon</b></div>
                </div>
                <div class="col-lg-9 col-md-8">
                <?php 
                  echo $row["phoneNum"]
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">
                  <div style=color:black><b>Emel</b></div>
                </div>
                <div class="col-lg-9 col-md-8">
                <?php 
                if(isset($_SESSION["userID"]))
                {
                  echo $row["email"];
                }
                else { echo "Tiada";}
                  
                ?>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">
                  <div style=color:black><b>Alamat</b></div>
                </div>
                <div class="col-lg-9 col-md-8">
                <?php 
                  echo $row["address1"] .", ". $row["address2"] .", ". $row["postcode"] .", ". $row["city"] .", ". $row["state"]
                ?>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">
                  <div style=color:black><b>Tarikh Pendaftaran</b></div>
                </div>
                <div class="col-lg-9 col-md-8">
                <?php 
                  echo $row["registeredDate"]
                ?>
                </div>
              </div>

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="updpass.php" method="post">

                  <div class="row mb-3">
                    <label for="userPassword" class="col-md-4 col-lg-3 col-form-label">Kata Laluan Terkini</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="curpass" type="password" class="form-control" id="curpass" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="userPassword" class="col-md-4 col-lg-3 col-form-label">Kata Laluan Baru</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpass" type="password" class="form-control" id="newpass" maxlength="8" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="userPassword" class="col-md-4 col-lg-3 col-form-label">Pengesahan Kata Laluan Baru</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="conpass" type="password" class="form-control" id="conpass" maxlength="8" required>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-success">Simpan Kata Laluan</button>
                    <button type="reset" class="btn btn-secondary">Padam</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

            </div>

      </div>
    </div>

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