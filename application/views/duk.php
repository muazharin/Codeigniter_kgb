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
                  <input type="hidden" name="id" value="<?= $duk['id_duk'];?>">
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIP</label>
                    <div class="col-md-9">
                      <input type="text" name="nip" value="<?= $duk['nip'];?>" readonly class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama</label>
                    <div class="col-md-9">
                      <input type="text" name="nama" value="<?= $duk['nama'];?>" readonly class="form-control" required>
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
                    <label class="col-md-3 control-label">TMT (Pangkat/Golongan)</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?= $duk['tmt_pangkat'];?>" name="tmt_pangkat" class="form-control pull-right" id="datepicker" required="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Jabatan</label>
                    <div class="col-md-9">
                      <input type="text" name="jabatan" value="<?= $duk['jabatan'];?>" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="form-group">  
                    <label class="col-md-3 control-label">TMT (Jabatan)</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?= $duk['tmt_jabatan'];?>" name="tmt_jabatan" class="form-control pull-right" id="datepicker1" required="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Golongan (Tahun)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgt" class="form-control" value="<?= $duk['masa_kerja_golongan_tahun']?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Golongan (Bulan)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkgb" class="form-control" value="<?= $duk['masa_kerja_golongan_bulan']?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Seluruhnya (Tahun)</label>
                    <div class="col-md-9">
                      <input type="number" name="mkst" class="form-control" value="<?= $duk['masa_kerja_seluruh_tahun']?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Masa Kerja Seluruhnya (Bulan)</label>
                    <div class="col-md-9">
                      <input type="number" name="mksb" class="form-control" value="<?= $duk['masa_kerja_seluruh_bulan']?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Naik Pangkat (YAD)</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?= $duk['naik_pangkat_yad'];?>" name="naik_pangkat" class="form-control pull-right" id="datepicker2" required="">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Naik Gaji (YAD)</label>
                    <div class="col-md-9">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" value="<?= $duk['naik_gaji_yad'];?>" name="naik_gaji" class="form-control pull-right" id="datepicker3" required="">
                      </div>
                    </div>
                  </div>

                  <?php
                        // tanggal lahir
                        $tanggal = new DateTime($pegawai['tgl_lahir']);
                        // tanggal hari ini
                        $today = new DateTime('today');
                        // tahun
                        $y = $today->diff($tanggal)->y;
                      ?>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Usia</label>
                    <div class="col-md-9">
                      <input type="text" name="usia" value="<?= $y;?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Pendidikan</label>
                    <div class="col-md-9">
                      <input type="text" name="pendidikan" value="<?= $duk['pendidikan'];?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Keterangan</label>
                    <div class="col-md-9">
                      <input type="text" name="ket" value="<?= $duk['keterangan'];?>" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary" style="float: right;"> <i class="fa fa-save"></i> Perbarui Data</button>
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
