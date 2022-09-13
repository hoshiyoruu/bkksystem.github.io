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
  <!--<link href="unnamed.png" rel="apple-touch-icon">-->

  <!-- Set dash keluar automatic in ic form-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>

  <!-- Prevent browser from going back to login form page once user is logged in-->
  <script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
  </script>

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
      max-height: 60%;
      overflow: auto;
    }

    /* form design*/ 

    input[type="submit"]{
      text-align: center;
    }

  </style>

</head>

<body style="background-color:rgb(255, 255, 255)">

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
        <a class="nav-link collapsed" href="dashboardAhli.php">
          <i class="bi bi-grid"></i>
          <span>Laman Utama</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" href="updateMaklumatForm.php">
          <i class="bi bi-clipboard"></i>
          <span>Borang Kemaskini Maklumat Ahli</span>
        </a>
      </li><!-- End Form Nav -->

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
      </li><!-- End Status Yuran Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="plogoutAhli.php">
          <i class="bi bi-box-arrow-right"></i>
          <span style="color:red">Daftar Keluar</span>
        </a>
      </li>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="color:rgb(73, 67, 67)">Borang Kemaskini Maklumat Ahli</h1>

    <ul class="breadcrumb">
      <li class="breadcrumb-item active"><a href="dashboardAhli.html"><i class="bi bi-house-door"></i></a></li>
      <li style="color:rgb(73, 67, 67)">Laman Utama</li>
      <li style="color:rgb(73, 67, 67)">Borang Kemaskini Maklumat Ahli</li><br><br>
    </ul> 
    </div> <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kemaskini Maklumat Ahli</h5>
              <!-- General Form Elements -->
              <form class="row g-10" action="updateaction.php" method="post">
                <!--<div class="col-md-6">
                    <label for="idMember" class="form-label">No. Ahli</label>
                    <input type="text" class="form-control" id="noAhli" name="noAhli" value="">
                </div>-->
                <div class="col-md-6">
                    <label for="memberIC" class="form-label">No.Kad Pengenalan</label>
                    <input type="text" class="form-control" id="memberIC" name="memberIC" maxlength="14" value="<?php echo $row['memberIC']; ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="memberName" class="form-label">Nama Penuh</label>
                  <input type="text" class="form-control" id="memberName" name="memberName" value="<?php echo $row['memberName']; ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="phoneNum" class="form-label">No. Telefon Bimbit</label>
                  <input type="text" class="form-control" id="phoneNum" name="phoneNum" placeholder="012-3456789" maxlength="11" value="<?php echo $row['phoneNum']; ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="homeNum" class="form-label">No. Telefon Rumah</label>
                  <input type="text" class="form-control" id="homeNum" name="homeNum" placeholder="06-12345678" maxlength="11" value="<?php echo $row['homeNum']; ?>">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="ahmad123@yahoo.com" value="<?php echo $row['email']; ?>" required>
                </div>
                <div class="col-12">
                  <label for="address1" class="form-label">Alamat 1</label>
                  <input type="text" class="form-control" id="address1" name="address1" placeholder="1, Jalan Guli, 11/1B" value="<?php echo $row['address1']; ?>" required>
                </div>
                <div class="col-12">
                  <label for="address2" class="form-label">Alamat 2</label>
                  <input type="text" class="form-control" id="address2" name="address2" placeholder="Seksyen 11" value="<?php echo $row['address2']; ?>" required>
                </div>
                <div class="col-md-4">
                  <label for="city" class="form-label">Daerah</label>
                  <input type="text" class="form-control" id="city" name="city" value="<?php echo $row['city']; ?>" required>
                </div>
                <div class="col-md-4">
                  <label for="state" class="form-label">Negeri</label>
                  <input type="text" class="form-control" id="state" name="state" value="<?php echo $row['state']; ?>" required><br>
                </div>
                <div class="col-md-4">
                  <label for="postcode" class="form-label">Poskod</label>
                  <input type="int" class="form-control" id="postcode" name="postcode" maxlength="5" value="<?php echo $row['postcode']; ?>"required>
                </div><br>
                <div class="text-center">
                  <input type="submit" name="s" class="btn btn-success" value="Simpan">
                  <!--<input type="reset" class="btn btn-secondary" value="Padam">-->
                </div>
              </form>
               <!--End General Form Elements-->
            </div>
          </div>
        </div>
      </div>
          
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

<script language="javascript">
  $(document).ready(function(){
    $('#memberIC').inputmask('999999-99-9999',{placeholder:'XXXXXX-XX-XXXX'})
    $('#phoneNum').inputmask('999-9999999',{placeholder:'XXX-XXXXXXX'})
    $('#homeNum').inputmask('99-99999999',{placeholder:'XX-XXXXXXXX'})
  });
</script>

<?php
$conn->close();
?>