<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestion</h1>
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
      <!-- user data -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-9">
            <div class="card">
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Données</h3>
                </div>
                </div>
                <?php foreach($inscription as $s) : ?>
              <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <b>CIN:</b><br/>
                        <b>Numero de telephone:</b><br/>
                        <b>Lieu de vaccination(Gouvernerat):</b><br/>
                        <b>Date de naissance:</b><br/>
                        <b>Genre:</b><br/>
                        <b>Taille en cm:</b><br/>
                        <b>Poids (Kg):</b><br/>
                    </div>
                    <div class="col-6">
                        <?php echo $s['CIN'] ?><br/>
                        <?php echo $s['numero'] ?><br/>
                        <?php echo $s['gouvernerat'] ?><br/>
                        <?php echo date("d-m-Y", strtotime($s['date_of_birth'])) ?><br/>
                        <?php echo $s['genre'] ?><br/>
                        <?php echo $s['taille'] ?><br/>
                        <?php echo $s['poids'] ?><br/>
                    </div>
                </div>
                <br/>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th style="text-align:center; vertical-align:middle;">atteint de la COVID-19</th>
                        <th style="text-align:center; vertical-align:middle;">diabète</th>
                        <th style="text-align:center; vertical-align:middle;">immunosuppresseurs</th>
                        <th style="text-align:center; vertical-align:middle;">maladie respiratoire</th>
                        <th style="text-align:center; vertical-align:middle;">hypertension artérielle</th>
                        <th style="text-align:center; vertical-align:middle;">maladie rénale</th>
                        <th style="text-align:center; vertical-align:middle;">insuffisance cardiaque</th>
                        <th style="text-align:center; vertical-align:middle;">greffe d'organe</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['atteint']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['diabete']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['hyper_art']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['maladie_renale']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['insuff_cardiaque']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['greffe_organe']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['maladie_respir']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['immunosepresseur']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- rendez vous -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-9">
            <div class="card">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Rendez-vous</h3>
              </div>
            </div>
              <div class="card-body">
                <?php echo form_open('gestion/rendez_vous') ?>
                <input type="hidden" class="form-control" name="id" value="<?php echo $s['id']; ?>">  
                <div class="row">
                  <div class="col-3">
                    <div class="form-group">
                      <label>Premiere date:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" class="form-control" name="date_1" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric"
                        value="<?php echo $s['date_1'];?>">
                      </div>
                      <?php echo form_error('date_1'); ?>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Validation:</label><br/>
                        <input type="checkbox" name="validation_1" value=1 data-bootstrap-switch data-off-color="danger" data-on-color="success" 
                        <?php if($s['validation_1']) echo 'checked';?>>
                      <?php echo form_error('validation_1'); ?>
                    </div>	
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Deuxieme date:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" class="form-control" name="date_2" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric"
                        value="<?php echo $s['date_2'];?>">
                      </div>
                      <?php echo form_error('date_2'); ?>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Validation:</label><br/>
                        <input type="checkbox" name="validation_2" value=1 data-bootstrap-switch data-off-color="danger" data-on-color="success" 
                        <?php if($s['validation_2']) echo 'checked';?>>
                      <?php echo form_error('validation_2'); ?>
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
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>