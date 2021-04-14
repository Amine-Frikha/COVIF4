<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">
  <!-- ChartJs -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?PHP ECHO BASE_URL(); ?>contact" class="nav-link">Contactez-Nous</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?PHP ECHO BASE_URL(); ?>faq" class="nav-link">Questions Fréquemment Posées</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url(); ?>/users/logout" class="nav-link">Déconnexion</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?PHP ECHO BASE_URL(); ?>acceuil" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">COV<strong>IF4</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/dist/img/unnamed.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php 
            $nom = $this->session->userdata('nom');
            $prenom = $this->session->userdata('prenom');   
          ?>
          <a href="#" class="d-block"><?php echo $nom.' '.$prenom;?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?PHP ECHO BASE_URL(); ?>acceuil" class="nav-link <?php if ($title=='COVIF4') {echo 'active';} ?>">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Acceuil
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?PHP ECHO BASE_URL(); ?>inscription" class="nav-link <?php if ($title=='inscription') {echo 'active';} ?>">
                <i class="nav-icon fas fa-syringe"></i>
                <p>
                  Inscription vaccin
                </p>
              </a>
            </li>
<<<<<<< HEAD
            <?php if ($type=='admin'){ ?>
              <li class="nav-item menu<?php if ($title=='liste complete'||$title=='Non vaccinés'||$title=='Vaccinés une fois') {echo '-open';} ?>">
                <a href="#" class="nav-link <?php if ($title=='liste complete'||$title=='Non vaccinés'||$title=='Vaccinés une fois') {echo 'active';} ?>">
                  <i class="nav-icon fas fa-notes-medical"></i>
                  <p>
                    Gestion
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?PHP ECHO BASE_URL(); ?>gestion" class="nav-link <?php if ($title=='liste complete') {echo 'active';} ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Liste complete</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?PHP ECHO BASE_URL(); ?>gestion/non_vaccines" class="nav-link <?php if ($title=='Non vaccinés') {echo 'active';} ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Non vaccinés</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?PHP ECHO BASE_URL(); ?>gestion/vaccines_1_fois" class="nav-link <?php if ($title=='Vaccinés une fois') {echo 'active';} ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Vaccinés une fois</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php };?>
            <li class="nav-item menu<?php if ($title=='Statistiques COVID-19'||$title=='Statistiques Du Vaccin') {echo '-open';} ?>">
              <a href="#" class="nav-link <?php if ($title=='Statistiques COVID-19'||$title=='Statistiques Du Vaccin') {echo 'active';} ?>">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Statistiques
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?PHP ECHO BASE_URL(); ?>stat_covid" class="nav-link <?php if ($title=='Statistiques COVID-19') {echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>COVID-19</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?PHP ECHO BASE_URL(); ?>stat_vaccin" class="nav-link <?php if ($title=='Statistiques Du Vaccin') {echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Vaccin</p>
                  </a>
                </li>
              </ul>
            </li>
=======
            <?php if ($type=='admin') {
              echo
                '<li class="nav-item">
                  <a href="./gestion" class="nav-link' ;
                  if ($title=='gestion') echo 'active';
                  echo'">
                    <i class="nav-icon fas fa-notes-medical"></i>
                    <p>
                      Gestion
                    </p>
                  </a>
                </li>';
              } 
            ?>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link <?php if ($title=='Statistiques COVID-19') {echo 'active';} ?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Statistiques
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./stat_covid" class="nav-link <?php if ($title=='Statistiques COVID-19') {echo 'active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>COVID-19</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./vaccin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vaccin</p>
                </a>
              </li>
            </ul>
          </li>
>>>>>>> parent of d6a38a5 (gestion)
  </aside>

 
 