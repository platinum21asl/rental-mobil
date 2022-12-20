<!DOCTYPE html>
<html lang="en">

<head>
      <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/animate.css">

      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/magnific-popup.css">

      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/aos.css">

      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/ionicons.min.css">

      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/jquery.timepicker.css">


      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/flaticon.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/icomoon.css">
      <link rel="stylesheet" href="<?= base_url(); ?>assets/assets_shop/css/style.css">
</head>

<body>

      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                  <a class="navbar-brand" href="<?= base_url('customer/dashboard'); ?>">Car<span>Book</span></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                  </button>

                  <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                              <li class="nav-item"><a href="<?= base_url('customer/dashboard'); ?>" class="nav-link">Home</a></li>
                              <li class="nav-item"><a href="<?= base_url('customer/data_mobil'); ?>" class="nav-link">Mobil</a></li>
                              <li class="nav-item"><a href="<?= base_url('customer/transaksi'); ?>" class="nav-link">Transaksi</a></li>
                              <li class="nav-item"><a href="<?= base_url('register'); ?>" class="nav-link">Register</a></li>
                              <?php if ($this->session->userdata('nama')) { ?>
                                    <li class="nav-item"><a href="<?= base_url('auth/logout'); ?>" class="nav-link">Welcome <?= $this->session->userdata('nama'); ?><span> | Logout</span></a></li>
                              <?php } else { ?>
                                    <li class="nav-item"><a href="<?= base_url('auth'); ?>" class="nav-link">login</a></li>
                              <?php } ?>

                        </ul>
                  </div>
            </div>
      </nav>
      <!-- END nav -->