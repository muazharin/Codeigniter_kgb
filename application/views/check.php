<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
        <small>Kenaikan Gaji Berkala</small>
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
              <h3 class="box-title"><i class="fa fa-credit-card"></i> Data KGB Pegawai</h3>
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
                  <input type="hidden" name="id" value="<?= $duk['id_duk'];?>">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Terhitung Mulai Tanggal</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <?php $date = date('Y-m-d');?>
                        <input type="text" value="<?=$date;?>" name="tgl1" class="form-control pull-right" id="datepicker3" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nomor SK</label>
                    <div class="col-md-9">
                      <input type="text" name="no1" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-9">
                      <input type="text" name="nip" readonly value="<?= $duk['nip'];?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                      <input type="text" name="nama" value="<?= $duk['nama'];?>" class="form-control" required>
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
                    <label class="col-md-3 control-label">Unit Organisasi</label>
                    <div class="col-md-9">
                      <input type="text" name="unit" value="Pengadilan Negeri Kendari" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Oleh Pejabat</label>
                    <div class="col-md-9">
                      <input type="text" name="pejabat" value="KETUA PENGADILAN NEGERI KENDARI" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Terhitung Mulai Tanggal</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?= date('Y-m-d', strtotime('-2 year', strtotime($duk['naik_gaji_yad'])));?>" name="tmt_gaji1" class="form-control pull-right" id="datepicker" required="">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nomor SK Sebelumnya</label>
                    <div class="col-md-9">
                      <input type="text" value="<?= $nosk['no_sk_kgb'];?>" name="no2" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Pokok</label>
                    <div class="col-md-9">
                      <input type="number" value="<?= $gaji['gaji_pokok'];?>" name="gaji_pokok" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Golongan (Tahun)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgt1" class="form-control" value="<?= $duk['masa_kerja_golongan_tahun']?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Golongan (Bulan)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgb1" class="form-control" value="<?= $duk['masa_kerja_golongan_bulan']?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                  </div>
                  <div class="form-group">
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Gaji Pokok Baru</label>
                    <div class="col-md-9">
                      <input type="number" value="<?= $gaji_baru['gaji_pokok'];?>" name="gaji_pokok2" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Berdasarkan Masa Kerja (Tahun)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgt2" class="form-control" value="<?= ($duk['masa_kerja_golongan_tahun'])+2;?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Berdasarkan Masa Kerja (Bulan)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgb2" class="form-control" value="<?= $duk['masa_kerja_golongan_bulan']?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Dalam Golongan Ruang</label>
                    <div class="col-md-9">
                      <select class="form-control" name="golongan2" required>
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
                    <label class="col-md-3 control-label">Terhitung Mulai Tanggal</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?= $duk['naik_gaji_yad'];?>" name="tmt_gaji2" class="form-control pull-right" id="datepicker1" required="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">KGB Yang Akan Datang</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?= date('Y-m-d', strtotime('+2 year', strtotime($duk['naik_gaji_yad'])));?>" name="tmt_gaji3" class="form-control pull-right" id="datepicker2" required="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  </div>
                  <div class="form-group">
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Yang Bertandatangan</label>
                    <div class="col-md-9">
                      <input type="text" value="KETUA PENGADILAN NEGERI KENDARI" name="ttd1" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                      <input type="text" value="<?= $ketua['nama'];?>" name="ttd2" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-9">
                      <input type="text" value="<?= $nipketua['nip'];?>" name="ttd3" class="form-control" required>
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
