<?php
$jsonDataTunisiaVacc=file_get_contents("https://raw.githubusercontent.com/owid/covid-19-data/master/public/data/latest/owid-covid-latest.json");
$dataTunisiaVacc=json_decode($jsonDataTunisiaVacc,true);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Statistiques Des Vaccinations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Statistiques</li>
              <li class="breadcrumb-item active">Vaccin</li>
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
        <div class="row">
          <div class="col-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Population De La Tunisie</span>
                <span class="info-box-number">
                <?php
                    foreach($dataTunisiaVacc as $key => $val) {
                      if ($key == 'TUN') { 
                         echo number_format($val['population']);   
                         ?>

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-heartbeat"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Espérance de Vie</span>
                <span class="info-box-number">
                <?php
                  echo $val['life_expectancy']; 
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          
          <div class="col-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-syringe"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Vaccinations Totales Par 100 Personnes</span>
                <span class="info-box-number">
                <?php
                  echo $val['total_vaccinations_per_hundred']; 
                  ?>
             
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
        </br>
    <div class="row">
          <div class="col-4">
            <div class="info-box bg-gradient-warning">
              <span class="info-box-icon"><i class="fas fa-hand-holding-medical"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b>Personnes Entièrement Vaccinées</b></span>
                <span class="info-box-number"><?php echo number_format($val['people_fully_vaccinated']); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: <?php echo (($val['people_fully_vaccinated'])/($val['population']))*100 ; ?>%"></div>
                </div>
                <span class="progress-description">
                <?php echo round((($val['people_fully_vaccinated'])/($val['population']))*100,2) ; ?>% De La Population
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-4">
          <div class="info-box bg-gradient-warning">
              <span class="info-box-icon"><i class="fas fa-syringe"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b>Personnes Ayant Reçu Au Moins Une Dose</b></span>
                <span class="info-box-number"><?php echo number_format($val['people_vaccinated']); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: <?php echo (($val['people_vaccinated'])/($val['population']))*100 ; ?>%"></div>
                </div>
                <span class="progress-description">
                <?php echo round((($val['people_vaccinated'])/($val['population']))*100,2) ; ?>% De La Population
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          
          <div class="col-4">
          <div class="info-box bg-gradient-warning">
              <span class="info-box-icon"><i class="far fa-plus-square"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b>Nouvelles Vaccinations Par Jour</b></span>
                <span class="info-box-number"><?php echo number_format($val['new_vaccinations']); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 0%"></div>
                </div>
                <span class="progress-description">
                      </br>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
    </div>
    <?php } ?>
    <?php } ?> 
    </section>
