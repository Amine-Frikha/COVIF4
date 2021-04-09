<?php 
$jsonDataTunisia=file_get_contents("https://api.covid19api.com/live/country/Tunisia/status/confirmed");
$dataTunisia=json_decode($jsonDataTunisia,true);
$jsonDataTunisiaVacc=file_get_contents("https://raw.githubusercontent.com/owid/covid-19-data/master/public/data/latest/owid-covid-latest.json");
$dataTunisiaVacc=json_decode($jsonDataTunisiaVacc,true);
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
            <h1 class="m-0">Statistiques COVID-19</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Statistiques</li>
              <li class="breadcrumb-item active">COVID-19</li>
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
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-head-side-cough"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cas Confirmés (Globale)</span>
                <span class="info-box-number">
                  <?php
                  echo  number_format($dataWorld['TotalConfirmed']);
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
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-skull-crossbones"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cumul Des Décès</span>
                <span class="info-box-number">
                <?php
                  echo  number_format($dataWorld['TotalDeaths']);
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
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-virus-slash"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cas Récupérés</span>
                <span class="info-box-number">
                <?php
                  echo number_format($dataWorld['TotalRecovered']);
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
      </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Chiffres COVID-19 En Tunisie</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <?php
                    foreach($dataTunisiaVacc as $key => $val) {
                      ?>
                     <?php if ($key == 'TUN') { ?>
                  <tr>
                    <th>Date</th>
                    <th>Cas Confirmés (+ <?php echo $val['new_cases'] ?>)</th>
                    <th>Décès (+ <?php echo $val['new_deaths'] ?>)</th>
                    <th>Cas Récupérés</th>
                  </tr>
                  <?php } ?>
                  <?php } ?> 
                  </thead>
                  <tbody>
                     <?php
                    foreach($dataTunisia as $key => $val) {
                      ?>
                      <?php if ($key>'60') { ?>
                    <tr>
                      <td><?php echo substr_replace($val['Date'], '', 10, 10); ?></td>
                      <td><?php echo number_format($val['Confirmed']); ?></td>    
                      <td><?php echo number_format($val['Deaths']); ?></td> 
                      <td><?php echo number_format($val['Recovered']); ?></td>     
                    </tr> 
                    <?php } ?>
                    <?php } ?> 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Date</th>
                  <th>Cas Confirmés</th>
                  <th>Décès</th>
                  <th>Cas Récupérés</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div> 
      <div class="col-sm-4">
        <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Carte De La Tunisie
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 675px; width: 100%;"></div>
              </div>
        </div>
      </div>
    </div>
    </section>
    
