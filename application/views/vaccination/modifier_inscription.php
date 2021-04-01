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
                <h3 class="card-title">Modifier Une Societe</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo form_open('societes/valider') ?>
                  <div class="row">
                    <div class="col-md-6">
                      <!-- text input -->
                      <input type="hidden" class="form-control" name="id" placeholder="Entrer .." value="<?php echo $societe['id']; ?>"> 
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Entrer .." value="<?php echo $societe['nom']; ?>">
                        <?php echo form_error('nom'); ?>
                      </div>  
                      <div class="form-group">
                        <label>Directeur</label>
                        <input type="text" class="form-control" name="directeur" placeholder="Entrer .." value="<?php echo $societe['directeur']; ?>">
                        <?php echo form_error('directeur'); ?>
                      </div>
                      <div class="form-group">
                        <label>N° de registre de commerce</label>
                        <input type="text" class="form-control" name="N_reg" placeholder="Entrer .." value="<?php echo $societe['N_reg']; ?>">
                        <?php echo form_error('N_reg'); ?>
                      </div>
                      <div class="form-group">
                        <label>Identifiant fiscal</label>
                        <input type="text" class="form-control" name="Identifiant_fiscal" placeholder="Entrer .." value="<?php echo $societe['Identifiant_fiscal']; ?>"> 
                        <?php echo form_error('Identifiant_fiscal'); ?>
                      </div>
                      <div class="form-group">
                        <label>Activité</label>
                        <input type="text" class="form-control" name="Activité" placeholder="Entrer .." value="<?php echo $societe['Activité']; ?>">
                        <?php echo form_error('Activité'); ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Identifiant T. V. A.</label>
                        <input type="text" class="form-control" name="Identifiant_TVA" placeholder="Entrer .." value="<?php echo $societe['Identifiant_TVA']; ?>">
                        <?php echo form_error('Identifiant_TVA'); ?>
                      </div>
                      <div class="form-group">
                        <label>Nom et Prénom ou Raison sociale</label>
                        <input type="text" class="form-control" name="Nom_Prénom_Raison" placeholder="Entrer .." value="<?php echo $societe['Nom_Prénom_Raison']; ?>">
                        <?php echo form_error('Nom_Prénom_Raison'); ?>
                      </div>
                      <div class="form-group">
                        <label>Adresse ou siège social</label>
                        <input type="text" class="form-control" name="Adresse" placeholder="Entrer .." value="<?php echo $societe['Adresse']; ?>">
                        <?php echo form_error('Adresse'); ?>
                      </div>
                      <div class="form-group">
                        <label>Code postal</label>
                        <input type="text" class="form-control" name="Code_postal" placeholder="Entrer .." value="<?php echo $societe['Code_postal']; ?>">
                        <?php echo form_error('Code_postal'); ?>
                      </div>
                      <div class="form-group">
                        <label>Date de cessation d’activité</label>
                        <input type="text" class="form-control" name="Date_cess" placeholder="Entrer .." value="<?php echo $societe['Date_cess']; ?>">
                        <?php echo form_error('DDate_cess'); ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Type</label>
                        <select class="form-control">
                          <option> <?php echo $societe['type']; ?> </option>
                          <option><?php echo str_replace( $societe['type'], "","Personne physiquePersonne morale");?></option>
                        </select>
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

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
