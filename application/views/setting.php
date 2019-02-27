
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengaturan Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pengaturan Admin</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-7">
<?php if ($this->session->flashdata('sukses')) { ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-check"></i> Sukses</h5>
            <?= $this->session->flashdata('sukses'); ?>
          </div>
<?php } ?>
<?php if ($this->session->flashdata('gagal')) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-ban"></i> Gagal</h5>
            <?= $this->session->flashdata('gagal'); ?>
          </div>
<?php } ?>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#settings" data-toggle="tab">Pengaturan Login</a></li>
            </ul>
            <div class="tab-content">
            
              <div class="active tab-pane" id="settings">
                 <form class="form-horizontal" method="POST" action="<?= base_url() ?>admin/gantiPass">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Password Lama</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="pl" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Password Baru</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="pb" required>
                    </div>
                  </div>
                  
                  <div class="form-group text-right">
                    <div class="col-sm-offset-2 col-sm-9">
                      <input type="submit" class="btn btn-success" name="pass" value="Ganti Password">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
