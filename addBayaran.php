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

    .selectt {
      color: black;
      display: none;
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

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
      <h1>Tambah Maklumat Bayaran</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-9">
          <div class="card">
            <div class="card-body"><br>
              <h5 class="card-title">Maklumat Bayaran</h5>

              <form class="row g-3" action="newmaklumatByrn.php" method="post">
                <div class="col-md-12">
                  <label for="idMember" class="form-label">No. Ahli</label>
                  <input type="text" class="form-control" id="noAhli" name="noAhli" required>
                </div>
                <div class="col-md-12">
                  <label for="memberName" class="form-label">Nama Ahli: </label>
                  <input type="text" class="form-control" id="memberName" name="memberName" required>
                </div>
                <div class="col-md-12">
                  <label for="feeName" class="form-label">Nama Bayaran: </label>
                  <input type="text" class="form-control" id="feeName" name="feeName" placeholder="e.g. Yuran Tahunan / Yuran Pendaftaran " required>
                </div>
                <div class="col-md-12">
                  <label for="amount" class="form-label">Jumlah Bayaran: </label>
                  <input type="text" class="form-control" id="amount" name="amount">
                </div>
                <div class="col-md-12">
                  <label for="statusID" class="form-label">Status Bayaran: </label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusID" id="1" value="1">
                    <label class="form-check-label" for="sudahBayar">Sudah Bayar</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statusID" id="2" value="2">
                    <label class="form-check-label" for="belumBayar">Belum Bayar</label>
                  </div>

                  <script type="text/javascript">
                    $(document).ready(function() {
                        $('input[type="radio"]').click(function() {
                            var inputValue = $(this).attr("value");
                            var targetBox = $("." + inputValue);
                            $(".selectt").not(targetBox).hide();
                            $(targetBox).show();
                        });
                    });
                  </script>
                </div>

                <div class="1 selectt">
                  <div class="col-md-12" id="jenisByrn">
                    <label for="paymentID" class="form-label">Jenis Bayaran: </label><br>
                    <div class="dropdown">
                      <select class="form-select" aria-label="Default select example" name="paymentID" id="paymentID">
                        <option value="0"> Pilih jenis bayaran</option>
                        <option value="10">Tunai</option>
                        <option value="20">Transaksi Atas Talian</option>
                      </select>
                    </div><br>

                    <div id="10" style="display:none">
                      <label for="receiptNo1" class="form-label">No Resit: </label>
                      <input type="text" class="form-control" id="receiptNo1" name="receiptNo1" maxlength="7"><br> 
                      <label for="paymentDate1" class="form-label">Tarikh Pembayaran: </label>
                      <input type="date" class="form-control" id="paymentDate1" name="paymentDate1" placeholder="TTTT-BB-HH"> 
                    </div>

                    <div id="20" style="display:none"> 
                      <label for="receiptNo2" class="form-label">No Resit: </label>
                      <input type="text" class="form-control" id="receiptNo2" name="receiptNo2" maxlength="7"><br> 
                      <label for="transactionNo" class="form-label">No Transaksi: </label>
                      <input type="text" class="form-control" id="transactionNo" name="transactionNo" maxlength="8"><br> 
                      <label for="paymentDate2" class="form-label">Tarikh Pembayaran: </label>
                      <input type="date" class="form-control" placeholder="TTTT-BB-HH" id="paymentDate2" name="paymentDate2"> 
                      <br>
                    </div>

                    <script type="text/javascript">
                      $('#paymentID').on('change', function () {
                          if(this.value === "10"){
                              $("#10").show();
                              $("#20").hide();
                          } else if(this.value === "20"){
                              $("#10").hide();
                              $("#20").show();
                          }
                          else{
                              $("#10").hide();
                              $("#20").hide();
                          }
                      });
                    </script>

                  </div>
                </div>
              
                <div class="box">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <input type="reset" class="btn btn-danger" value="Padam">
                    <button type="button" name="btn_add" class="btn btn-secondary"><i class="bi bi-me-1"></i><a href="statusByrn.php" style='color:white'>Kembali</a></button>
                </div>
                
              </form><!-- end form -->
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