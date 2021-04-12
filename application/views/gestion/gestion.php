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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th rowspan="2" style="text-align:center; vertical-align:middle;">Priorité éstimé</th>
                      <th rowspan="2" style="text-align:center; vertical-align:middle;">CIN</th>
                      <th rowspan="2" style="text-align:center; vertical-align:middle;">Prenom</th>
                      <th rowspan="2" style="text-align:center; vertical-align:middle;">Nom</th>
                      <th colspan="2" style="text-align:center; vertical-align:middle;">Date de la 1ere vaccination</th>
                      <th colspan="2" style="text-align:center; vertical-align:middle;">Date de la 2eme vaccination</th>
                      <th rowspan="2"></th>
                    </tr>
                    <tr>
                      <th style="text-align:center; vertical-align:middle;">Date</th>
                      <th style="text-align:center; vertical-align:middle;">Etat</th>
                      <th style="text-align:center; vertical-align:middle;">Date</th>
                      <th style="text-align:center; vertical-align:middle;">Etat</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($inscription as $s) : ?>
                  <tr>
                    <td style="text-align:center; vertical-align:middle;"><?php echo $s['rank']; ?></td>
                    <td style="text-align:center; vertical-align:middle;"><?php echo $s['CIN']; ?></td>
                    <td style="text-align:center; vertical-align:middle;"><?php echo $s['prenom']; ?></td>
                    <td style="text-align:center; vertical-align:middle;"><?php echo $s['nom']; ?></td>
                    <td style="text-align:center; vertical-align:middle;"><?php 
                      if ($s['date_1']!='0000-00-00')
                        echo date("d-m-Y", strtotime($s['date_1']));
                        else echo 'non spécifiée';
                      ?>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['validation_1']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td style="text-align:center; vertical-align:middle;"><?php 
                      if ($s['date_2']!='0000-00-00')
                        echo date("d-m-Y", strtotime($s['date_2']));
                        else echo 'non spécifiée';
                      ?>
                    </td>
                    <td style="text-align:center; vertical-align:middle;">
                      <div class="checkbox icheck-turquoise">
                        <input type="checkbox" id="turquoise" disabled <?php if($s['validation_2']) echo 'checked'; ?>>
                        <label for="turquoise"> </label>
                      </div>
                    </td>
                    <td>
                      <center>
                        <a class="btn btn-info" href="<?PHP ECHO BASE_URL().'gestion/modifier/'.$s['id']; ?>">
                          <i class="fas fa-edit"></i>
                        </a>
                      </center>
                    </td>
                  </div>  
                  </tr>
                  <?php endforeach; ?>
                  </tfoot>
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
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>