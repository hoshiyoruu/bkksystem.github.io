<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login BKK Madrasah Hidayah System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="unnamed.png" rel="icon">
    <link href="unnamed.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Set dash automatic keluar sendiri guna input mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
    
    <!-- Prevent browser from going back to login form page once user is logged in-->
    <script type="text/javascript">
      function preventBack(){window.history.forward()};
      setTimeout("preventBack()",0);
      window.onunload=function(){null;}
    </script>

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
    <main>
      <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                  <!--<a href="index.html" target="_blank" class="logo d-flex align-items-center w-auto">-->
                    <img src="unnamed.png" width="100" height="100" alt="">
                    <span style="text-align:center; color:rgb(37, 124, 91); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: xx-large;">BKK Madrasah Hidayah System</span>
                  </a>
                </div><!-- End Logo -->

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4" style="color:black">Daftar Masuk Akaun</h5>
                    </div><!--pt-4 pb-2-->

                    <!--<form class="row g-3 needs-validation" novalidate>-->
                    <form id="login" name="login" method="post" action="plogin.php">
                        
                    <!--AJK login-->
                    <div class="tab-content pt-2" id="myTabjustifiedContent">
                    <div class="tab-pane fade show active" id="Ahli-justified" role="tabpanel" aria-labelledby="Ahli-tab">
                        <div class="col-12">
                        <label for="userID" class="form-label">IC</label>
                        <div class="input-group has-validation">
                            <input type="text" name="userID" class="form-control" id="userID" maxlength="14" required/>
                        </div>
                        </div>
                        <br>
                        <div class="col-12">
                        <label for="userPassword" class="form-label">Kata Laluan</label>
                        <input type="password" name="userPassword" class="form-control" id="userPassword" required/>
                        </div>
                        <br>
                        <div class="col-12">
                        <button class="btn btn-success w-100" name="login" type="submit">Daftar Masuk</button>
                        </div>
                        <br>
                        <div class="col-12">
                        <button class="btn btn-success w-100" name="ajkLogin" type="ajkLogin"><a href="loginAJK.php" style="color: white">AJK BKK</a></button>
                        </div>
                        <div class="col-12">
                            <p class="small mb-0">Ahli Baru? <a href="registrationForm.php">Borang Ahli BKK Madrasah Hidayah</a></p>
                        </div>
                    </div>
                    </form>

                  </div><!--card body-->
                </div><!--card mb-3-->

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

<script language="javascript">
  $(document).ready(function(){
    $('#userID').inputmask('999999-99-9999',{placeholder:'XXXXXX-XX-XXXX'})
  });
</script>