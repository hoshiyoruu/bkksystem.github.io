<?php
session_start();
include("connection.php");

$id = $_GET['id'];
$sql = "SELECT * FROM membersdetail m WHERE tokenID = '$id'";
$result = $conn-> query($sql);
$fetch = $result->fetch_assoc();

?>

<style>
  /**h1{text-align: center;}*/
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
 /* width: 50%;*/
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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="dashboardAJK.php" class="logo d-flex align-items-center">
          <img src="unnamed.png" alt="">
          <span class="d-none d-lg-block">Borang Pendaftaran Ahli BKK</span>
        </a>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Panduan Mengisi Borang Permohonan Menjadi Ahli BKK</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-9">
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

        <div class="col-lg-9">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jadual Senarai Pertalian Ahli Yang dibenarkan</h5>
              <p>(PERINGATAN : Sila baca Panduan di BAWAH sebelum mengisi Borang ini)</p>
              <img src="pertalian ahli.png"  class="center" width="550" height="500">
            </div>
          </div>
        </div>

        <div class="col-lg-9">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Panduan Mengisi Borang</h5>
              <p>Anda dikehendaki menjawab semua soalan yang bertanda asterisk (*) dan jangan dibiarkan kosong. Jika tiada jawapan atau tidak berkaitan, taip "spacebar' atau dash (-) bagi mengisi jawapan tersebut.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-9">
          <div class="card">
            <div class="card-body"><br>
              <!--<h5 class="card-title">Kemaskini Maklumat Ahli</h5>-->

              <!-- start form register maklumat ahli -->
              <form class="row g-10"  action="pengesahanaction.php" method="POST">
                <!--<div class="col-md-6">
                    <label for="idMember" class="form-label">No. Ahli</label>
                    <input type="text" class="form-control" id="noAhli" name="noAhli" value="<?php echo $fetch['noAhli']?>">
                </div>-->
                <div class="col-md-6">
                    <label for="memberIC" class="form-label">No.Kad Pengenalan</label>
                    <input type="text" class="form-control" id="memberIC" name="memberIC" value="<?php echo $fetch['memberIC']?>">
                    <div class="invalid-feedback">
                      Sila Masukkan No. Kad Pengenalan
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="memberName" class="form-label">Nama Penuh</label>
                  <input type="text" class="form-control" id="memberName" name="memberName" value="<?php echo $fetch['memberName']?>">
                  <input type="text" class="form-control" id="token" name="token" value="<?php echo $id;?>">
                  <div class="invalid-feedback">
                      Sila Masukkan Nama Penuh
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="phoneNum" class="form-label">No. Telefon Bimbit</label>
                  <input type="text" class="form-control" id="phoneNum" name="phoneNum" value="<?php echo $fetch['phoneNum']?>">
                </div>
                <div class="col-md-6">
                  <label for="homeNum" class="form-label">No. Telefon Rumah</label>
                  <input type="text" class="form-control" id="homeNum" name="homeNum" value="<?php 
                  if($fetch['homeNum'] == null)
                  {
                    echo "Tiada";
                  }
                  else
                  {
                    echo $fetch['homeNum'];
                  }?>">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Emel</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php 
                  if($fetch['email'] == null)
                  {
                    echo "Tiada";
                  }
                  else
                  {
                    echo $fetch['email'];
                  }?>">
                </div>
                <div class="col-12">
                  <label for="address1" class="form-label">Alamat 1</label>
                  <input type="text" class="form-control" id="address1" name="address1" value="<?php echo $fetch['address1']?>">
                </div>
                <div class="col-12">
                  <label for="address2" class="form-label">Alamat 2</label>
                  <input type="text" class="form-control" id="address2" name="address2" value="<?php echo $fetch['address2']?>">
                </div>
                <div class="col-md-4">
                  <label for="city" class="form-label">Daerah</label>
                  <input type="text" class="form-control" id="city" name="city" value="<?php echo $fetch['city']?>">
                </div>
                <div class="col-md-4">
                  <label for="state" class="form-label">Negeri</label>
                  <input type="text" class="form-control" id="state" name="state" value="<?php echo $fetch['state']?>">
                  <br>
                </div>
                <div class="col-md-4">
                  <label for="postcode" class="form-label">Postcode</label>
                  <input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo $fetch['postcode']?>">
                </div><br>
                <!--<?php 
                $i = 1;
                if($result-> num_rows > 0)
                {
                  echo '<tr>
                  <td>'.$i.'</td>
                  <td>'.$fetch['name'].'</td>
                  <td>'.$fetch['relType'].'</td>
                  <td>'.$fetch['Ic'].'</td>
                  </tr>';
                }?>-->

                <span>Senarai Tanggungan</span>
                <table class="table table-bordered border-dark">
                  <thead style="text-align:center">
                    <tr>
                      <th>Bil.</th>
                      <th>Nama Tanggungan</th>
                      <th>Pertalian</th>
                      <th>No KP</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    //$id=$_GET['id'];
                    $sqlFam = "SELECT * FROM membersdetail m LEFT JOIN familydetails fd ON m.idMember = fd.idMember LEFT JOIN relationship r ON fd.idRelationship = r.idRelationship WHERE tokenID='$id'";
                    $result = $conn->query($sqlFam);
                    if($result-> num_rows > 0)
                    {
                      $i = 1;
                      while($fetch = $result->fetch_assoc())
                      {
                        echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$fetch['name'].'</td>
                        <td>'.$fetch['relType'].'</td>
                        <td>'.$fetch['Ic'].'</td>
                        </tr>';
                        $i++;
                      }
                    }?>
                  </tbody>
                  </table>
                  <div class="col-md-6">
                  <label for="idStatusReg" class="form-label">Pengesahan</label>
                  <select  name="idStatusReg"id="idStatusReg" class="form-select">
                    <option selected>Pilih yang berkenaan</option>
                    <option value="A">SAH</option>
                    <option value="R">TIDAK SAH</option>
                  </select>
                </div>
                <div class="box">
                  <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                  <a class="btn btn-secondary" href="dashboardAJK.php">Kembali</a>
                </div>
              </form>
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

<?php
$conn->close();
?>