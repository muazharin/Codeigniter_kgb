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
                    <label class="col-md-3 control-label">No Persetujuan</label>
                    <div class="col-md-9">
                      <input type="text" name="no" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Persetujuan</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tglpersetujuan" class="form-control pull-right" id="datepicker" >
                      </div>
                    </div>
                  </div>
                  <hr> 
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                      <input type="text" name="nama" value="<?= $duk['nama'];?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-9">
                      <input type="text" name="nip" value="<?= $duk['nip'];?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Tempat Lahir</label>
                    <div class="col-md-9">
                      <input type="text" name="tempat_lahir" value="<?= $pegawai['tempat_lahir'];?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Lahir</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_lahir" value="<?= $pegawai['tgl_lahir'];?>" class="form-control pull-right" id="datepicker1" >
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pendidikan</label>
                    <div class="col-md-9">
                      <input type="text" name="pendidikan" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pangkat</label>
                    <div class="col-md-9">
                      <select class="form-control" name="pangkat" required>
                      <?php foreach($pangkat as $p):?>
                          <?php if($p == $duk['pangkat'] ):?>
                            <option value="<?= $p;?>" selected><?= $p;?></option>
                          <?php else :?>
                            <option value="<?= $p;?>"><?= $p;?></option>
                          <?php endif;?>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Golongan</label>
                    <div class="col-md-9">
                      <select class="form-control" name="golongan" required>
                        <?php foreach($gol as $g):?>
                          <?php if($g == $duk['golongan'] ):?>
                            <option value="<?= $g;?>" selected><?= $g;?></option>
                          <?php else :?>
                            <option value="<?= $g;?>"><?= $g;?></option>
                          <?php endif;?>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan</label>
                    <div class="col-md-9">
                      <input type="text" name="jabatan" value="<?= $duk['jabatan'];?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Terhitung Mulai Tanggal</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tmt_pangkat" value="<?= $duk['tmt_pangkat'];?>" class="form-control pull-right" id="datepicker1" >
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Terhitung Mulai Tanggal Baru</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tmt_pangkat_baru" value="<?= date('Y-m-d', strtotime('+4 year', strtotime($duk['tmt_pangkat'])));?>"  class="form-control pull-right" id="datepicker2" >
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pangkat (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <select class="form-control" name="pangkatbaru" required>
                      <?php foreach($pangkat as $p):?>
                            <option value="<?= $p;?>"><?= $p;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Golongan (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <select class="form-control" name="golonganbaru" required>
                        <?php foreach($gol as $g):?>
                          <?php if($g == $duk['golongan'] ):?>
                            <option value="<?= $g;?>" selected><?= $g;?></option>
                          <?php else :?>
                            <option value="<?= $g;?>"><?= $g;?></option>
                          <?php endif;?>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <input type="text" name="jabatanbaru" value="" class="form-control" required>
                    </div>
                  </div> -->

                   <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Golongan (Tahun)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgt" value="<?= $duk['masa_kerja_golongan_tahun'];?>" class="form-control" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Golongan (Bulan)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgb" value="<?= $duk['masa_kerja_golongan_bulan'];?>" class="form-control" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Pokok</label>
                    <div class="col-md-9">
                      <input type="number" name="gaji" value="<?= $gaji['gaji_pokok'];?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Pokok (Terbilang)</label>
                    <div class="col-md-9">
                      <input type="text" name="gajiterbilang" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Tunjangan Jabatan (Yang Akan Didapatkan)</label>
                    <div class="col-md-9">
                      <input type="number" name="tunjangan" class="form-control" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-md-3 control-label">Tunjangan Jabatan (Terbilang)</label>
                    <div class="col-md-9">
                      <input type="text" name="tunjanganbaru" class="form-control" required>
                    </div>
                  </div>

                  <hr>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">DIREKTUR JENDERAL BADAN PERADILAN UMUM</label>
                    <div class="col-md-9">
                      <input type="text" name="direkturjendral" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">DIREKTUR PEMBINA TENAGA TEKNIS PERADILAN UMUM</label>
                    <div class="col-md-9">
                      <input type="text" name="direkturpembina" class="form-control" required>
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
