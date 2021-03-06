<!DOCTYPE html>
<html lang="en">

<head>
  <title>Medisol</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/css/owl.theme.default.min.css">


  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/css/aos.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>asset/front-end/css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="<?= base_url('pencarian/cari') ?>" method="post">
            <input type="text" class="form-control" placeholder="Pencarian obat, apotek dan lowongan" name="cari">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="<?= base_url() ?>" class="js-logo-clone"><strong class="text-primary">MEDISOL</strong></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li <?php if ($this->uri->segment(1) == "home" || $this->uri->segment(1) == "") {
                      echo 'class="active"';
                    } else {
                      echo 'class=""';
                    } ?>><a href="<?php echo base_url() ?>home">Home</a></li>
                <li <?php if ($this->uri->segment(1) == "product") {
                      echo 'class="active"';
                    } else {
                      echo 'class=""';
                    } ?>><a href="<?php echo base_url() ?>product">Obat</a></li>
                <li <?php if ($this->uri->segment(1) == "apotek") {
                      echo 'class="active"';
                    } else {
                      echo 'class=""';
                    } ?>><a href="<?php echo base_url() ?>apotek/list">Apotek</a></li>
                <li <?php if ($this->uri->segment(1) == "lowongan") {
                      echo 'class="active"';
                    } else {
                      echo 'class=""';
                    } ?>><a href="<?php echo base_url() ?>lowongan">Lowongan</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="<?= base_url() . "login" ?>" class="icons-btn d-inline-block bag">
              <span class="icon-user"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>