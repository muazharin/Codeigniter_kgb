<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Gaji Pegawai</small>
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
              <h3 class="box-title"><i class="fa fa-plus"></i> Form Tambah Data Gaji Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" method="post" action="">
                <div class="form-group">
                  <label class="col-md-2 control-label">Golongan</label>
                    <div class="col-md-8">
                      <select class="form-control" name="gol" required>
                        <?php foreach($gol as $a):?>
                            <option value="<?= $a;?>" ><?= $a;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Masa Kerja</label>
                    <div class="col-md-8">
                      <input type="number" name="masa_kerja" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Gaji Pokok</label>
                    <div class="col-md-8">
                      <input type="number" name="gaji_pokok" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <button type="submit" class="btn btn-success" style="float: right;"> <i class="fa fa-save"></i> Tambah Data</button>
                    </div>
                  </div>               
                </form>
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
