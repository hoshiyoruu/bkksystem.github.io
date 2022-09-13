<?php
session_start();
include ("connection.php");
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

  
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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
    table,th,td {
      border : 1px solid black;
      border-collapse: collapse;
    }
    th,td {
      padding: 5px;
    }

    /* Popup form */
    .box{
      text-align: right;
    }
    .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.8);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    }
    .overlay:target {  
      visibility: visible;
      opacity: 1;
    }
    .wrapper{
      margin: 70px auto;
      padding: 20px;
      background:rgb(255, 255, 255);
      border-radius: 5px;
      width: 45%;
      position: relative;
      transition: all 3s ease-in-out;
      height: 80%;
    }
    .wrapper h5 {
      margin-top: 0;
      color: #333;
    }
    .wrapper .close{
      position: absolute;
      top: 20px;
      right: 30px;
      transition: all 200ms;
      font-size: 30px;
      font-weight: bold;
    }
    .wrapper .content{
      max-height: 80%;
      overflow: auto;
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
        <a class="nav-link collapsed" href="SenaraiAhliBKK.php">
          <i class="bi bi-clipboard"></i>
          <span>Senarai Ahli BKK</span>
        </a>
      </li> End Senarai Ahli BKK Page Nav 

      <li class="nav-item">
        <a class="nav-link" href="statusByrn.php">
          <i class="bi bi-cash-stack"></i>
          <span>Status Bayaran</span>
        </a>
      </li> End Blank Page Nav -->
      <?php include('sidebar.php'); ?>
    </ul>        
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="color:rgb(73, 67, 67)">Status Bayaran</h1>
      <ul class="breadcrumb">
        <li class="breadcrumb-item active"><i class="bi bi-house-door"></i></li>
        <li style="color:rgb(73, 67, 67)"><a href="dashboardAJK.php">Laman Utama</a></li>
        <li style="color:rgb(73, 67, 67)">Status Bayaran</li>
      </ul> 
    </div> <!-- End Page Title -->

    <section class="section">

    <?php
    if(isset($_SESSION['typeID']))
    {
      if($_SESSION['typeID'] == 3)
      {
        echo "<!--ni untuk button kt belah kanan-->
        <div class='align-right'>
          <button type='button' name='btn_add' class='btn btn-success rounded-pill'><i class='bi bi-me-1'></i><a href='addBayaran.php' style='color:white'>Tambah Maklumat Bayaran</a></button>
        </div><br>";
      }
    } 

      $sql = "SELECT * FROM fee f 
      LEFT JOIN membersdetail m ON f.idMember = m.idMember
      LEFT JOIN paymenttype pt ON f.paymentID = pt.paymentID
      LEFT JOIN paymentstatus ps ON f.statusID = ps.statusID";
      $result = $conn-> query($sql);
      $t = $result-> fetch_assoc();
      ?>
      
    <div class="col-xl-18">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-dhBayar">Sudah Bayar</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-blmBayar">Belum Bayar</button>
            </li>

          </ul>

          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-dhBayar">
            <select name="year" onchange="showYear(this.value)">
          <option value="">Select a year:</option>
          <?php 
          include ("connection.php");

          $sqlYear = "SELECT DISTINCT YEAR(paymentDate) AS YEAR FROM fee WHERE statusID=1";
          $result = $conn->query($sqlYear);
          if ($result-> num_rows > 0)
          {
            while ($row = $result-> fetch_assoc())
            { 
              echo "<option value='". $row['YEAR'] ."'>" .$row['YEAR'] ."</option>";
            }
          }
          $conn-> close();
          ?>
          </select><br>
          <div id="txtHint"></div>
          <script>
          function showYear(str) {
            var xhttp;    
            if (str == "") {
              document.getElementById("txtHint").innerHTML = "";
              return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
              }
            };
            xhttp.open("GET", "Byrn.php?q="+str, true);
            xhttp.send();
          }
          </script>

            </div>

            <div class="tab-pane fade pt-3" id="profile-blmBayar">
            <table class="table datatable" style="border-color:rgb(73, 67, 67)" border="3px">
          <thead>
              <tr>
                <th>No Ahli</th>
                <th>Nama Ahli</th>
                <th>Tarikh Mendaftar</th>
                <th>Tindakan</th>
              </tr>
          </thead>
            <?php 
            include ("connection.php");

            $sql = "SELECT m.noAhli, m.tokenID, m.memberName, DATE(m.registeredDate) AS DATE FROM fee f LEFT JOIN membersdetail m ON f.idMember = m.idMember WHERE f.statusID=2 ORDER BY noAhli ASC";
            $result = $conn->query($sql);

            if($result->num_rows> 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>" . $row['noAhli'] . "</td>";
                    echo "<td>" . $row['memberName'] . "</td>";
                    echo "<td>" . $row['DATE'] . "</td>";
                    echo "<td style='text-align:center'><button type='button' name='btn_view' class='btn btn-success'><i class='bi bi-me-1'></i><a href='mklmtByrnPDF.php?id=".$row['tokenID']."' target='_blank' style='color:white'>Lihat</a></button></td>";
                    echo "</tr>";
                }
            }
            $conn-> close();
            ?>
          </table>
              </div>

        </div>

      </div>
    </div>
      <br>
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