<?php
session_start();
include("connection.php");

$id = $_SESSION['userID'];

$sql="SELECT * FROM  familydetails f  LEFT JOIN membersdetail m ON m.idMember=f.idMember where m.memberIC = '$id'";
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
        <a class="nav-link collapsed" href="updateMaklumatForm.php">
          <i class="bi bi-clipboard"></i>
          <span>Borang Kemaskini Maklumat Ahli</span>
        </a>
      </li><!-- End Form Nav -->

      <li class="nav-item">
        <a class="nav-link" href="tanggungan.php">
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
      <h1 style="color:rgb(73, 67, 67)">Daftar Tanggungan</h1>

    <ul class="breadcrumb">
      <li class="breadcrumb-item active"><a href="dashboardAhli.html"><i class="bi bi-house-door"></i></a></li>
      <li style="color:rgb(73, 67, 67)">Laman Utama</li>
      <li style="color:rgb(73, 67, 67)">Daftar Tanggungan</li><br><br>
    </ul> 
    </div> <!-- End Page Title -->

    <section class="section">
      <div class="row">

      <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">A: DEFINISI "AHLI" DAN "TANGGUNGAN" </h5>
              <p>(PERINGATAN : Sila baca Panduan di BAWAH sebelum mengisi Borang ini)</p>
              <p>1. FASAL (3)(2) - UNDANG-UNDANG KECIL BKK (Pindaan 2015)</p><br>
              <p>Definasi "TANGGUNGAN" bagi seseorang Ahli BKK adalah sebagaimana ditakrifkan di bawah Fasal (3)(2) Undang-Undang Kecil BKK (Pindaan 2015) seperti berikut:-</p><br>
              <p>(i) Isteri. Bagi Ahli yang mempunyai lebih dari satu isteri,termasuk kesemua isteri-isterinya tanpa mengira alamat kediamannya.</p>
              <p>(ii) Anak kandung, anak tiri atau anak angkat (yang di ambil mengikut Undang-undang) dengan SYARAT bagi anak lelaki berumur di bawah 25 tahun. Bagi anak perempuan, selagi mana mereka belum berkahwin. Tiada had umur bagi anak yang kelainan upaya (OKU).</p>
              <p>(iii) Cucu yatim atau piatu.</p>
              <p>(iv) Ibu dan/atau Bapa Ahli dan/atau Ibu dan Bapa Mertua Ahli.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jadual Senarai Pertalian Ahli Yang dibenarkan</h5>
              <p>(PERINGATAN : Sila baca Panduan di BAWAH sebelum mengisi Borang ini)</p>
              <img src="pertalian ahli.png"  class="center" width="550" height="500">
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Tanggungan</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Bil</th>
                    <th scope="col">Nama Penuh Tanggungan</th>
                    <th scope="col">NO. K/P</th>
                    <th scope="col">Pertalian Dengan Ahli</th>
                    <th scope="col">Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  include("connection.php");
                  //$id = $_GET['idMember'];
                  $sql = "SELECT f.idFamilyMember, f.name, f.Ic, r.relType, f.idMember
                  FROM familydetails f 
                  JOIN membersdetail m ON m.idMember = f.idMember
                  JOIN relationship r on f.idRelationship = r.idRelationship
                  WHERE m.memberIC = '" . $_SESSION['userID']."'";
                
                  //read specified row from database
                  $result = $conn->query($sql);

                  if($result !== false && $result->num_rows > 0)
                  {
                    $i=1;

                    while($row = $result->fetch_assoc())
                    {
                      echo "<tr>
                        <td>" . ($i) . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['Ic'] . "</td>
                        <td>" . $row['relType'] . "</td>
                        <td>
                          <div class='btn-group'>
                            <a class='btn btn-danger' href='./delete.php?Ic=" .$row['Ic'] ."'>Delete</a>
                          </div>
                        </td>
                      </tr>";
                      $i++;
                      //<a class='btn btn-success' href='updtanggungan.php'>Edit</a>
                    }
                  }
                  else
                  {
                    echo "0 results";
                  }
                  
                  ?>
                </tbody>
              </table>

              <!-- button link dengan popup form-->
              <div class="text-justify">
                <a href="#divOne" class="btn btn-primary">Tambah Tanggungan</a>
              </div>

              <!-- popup form register maklumat ahli-->
              <div class="overlay" id="divOne">
                <div class="wrapper">
                  <h5>Daftar Maklumat Tanggungan</h5><br>
                  <a href="#" class="close">&times;</a>
                  <div class="content">
                    <div class="container">
                      
                      <!-- form-->
                      <form class="row g-3" action="daftartanggunganaction.php" method="post">

                        <!--<div class="col-md-6">
                          <label for="name" class="form-label">No.ID</label>
                          <input type="number" class="form-control" id="idMember" name="idMember">
                        </div>-->
                        <div class="col-md-12">
                          <label for="name" class="form-label">Nama Penuh Tanggungan</label>
                          <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                          <label for="ic" class="form-label">No. Kad Pengenalan</label>
                          <input type="text" class="form-control" id="Ic" name="Ic" maxlength="14" required>
                        </div>
                        <div class="col-md-6">
                          <label for="idRelationship" class="form-label">Pertalian Dengan Ahli</label>
                          <select  name="idRelationship"id="idRelationship" class="form-select" required>
                            <option selected>Pilih yang berkenaan</option>
                            <option value="1">Isteri/Isteri-isteri</option>
                            <option value="2">Anak Lelaki bawah 25 tahun</option>
                            <option value="3">Anak Perempuan yang belum berkahwin</option>
                            <option value="4">Anak OKU (tiada had umur)</option>
                            <option value="5">Cucu yatim/piatu</option>
                            <option value="6">Ibu/Bapa Ahli atau Ibu/Bapa Mertua Ahli</option>
                          </select>
                        </div>
                        <div class="box">
                          <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
                          <input type="reset" class="btn btn-secondary" value="Padam">
                        </div>
                      </form>
                      <!-- end register tanggungan form -->
                    </div>
                  </div>
                </div>
              </div>

              <!-- edit maklumat tanggungan -->
              <!--<div class="overlay" id="divTwo">
                <div class="wrapper">
                  <h5>Edit Maklumat Tanggungan</h5><br>
                  <a href="#" class="close">&times;</a>
                  <div class="content">
                    <div class="container">
                      form
                      <form class="row g-3" action="updmt.php" method="post">

                        <div class="col-md-12">
                          <label for="name" class="form-label">Nama Penuh Tanggungan</label>
                          <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="age" class="form-label">Umur</label>
                          <input type="number" class="form-control" id="age" name="age" >
                        </div>
                        <div class="col-md-6">
                          <label for="ic" class="form-label">No. Kad Pengenalan</label>
                          <input type="text" class="form-control" id="Ic" name="Ic" maxlength="14" value="<?php echo $row['Ic']; ?>">
                        </div>
                        <div class="col-md-6">
                          <label for="idRelationship" class="form-label">Pertalian Dengan Ahli</label>
                          <select  name="idRelationship"id="idRelationship" class="form-select">
                            <option selected>Pilih yang berkenaan</option>
                            <option value="1">Isteri/Isteri-isteri</option>
                            <option value="2">Anak Lelaki bawah 25 tahun</option>
                            <option value="3">Anak Perempuan yang belum berkahwin</option>
                            <option value="4">Anak OKU (tiada had umur)</option>
                            <option value="5">Cucu yatim/piatu</option>
                            <option value="6">Ibu/Bapa Ahli atau Ibu/Bapa Mertua Ahli</option>
                          </select>
                        </div>
                        <div class="box">
                          <input type="submit" class="btn btn-success" value="Simpan">
                          <input type="reset" class="btn btn-secondary" value="Padam">
                        </div>
                      </form>
                       end form 
                    </div>
                  </div>
                </div>
              </div>-->
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
    $('#Ic').inputmask('999999-99-9999',{placeholder:'XXXXXX-XX-XXXX'})
  });
</script>
<?php
$conn->close();
?>