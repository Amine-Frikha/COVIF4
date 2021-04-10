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
              <div class="card-header">
                <h3 class="card-title">
                  <button onclick="document.location='<?php echo base_url(); ?>ajouter_societe'" type="button" class="btn btn-block btn-primary btn-lg">
                    Ajouter Une societe
                  </button>
                </h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>CIN</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Priorité éstimé</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($inscription as $s) : ?>
                  <tr>
                    <td><?php echo $s['CIN']; ?></td>
                    <td><?php echo $s['prenom']; ?></td>
                    <td><?php echo $s['nom']; ?></td>
                    <td><?php echo $s['rank']; ?></td>
                    <td>
                      <center>
                        <button type="button" class="ion-android-delete" title="supprimer" data-toggle="modal" data-target="#modal<?php echo $s['id'];?>"> </button>
                      </center>
                    </td>
                    <div class="modal fade" id="modal<?php echo $s['id'];?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Attention!<?php echo $s['id'];?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>êtes-vous sûr de vouloir supprimer?&hellip;</p><?php echo $s['id'];?>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                          <button type="button" class="btn btn-danger" onclick="location.href='<?php echo site_url();?>societes/delete/<?php echo $s['id'];?>'">Supprimer</button>
                        </div>
                      </div>
                    </div>
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