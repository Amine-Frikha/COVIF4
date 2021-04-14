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
          <div class="col-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Modification du compte</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo form_open('users/update') ?>
                <input type="hidden" class="form-control" name="id" placeholder="Entrer .." value="<?php echo $user['id']; ?>">
                  <div class="row">
                    <div class="col-md-6">  
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Entrer .." value="<?php echo $user['nom']; ?>">
                        <?php echo form_error('nom'); ?>
                      </div>
                      <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Entrer .." value="<?php echo $user['prenom']; ?>">
                        <?php echo form_error('prenom'); ?>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Entrer .." value="<?php echo $user['email']; ?>">
                        <?php echo form_error('email'); ?>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="Entrer .."> 
                        <?php echo form_error('password'); ?>
                      </div>
                      <div class="form-group">
                        <label>Nouveau Mot de passe</label>
                        <input type="password" class="form-control" name="new_password" placeholder="Entrer ..">
                        <?php echo form_error('new_password'); ?>
                      </div>
                      <div class="form-group">
                        <label>Confirmer le mot de passe</label>
                        <input type="password" class="form-control" name="password2" placeholder="Entrer ..">
                        <?php echo form_error('password2'); ?>
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
            </div>
          </div>
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