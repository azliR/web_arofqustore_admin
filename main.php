<?php

session_start();

if ($_COOKIE['username'] != '' and $_COOKIE['password'] != '') {
  $_SESSION['username'] = $_COOKIE['username'];
  $_SESSION['password'] = $_COOKIE['password'];
}

if (@$_SESSION['username'] == '' and @$_SESSION['password'] == '') {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arofqustore | Admin Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="main.php?halaman=home" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link">Log out</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Rizal Hadiyansah
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">✔</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Baru saja</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Siti Masitoh
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">🤍</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 32 menit yang lalu</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Lihat semua pesan</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">5</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">5 Notifikasi</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 2 Pesan baru
              <span class="float-right text-muted text-sm">Baru saja</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 laporan baru
              <span class="float-right text-muted text-sm">2 jam yang lalu</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Lihat semua notifikasi</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="main.php" class="brand-link">
        <img src="dist/img/log.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Arofqustore</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="https://cvku.online/ririn/Profil/" class="d-block">Ririn Siti Arofah</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="main.php?halaman=home" class="nav-link  <?php if ($_GET['halaman'] == "home") echo 'active' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?halaman=produk" class="nav-link <?php if ($_GET['halaman'] == "produk") echo 'active' ?>">
                <i class=" nav-icon fas fa-th"></i>
                <p>
                  Produk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?halaman=pembelian" class="nav-link  <?php if ($_GET['halaman'] == "pembelian") echo 'active' ?>">
                <i class=" nav-icon fas fa-cart-plus"></i>
                <p>
                  Pembelian
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?halaman=laporan" class="nav-link  <?php if ($_GET['halaman'] == "laporan") echo 'active' ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?halaman=pelanggan" class="nav-link  <?php if ($_GET['halaman'] == "pelanggan") echo 'active' ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Pelanggan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://arofqustore.online" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
                <p>
                  Kunjungi Toko
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  Log Outs
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <form>
                  <div class="card-body">


                    <?php
                    if (isset($_GET['halaman'])) {
                      if ($_GET['halaman'] == "produk") {
                        include 'produk.php';
                      } elseif ($_GET['halaman'] == "pembelian") {
                        include 'pembelian.php';
                      } elseif ($_GET['halaman'] == "pelanggan") {
                        include 'pelanggan.php';
                      } elseif ($_GET['halaman'] == "detail") {
                        include 'detail.php';
                      } elseif ($_GET['halaman'] == "tambahproduk") {
                        include 'tambahproduk.php';
                      } elseif ($_GET['halaman'] == "ubahproduk") {
                        include 'ubahproduk.php';
                      } elseif ($_GET['halaman'] == "berhasil") {
                        include 'berhasil.php';
                      } elseif ($_GET['halaman'] == "logout") {
                        include 'logout.php';
                      } elseif ($_GET['halaman'] == "pembayaran") {
                        include 'pembayaran.php';
                      } elseif ($_GET['halaman'] == "laporan") {
                        include 'laporan.php';
                      } elseif ($_GET['halaman'] == "ubahpelanggan") {
                        include 'ubahpelanggan.php';
                      } elseif ($_GET['halaman'] == "home") {
                        include 'home.php';
                      }
                    } else {
                      include 'home.php';
                    }
                    ?>


                  </div>
                  <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>