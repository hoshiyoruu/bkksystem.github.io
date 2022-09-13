<?php
session_start();
include("connection.php");

function getNoAhli($conn)
{
  $sql = "SELECT MAX(idMember) AS noAhli FROM membersdetail";
  $qry = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($qry);

  if($row > 0)
  {
    $r = mysqli_fetch_assoc($qry);

    return $r['noAhli'] + 1;
  }
}
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

  <!-- Set dash automatic keluar sendiri guna input mask -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>


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
        <a href="loginAhli.php" class="logo d-flex align-items-center">
          <img src="unnamed.png" alt="">
          <span class="d-none d-lg-block">Borang Pendaftaran Ahli BKK</span>
        </a>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Ahli BKK</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-9">
          <div class="card">
            <div class="card-body"><br>
              <h5 class="card-title">Daftar Maklumat Ahli</h5>

              <!-- start form register maklumat ahli -->
              <form class="row g-10" action="registeraction.php" id="form" method="post">
                <!--<div class="col-md-6">
                    <label for="idMember" class="form-label">Id</label>
                    <input type="text" class="form-control" id="idMember" name="idMember" value="<?php echo getNoAhli($conn); ?>">
                </div>-->
                <div class="col-md-6">
                    <label for="memberIC" class="form-label">No.Kad Pengenalan</label>
                    <input type="text" class="form-control" id="memberIC" name="memberIC" maxlength="14" required>
                </div>
                <div class="col-md-12">
                  <label for="memberName" class="form-label">Nama Penuh</label>
                  <input type="text" class="form-control" id="memberName" name="memberName" required>
                </div>
                <div class="col-md-6">
                  <label for="phoneNum" class="form-label">No. Telefon Bimbit</label>
                  <input type="text" class="form-control" id="phoneNum" name="phoneNum" placeholder="012-3456789"  required>
                </div>
                <div class="col-md-6">
                  <label for="homeNum" class="form-label">No. Telefon Rumah</label>
                  <input type="text" class="form-control" id="homeNum" name="homeNum" maxlength="11" placeholder="06-12345678">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Emel</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-12">
                  <label for="address1" class="form-label">Alamat 1</label>
                  <input type="text" class="form-control" id="address1" name="address1" placeholder="1, Jalan Guli, 11/1B" required>
                </div>
                <div class="col-12">
                  <label for="address2" class="form-label">Alamat 2</label>
                  <input type="text" class="form-control" id="address2" name="address2" placeholder="Seksyen 11" required>
                </div>
                <div class="col-md-4">
                  <label for="city" class="form-label">Daerah</label>
                  <select name="city" id="city" class="form-select" required>
                    <option value="Shah Alam" selected>Shah Alam</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="state" class="form-label">Negeri</label>
                  <select name="state" id="state" class="form-select"required>
                    <option value="Selangor" selected>Selangor</option>
                  </select>
                  <br>
                </div>
                <div class="col-md-4">
                  <label for="postcode" class="form-label">Postcode</label>
                  <input type="text" class="form-control" id="postcode" name="postcode" maxlength="5" required>
                </div><br><br>

                <div class="text-center">
                  <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                  <input type="reset" class="btn btn-secondary" value="Padam">
                </div>

                <!--<div class="text-center">
                  <a href="loginAhli.php" class="btn btn-link">Daftar Masuk</a>
                </div>-->

              </form>
              <!-- end form register maklumat ahli-->
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
    $('#phoneNum').inputmask('999-9999999', {placeholder: 'XXX-XXXXXX'})
    $('#homeNum').inputmask('99-99999999',{placeholder:'XX-XXXXXXXX'})

  });
</script>

<?php
$conn->close();
?>