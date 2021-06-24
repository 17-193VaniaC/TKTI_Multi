<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TKTI - Kebutuhan Perusahaan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="<?php echo base_url(); ?>img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo site_url('welcome/index') ?>">Home</a></li>
          <li><a href="<?php echo site_url('welcome/index#about') ?>">About</a></li>
          <li><a href="<?php echo site_url('welcome/index#team') ?>">Team</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo site_url('welcome/index') ?>">Home</a></li>
          <li><a href="<?php echo site_url('form/index') ?>">Kebutuhan Perusahaan</a></li>
        </ol>
        <h2>Pemilihan Kebutuhan Perusahaan</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="kuis">
        <div class="section-title2">
            <h2>Pemilihan Jenis Perusahaan</h2>
        </div>

      <div class="container">
        <form action="<?= site_url('process/kebutuhan') ?>" role="form" method="POST" id="formVote">
          <?php foreach ($perusahaan as $perusahaan): ?>
              <div class="card my-4 mx-3">
                  <div class="card-body">
                      <tr>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="radio" id="inlineRadio" value="<?php echo $perusahaan->id_jenis_perusahaan; ?>">
                              <label class="form-check-label" for="inlineRadio"><?php echo $perusahaan->nama_jenis_perusahaan ?></label>
                          </div>
                          <br>
                      </tr>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>

    <div class="section-title2">
        <h2>Pemilihan IT Resource</h2>
    </div>

      <div class="container">
          <?php foreach ($resource as $resource): ?>
              <div class="card my-4 mx-3">
                  <div class="card-body">
                      <tr>
                          <div class="form-check form-check-inline">
                              <input type="checkbox" name="resource[]" alt="Checkbox" value="<?php echo $resource->id_it_resource; ?>"> <?php echo $resource->it_resource; ?>
                              <!-- <input class="form-check-input" type="radio" name="radio2" id="inlineRadio2" value="<?php echo $resource->id_it_resource; ?>"> -->
                              <!-- <label class="form-check-label" for="inlineRadio2"><?php echo $resource->it_resource ?></label> -->
                          </div>
                          <br>
                      </tr>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>

    <div class="section-title2">
        <h2>Pemilihan Domain IT Process</h2>
    </div>

      <div class="container">
          <?php foreach ($domain as $domain): ?>
              <div class="card my-4 mx-3">
                  <div class="card-body">
                      <tr>
                          <div class="form-check form-check-inline">
                              <input type="checkbox" name="domain[]" alt="Checkbox" value="<?php echo $domain->id_domain; ?>"> <?php echo $domain->nama_domain ?>
                          </div>
                          <br>
                      </tr>
                  </div>
              </div>
          <?php endforeach; ?>
          <input class="btn btn-primary btn-sm float-right" type="submit" name="submit" value="Kirim" />
          </form>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>js/main.js"></script>

</body>

</html>