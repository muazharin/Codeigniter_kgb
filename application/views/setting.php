
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
        <div class="col-md-9">
          <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors();?>
            </div>
          <?php endif;?>
          <?php if($this->session->flashdata('pegawai')):?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Password <strong>berhasil</strong> <?= $this->session->flashdata('pegawai');?>
              </div>
          <?php endif;?>
          <?php if($this->session->flashdata('ketua')):?>
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data Ketua PN Kendari <strong>berhasil</strong> <?= $this->session->flashdata('ketua');?>
              </div>
          <?php endif;?>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#settings" data-toggle="tab">Pengaturan Login</a></li>
              <li><a href="#pejabat" data-toggle="tab">Pejabat / Petinggi</a></li>
            </ul>
            <div class="tab-content">
            
              <div class="active tab-pane" id="settings">
                 <form class="form-horizontal" method="post" action="">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Password Baru</label>
                    <div class="col-sm-8">
                      <input type="password" id="password1" class="form-control" name="pb" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Konfirmasi Password Baru</label>
                    <div class="col-sm-8">
                      <input type="password" id="password2" class="form-control" name="kpb" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"></label>
                    <div class="col-sm-8">
                      <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                    </div>
                  </div>
                  
                  <div class="form-group text-right">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-success" name="pass" value="Ganti Password">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="pejabat">
                <div class="row">
                <div class="col-md-6">
                 <form method="post" action="<?=base_url();?>pegawai/upKetua">

                  <div class="form-group">
                    <label>Ketua Pengadilan Negeri Kendari</label>
                    <input type="text" class="form-control" name="namaK" value="<?= $ketua['nama'];?>" required>
                  </div>

                  <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="nipK" value="<?= $ketua['nip'];?>" required>
                  </div>
                 
                  <div class="form-group">
                   
                    <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-save"></i> Simpan Perubahan </button>
                  </div>
                
                </form>
                </div>
                <div class="col-md-6 text-center">
                  <img src="<?= base_url();?>assets/dist/img/icon-pn.png" class="img-responsive img-thumbnail">
                </div>
                </div>
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </section>
    <!-- <section class="content" style="min-height: 600px;">
      
    </section> -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
