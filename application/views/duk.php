<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DUK
        <small>Pegawai</small>
      </h1>
      <ol class="breadcrumb">
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 10px;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-credit-card"></i> Data DUK Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if(validation_errors()):?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
              </div>
            <?php endif;?>
            <div class="row">
              <div class="col-md-10">
              <form class="form-horizontal" method="post" action="">
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-9">
                      <input type="text" name="nip" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                      <input type="text" name="nama" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pangkat</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Golongan</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">TMT (Pangkat/Golongan)</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">TMT (Jabatan)</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja (Golongan)</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" value="9 Tahun 10 Bulan" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja (Seluruhnya)</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" value="11 Tahun 4 Bulan" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Naik Pangkat (YAD)</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Naik Gaji (YAD)</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Usia</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pendidikan</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Keterangan</label>
                    <div class="col-md-9">
                      <input type="text" name="" class="form-control" required>
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                     
                    </div>
                  </div>               
                </form>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-warning btn-block"><i class="fa fa-file-pdf-o"></i> PDF</button>
                </div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
