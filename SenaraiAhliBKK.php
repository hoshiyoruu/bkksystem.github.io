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

  <!-- Favicons -->
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
    /*div {
      width: 200px;
      border: 1px solid green;
    }
    p {
      margin-bottom: 10px;
    }
    .align-right {
      text-align: right;
      border: 0;
    }*/
    /*Buatkan button Tambah Ahli BKK belah kiri */
    .box
    {
      text-align: left;
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
        <a class="nav-link collapsed" href="dashboardAJK.php">
          <i class="bi bi-grid"></i>
          <span>Laman Utama</span>
        </a>
      </li> End Dashboard Nav 

      <li class="nav-item">
        <a class="nav-link" href="SenaraiAhliBKK.php">
          <i class="bi bi-clipboard"></i>
          <span>Senarai Ahli BKK</span>
        </a>
      </li> End Senarai Ahli BKK Page Nav 

      <li class="nav-item">
        <a class="nav-link collapsed" href="statusByrn.php">
          <i class="bi bi-cash-stack"></i>
          <span>Status Bayaran</span>
        </a>
      </li>End Blank Page Nav -->
      <?php include('sidebar.php'); ?>
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="color:rgb(73, 67, 67)">Senarai Ahli BKK</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item active"><i class="bi bi-house-door"></i></li>
        <li style="color:rgb(73, 67, 67)"><a href="dashboardAJK.php">Laman Utama</a></li>
        <li style="color:rgb(73, 67, 67)">Senarai Ahli BKK</li>
      </ul> 
    </div> <!-- End Page Title -->

    <section class="section">
      <!-- Table with stripped rows -->
      <table class="table datatable" style="border-color:rgb(73, 67, 67)" border="3px">
      <thead>
          <tr>
            <th>No Ahli</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telefon</th>
            <th>Tindakan</th>
          </tr>
      </thead>
      <tbody>
      <?php
      include ("connection.php");

      $sql="SELECT noAhli, tokenID, memberName, address1, address2, city, state, postcode, phoneNum FROM membersdetail";
      $result = $conn-> query($sql);
      
      if ($result-> num_rows > 0)
      {
        while ($row = $result-> fetch_assoc())
        {
          echo "<tr><td>".$row["noAhli"] ."</td><td>". $row["memberName"] ."</td><td>". $row["address1"] .", ". $row["address2"] ."<br>". $row["postcode"] .", ". $row["city"] .", ". $row["state"] ."</td><td>" .$row["phoneNum"] ."</td><td style='text-align:center'><button type='button' name='btn_view' class='btn btn-success'><i class='bi bi-me-1'></i><a href='mklmtAhliPDF.php?id=".$row["tokenID"]."' target='_blank' style='color:white'>Lihat</a></button></td></tr>";
        }
        echo "</table>";
      }
      else
      {
        echo "0 result";
      }
      $conn-> close();
      ?>
      </tbody>
      </table> <!--End Table with stripped rows -->

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