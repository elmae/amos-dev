<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

  <title><?php wp_title(); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <!-- Container wrapper -->
  <div class="container py-3 d-none d-lg-block">
    <div class="row">
      <div class="col-md">
        <a class="" href="#">
          <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="24" alt="MDB Logo"
            loading="lazy" />
        </a>
      </div>
    </div>
  </div>
  <!-- Container wrapper -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="justify-content-center navbar-brand py-3 mt-2 mt-lg-0 d-lg-none" href="#">
          <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="24" alt="MDB Logo"
            loading="lazy" />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="text-reset me-3" href="#">
          <i class="fab fa-facebook"></i>
        </a>
        <a class="text-reset me-3" href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->