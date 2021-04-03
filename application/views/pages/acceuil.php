<?php 
$jsonDataTunisia=file_get_contents("https://api.covid19api.com/live/country/Tunisia/status/confirmed");
$dataTunisia=json_decode($jsonDataTunisia,true);
$jsonDataWorld=file_get_contents("https://api.covid19api.com/world/total");
$dataWorld=json_decode($jsonDataWorld,true);
?> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bienvenue à COVIF4</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Acceuil</li>
              <li class="breadcrumb-item active">Acceuil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Vous êtes abonné avec succès!</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        Vous recevrez une notification dès que ce sera à 
        votre tour d'être vacciné.
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        Vous êtes libre de consulter les fonctionnalités de notre application ci-dessous.
        </div>
        <!-- /.card-footer-->
      </div>
        <div class="row">
          <div class="col-4">
          <div class="small-box bg-info">
              <div class="inner">
                <h4>Statistiques COVID-19</h4>

                <p></br></p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-bar"></i>
              </div>
              <a href="./stat_covid" class="small-box-footer">
              Accéder <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-4">
          <div class="small-box bg-success">
              <div class="inner">
              <h4>Statistiques Du Vaccin</h4>

                <p></br></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="./vaccin" class="small-box-footer">
              Accéder <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          
          <div class="col-4">
          <div class="small-box bg-warning">
              <div class="inner">
                <h4>Modifier vos données</h4>

                <p></br></p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
              Accéder <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-4">
          <div class="small-box bg-info">
              <div class="inner">
                <h4>Questions fréquemment posées</h4>

                <p></br></p>
              </div>
              <div class="icon">
              <i class="fas fa-question"></i>
              </div>
              <a href="./stat_covid" class="small-box-footer">
              Accéder <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-4">
          <div class="small-box bg-success">
              <div class="inner">
              <h4>Besoin d'aide ?</h4>

                <p></br></p>
              </div>
              <div class="icon">
              <i class="fas fa-hands-helping"></i>
              </div>
              <a href="./contact" class="small-box-footer">
              Contactez-nous <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          
          <div class="col-4">
          <div class="small-box bg-danger">
              <div class="inner">
                <h4>Annuler Votre Inscription</h4>

                <p></br></p>
              </div>
              <div class="icon">
              <i class="far fa-window-close"></i>
              </div>
              <a href="#" class="small-box-footer">
              Accéder <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
      </div>
 
    </section>
    
