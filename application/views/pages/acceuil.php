 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bienvenue à COV<strong>IF4</strong></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
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
              <a href="<?php echo base_url(); ?>stat_covid" class="small-box-footer">
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
              <a href="<?php echo base_url(); ?>stat_vaccin" class="small-box-footer">
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
              <a href="<?php echo base_url(); ?>users/modifier_user" class="small-box-footer">
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
              <a href="<?php echo base_url(); ?>stat_covid" class="small-box-footer">
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
              <a href="<?php echo base_url(); ?>contact" class="small-box-footer">
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
              <a data-toggle="modal" data-target="#modal" class="small-box-footer">
              Accéder <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="modal fade" id="modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Attention!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>êtes-vous sûr de vouloir annuler votre inscription?&hellip;</p>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-danger" onclick="location.href='<?php echo site_url();?>inscription/annuler'">Annuler</button>
              </div>
            </div>
          </div>
        </div>
        <?php if ($exist){ ?>
          <?php if (!$done){ ?>
            <?php foreach($queue as $q) : if ($q['id']==$id){ ?>
              <div class="row">
                <div class="col-4">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-spinner"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text"><b>Rang estimé dans la file d'attente:</b></span>
                      <span class="info-box-number"><?php echo $q['rank'].' / '.$total; ?></span>

                      <div class="progress">
                        <div class="progress-bar" style="width: <?php echo (100-($q['rank']-1)/$total*100 ); ?>%"></div>
                      </div>
                      <span class="progress-description">
                      <?php echo round((100-($q['rank']-1)/$total*100 ),2) ; ?>% 
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="info-box bg-success">
                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text"><b>Prochain rendez-vous:</b></span>
                      <span class="info-box-number">
                        <?php 
                          if(!$q['validation_1']){
                            if ($q['date_1']!='0000-00-00') echo date("d/m/Y", strtotime($q['date_1'])); 
                            else echo "non spécifié";
                          }
                          else{
                            if ($q['date_2']!='0000-00-00') echo date("d/m/Y", strtotime($q['date_1'])); 
                            else echo "non spécifiée";
                          }
                        ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            <?php }; endforeach; ?>
          <?php } ?>
        <?php } ?>
      </div>
 
    </section>
    
