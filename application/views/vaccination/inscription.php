<!DOCTYPE html>
<html>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Societes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Acceuil</a></li>
              <li class="breadcrumb-item active">societes</li>
            </ol>
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
                <h3 class="card-title">Ajouter Une Societe</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo form_open('inscription/ajouter') ?>
                  <div class="row">
                    <div class="col-md-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Numero de telephone:</label>
                        <input type="text" class="form-control" name="numero" placeholder="Entrer ..">
                        <?php echo form_error('numero'); ?>
                      </div>
                      <div class="form-group">
                        <label>Genre:</label>
                        <input type="radio" id="radioPrimary2" name="genre" value="homme"><label for="radioPrimary2">Homme</label>
                        <input type="radio" id="radioPrimary2" name="genre" value="femme"><label for="radioPrimary2">Femme</label>
                        <?php echo form_error('genre'); ?>
                      </div><div class="form-group">
                        <label>Lieu de vaccination(Gouvernerat):</label>
                        <input type="text" class="form-control" name="gouvernerat" placeholder="Entrer ..">
                        <?php echo form_error('gouvernerat'); ?>
                      </div>	
                      <div class="form-group">
                        <label>Lieu de vaccination(Délégation):</label>
                        <input type="text" class="form-control" name="delegation" placeholder="Entrer ..">
                        <?php echo form_error('delegation'); ?>
                      </div>
                      <div class="form-group">
                        <label>Avez-vous été atteint de la COVID-19 ?</label>
                        <input type="text" class="form-control" name="atteint" placeholder="Entrer ..">
                        <?php echo form_error('atteint'); ?>
                      </div>
                      <div class="form-group">
                        <label>Etes-vous atteint du diabète ?</label>
                        <input type="text" class="form-control" name="diabete" placeholder="Entrer ..">
                        <?php echo form_error('diabete'); ?>
                      </div>
                      <div class="form-group">
                        <label>Avez-vous suivi des traitements anti-cancers ou immunosuppresseurs ?</label>
                        <input type="text" class="form-control" name="immunosepresseur" placeholder="Entrer ..">
                        <?php echo form_error('immunosepresseur'); ?>
                      </div>   
                      <div class="form-group">
                        <label>Veiller préciser votre poids (Kg)</label>
                        <input type="text" class="form-control" name="poids" placeholder="Entrer ..">
                        <?php echo form_error('poids'); ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Etes vous atteint d'hypertension artérielle ?</label>
                        <input type="text" class="form-control" name="hyper_art" placeholder="Entrer ..">
                        <?php echo form_error('hyper_art'); ?>
                      </div>
                      <div class="form-group">
                        <label>Etes-vous atteint d'une maladie rénale chronique ?</label>
                        <input type="text" class="form-control" name="maladie_renale" placeholder="Entrer ..">
                        <?php echo form_error('maladie_renale'); ?>
                      </div>
                      <div class="form-group">
                        <label>Etes-vous atteint de l'insuffisance cardiaque ?</label>
                        <input type="text" class="form-control" name="insuff_cardiaque" placeholder="Entrer ..">
                        <?php echo form_error('insuff_cardiaque'); ?>
                      </div>
                      <div class="form-group">
                        <label>Avez-vous subi une greffe d'organe ?</label>
                        <input type="text" class="form-control" name="greffe_organe" placeholder="Entrer ..">
                        <?php echo form_error('greffe_organe'); ?>
                      </div>
                      <div class="form-group">
                        <label>Avez-vous été atteint d'une maladie respiratoire chronique ?</label>
                        <input type="text" class="form-control" name="maladie_respir" placeholder="Entrer ..">
                        <?php echo form_error('maladie_respir'); ?>
                      </div>   
                      <div class="form-group">
                        <label>Veiller préciser votre poids (Kg) :</label>
                        <input type="text" class="form-control" name="poids" placeholder="Entrer ..">
                        <?php echo form_error('poids'); ?>
                      </div>   
                      <div class="form-group">
                        <label>Veiller préciser votre taille en cm :</label>
                        <input type="text" class="form-control" name="taille" placeholder="Entrer ..">
                        <?php echo form_error('taille'); ?>
                      </div>   
                      <div class="form-group">
                        <label>Faites-vous partie du personnel de santé ?</label>
                        <input type="text" class="form-control" name="personnel_sante" placeholder="Entrer ..">
                        <?php echo form_error('personnel_sante'); ?>
                      </div>   
                    </div>
                    <div class="form-group">
                      <label>Type</label>
                      <select class="form-control" name="type">
                        <option>Personne physique</option>
                        <option>Personne morale</option>
                      </select>
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
