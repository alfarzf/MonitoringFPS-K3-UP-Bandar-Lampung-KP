<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/logo_pln.png'); ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script defer src="<?php #base_url('assets/js/chart.js'); ?>"></script>
  <script defer src="<?php #base_url('assets/js/chart2.js'); ?>"></script>
  <script defer src="<?php #base_url('assets/js/chart3.js'); ?>"></script>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="#" class="logo d-flex align-items-center">
    <img src="<?= base_url('assets/img/logo_plnnp.jpg') ?>" alt="">
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->
</header>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('petugas')?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('petugas/laporan')?>">
        <i class="bi bi-menu-button-wide"></i>
        <span>Laporan Kondisi Alat</span>
      </a>
    </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('petugas/jadwal')?>">
          <i class="bi bi-layout-text-window-reverse"></i><span>Jadwal Pemeriksaan Alat</span></i>
        </a>
      </li>

    <li class="nav-item">
      <a type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalHapusPetugas">
        <i class="bi bi-box-arrow-right"></i>
        <span>Keluar</span>
      </a>
    </li>
</ul>
</aside><!-- End Sidebar-->

<?= $this->renderSection('content') ?>
<footer class="text-center">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        </section>
        <!-- Section: Social media -->
      
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            
              <div class="logo-pln">
                <h6 class="text-uppercase fw-bold mb-4">
                  PLN Nusantara Power
                </h6>
                <img src="<?= base_url('assets/img/logo_plnnp.jpg')?>" alt="">
              </div>
  
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                 <div class="hubungikami">
                    <h6 class="text-uppercase fw-bold mb-4">
                      Hubungi Kami
                    </h6>
                    <p class="inline-content">
                      <a class="nav-link" href="https://www.instagram.com/plnnp.updkbandarlampung/">
                        <i class="fab fa-instagram"></i><span>Instagram</span></i>
                      </a>
                    </p>
                    <p class="inline-content">
                      <a class="nav-link" href="https://www.plnnusantarapower.co.id/eam/">
                        <i class="fab fa-google"></i><span>Website</span></i>
                      </a>
                    </p>
                    <p class="inline-content">
                      <a class="nav-link" href="https://www.youtube.com/@PLNNPUPDKBDL">
                        <i class="fab fa-youtube"></i><span>Youtube</span></i>
                      </a>
                    </p>
                 </div>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <div class="lokasi">
                  <h6 class="text-uppercase fw-bold mb-4">
                    Lokasi
                  </h6>
                  <p class="inline-content">
                    <a class="nav-link" href="https://maps.app.goo.gl/7HWwjJkC25f8JDjWA">
                      Jl. Raden Gunawan II, No.4, Lampung
                    </a>
                  </p>
                </div>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center p-4">
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
  </footer>
  </main><!-- End #main -->

  <div class="modal fade" id="modalHapusPetugas" tabindex="-1" aria-labelledby="modalHapusPetugas" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalHapusPetugas">Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
          <div class="modal-body">
            <p>Anda yakin ingin logout?</p>
          </div>
          <div class="modal-footer">
            <a href="<?= url_to('logout')?>" type="button" class="btn btn-primary" style="width: 252px;">Iya</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          </div>
        </div>
    
      </div>
    </div>
  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/chart.js/chart.umd.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/quill/quill.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>