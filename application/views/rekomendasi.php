<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TKTI - Rekomendasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>vendor//bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor//icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor//boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor//remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor//venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor//owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendor//aos/aos.css" rel="stylesheet">

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
          <li><a href="<?php echo site_url('process/kebutuhan') ?>">IT Process</a></li>
          <li><a href="<?php echo site_url('kuesioner/index') ?>">Kuesioner</a></li>
          <li><a href="<?php echo site_url('rekomendasi/index') ?>">Rekomendasi</a></li>
        </ol>
        <h2>Hasil dan Rekomendasi </h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="hasil" class="hasil">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo base_url(); ?>img/skills.png" class="img-fluid" alt="" width="500" height="400">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3><?=$it_process?></h3>
            <p class="font-italic">
              Berikut adalah hasil penghitungan maturity level pada proses TI: <?=$it_process?>.
            </p>

            <div class="skills-content">

              <div class="progress">
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" style="width: <?=$nilai_maturity_persen?>%" aria-valuenow="<?=$nilai_maturity?>" aria-valuemin="0" aria-valuemax="5"></div>
                  <div class="progress-bar-target" role="progressbar" style="width: 100%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"></div>
                </div>
              </div>

              <p class="font-italic">
                Nilai maturity level adalah <?=$nilai_maturity?> dan masuk pada level <?=$level?>.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <h3> Rekomendasi</h3>
        <h4><?php  
        if ($tingkat==1) {
          echo "<h4>Tingkatkan :</h4>";
        }
        if ($tingkat==2){
          echo "<h4>Sempurnakan :</h4>";
        }

        ?>
          
        </h4>
        <?php foreach ($rekomendasi as $rekomendasi): ?>
          <?php foreach ($list_kekurangan as $kekurangan): ?>
            <?php if (!($rekomendasi->id_pertanyaan == $kekurangan)) continue; ?>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><p><?php echo $rekomendasi->rekomendasi ?></p></li>
              </ul>
          <?php endforeach; ?>    
        <?php endforeach; ?>
      </div>
    </section><!-- End Hasil Section -->
  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>vendor//jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor//bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor//jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor//php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>vendor//waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor//isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor//venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor//owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor//aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>js/main.js"></script>

</body>

</html>