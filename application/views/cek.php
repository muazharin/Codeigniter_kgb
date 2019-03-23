<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
        <small>Kenaikan Pangkat Berkala</small>
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
              <h3 class="box-title"><i class="fa fa-credit-card"></i> Data Kenaikan Pangkat Pegawai</h3>
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
                  <input type="hidden" name="id" value="">
                 
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                      <input type="text" name="nama" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pangkat</label>
                    <div class="col-md-9">
                      <select class="form-control" name="pangkat" required>
                        
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Golongan</label>
                    <div class="col-md-9">
                      <select class="form-control" name="golongan" required>
                        
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan</label>
                    <div class="col-md-9">
                      <input type="text" name="jabatan" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pangkat (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Golongan (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Pokok</label>
                    <div class="col-md-9">
                      <input type="number" name="" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Pokok (Terbilang)</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Tunjangan Jabatan (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <input type="number" name="" value="" class="form-control" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label">Tunjangan Jabatan (Terbilang)</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                  </div>

                  <hr>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">DIREKTUR JENDERAL BADAN PERADILAN UMUM</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">DIREKTUR PEMBINA TENAGA TEKNIS PERADILAN UMUM</label>
                    <div class="col-md-9">
                      <input type="text" name="" value="" class="form-control" required>
                      <br>
                      <span style="color: #ff4a3f">*Harap untuk mengisi semua Field</span>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-12">
                      <!-- <a onclick="return confirm('Pastikan data sudah benar sebelum dicetak.\nKlik Ok jika data sudah benar')" class="btn btn-success" href="<?= base_url(); ?>laporan/print/<?= $duk['id_duk']?>" style="float: right;"> <i class="fa fa-print"></i> Cetak</a> -->
                      <button type="submit" class="btn btn-success" style="float: right; margin-right: 7px;"> <i class="fa fa-save"></i> Cetak</button>
                      <!-- <button type="submit" class="btn btn-primary" style="float: right; margin-right: 7px;"> <i class="fa fa-save"></i> Perbarui Data</button> -->
                    </div>
                  </div>               
                </form>
                </div>
                <div class="col-md-2">
                  <img src="/kgb/assets/dist/img/icon-pn.png" class="img-responsive">
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
