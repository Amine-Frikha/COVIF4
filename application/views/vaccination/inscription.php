<!DOCTYPE html>
<html>
  <head>
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  </head>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inscription</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Questionnaire</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo form_open('inscription/ajouter ') ?>
                  <div class="row">
                    <div class="col-md-6">
                      <!-- text input -->
                      <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">  
                      <div class="form-group">
                        <label>Numero de telephone:</label>
                        <input type="text" class="form-control" name="numero" placeholder="Entrer ..">
                        <?php echo form_error('numero'); ?>
                      </div>
                      <div class="form-group">
                        <label>Lieu de vaccination(Gouvernerat):</label>
                        <input type="text" class="form-control" name="gouvernerat" placeholder="Entrer ..">
                        <?php echo form_error('gouvernerat'); ?>
                      </div>	
                      <div class="form-group">
                        <label>Lieu de vaccination(Délégation):</label>
                        <input type="text" class="form-control" name="age" placeholder="Entrer ..">
                        <?php echo form_error('age'); ?>
                      </div>
                      <div class="form-group">  
                        <label>Genre:</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="genre1" name="genre" value="homme">
                          <label for="genre1">Homme</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="genre2" name="genre" value="femme">
                          <label for="genre2">Femme</label>
                        </div>
                        <?php echo form_error('genre'); ?>
                      </div>
                      <div class="form-group">
                        <label>Avez-vous été atteint de la COVID-19 ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="atteint1" name="atteint" value="1">
                          <label for="atteint1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="atteint2" name="atteint" value="0">
                          <label for="atteint2">Non</label>
                        </div>
                        <?php echo form_error('atteint'); ?>
                      </div>
                      <div class="form-group">
                        <label>Etes-vous atteint du diabète ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="diabete1" name="diabete" value="1">
                          <label for="diabete1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="diabete2" name="diabete" value="0">
                          <label for="diabete2">Non</label>
                        </div>
                        <?php echo form_error('diabete'); ?>
                      </div>
                      <div class="form-group">
                        <label>Avez-vous suivi des traitements anti-cancers ou immunosuppresseurs ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="immunosepresseur1" name="immunosepresseur" value="1">
                          <label for="immunosepresseur1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="immunosepresseur2" name="immunosepresseur" value="0">
                          <label for="immunosepresseur2">Non</label>
                        </div>
                        <?php echo form_error('immunosepresseur'); ?>
                      </div>   
                      <div class="form-group">
                        <label>Avez-vous été atteint d'une maladie respiratoire chronique ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="maladie_respir1" name="maladie_respir" value="1">
                          <label for="maladie_respir1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="maladie_respir2" name="maladie_respir" value="0">
                          <label for="maladie_respir2">Non</label>
                        </div>
                        <?php echo form_error('maladie_respir'); ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Enter votre CIN:</label>
                        <input type="text" class="form-control" name="CIN" placeholder="Entrer ..">
                        <?php echo form_error('CIN'); ?>
                      </div>   
                      <div class="form-group">
                        <label>Veiller préciser votre taille en cm :</label>
                        <input type="text" class="form-control" name="taille" placeholder="Entrer ..">
                        <?php echo form_error('taille'); ?>
                      </div>   
                      <div class="form-group">
                        <label>Veiller préciser votre poids (Kg)</label><br/>
                        <input type="text" class="form-control" name="poids" placeholder="Entrer ..">
                        <?php echo form_error('poids'); ?>
                      </div>
                      <div class="form-group">
                        <label>Etes vous atteint d'hypertension artérielle ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="hyper_art1" name="hyper_art" value="1">
                          <label for="hyper_art1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="hyper_art2" name="hyper_art" value="0">
                          <label for="hyper_art2">Non</label>
                        </div>
                        <?php echo form_error('hyper_art'); ?>
                      </div>
                      <div class="form-group">
                        <label>Etes-vous atteint d'une maladie rénale chronique ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="maladie_renale1" name="maladie_renale" value="1">
                          <label for="maladie_renale1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="maladie_renale2" name="maladie_renale" value="0">
                          <label for="maladie_renale2">Non</label>
                        </div>
                        <?php echo form_error('maladie_renale'); ?>
                      </div>
                      <div class="form-group">
                        <label>Etes-vous atteint de l'insuffisance cardiaque ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="insuff_cardiaque1" name="insuff_cardiaque" value="1">
                          <label for="insuff_cardiaque1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="insuff_cardiaque2" name="insuff_cardiaque" value="0">
                          <label for="insuff_cardiaque2">Non</label>
                        </div>
                        <?php echo form_error('insuff_cardiaque'); ?>
                      </div>
                      <div class="form-group">
                        <label>Avez-vous subi une greffe d'organe ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="igreffe_organe1" name="greffe_organe" value="1">
                          <label for="igreffe_organe1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="igreffe_organe2" name="greffe_organe" value="0">
                          <label for="igreffe_organe2">Non</label>
                        </div>
                        <?php echo form_error('greffe_organe'); ?>
                      </div>
                      <div class="form-group">
                        <label>Faites-vous partie du personnel de santé ?</label><br/>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="personnel_sante1" name="personnel_sante" value="1">
                          <label for="personnel_sante1">Oui</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="personnel_sante2" name="personnel_sante" value="0">
                          <label for="personnel_sante2">Non</label>
                        </div>
                        <?php echo form_error('personnel_sante'); ?>
                      </div>   
                    </div>
                 </div>
                  <div class="row">
                    <div class="col-4">
                     </div>
                    <div class="col-4">
                    <button type="submit" class="btn btn-block btn-warning btn-lg">Valider</button>
                    </div> 
                 </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
        <!-- /.row -->
      </div>
        </div>
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
