
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
        <small>Halaman Utama</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <!-- <li class="active">Dashboard</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 600px;">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$tot_pgw;?></h3>

              <p>Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="<?= base_url();?>pegawai" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
          <?php $i=0; $i1=0;?>
          <?php foreach($duk as $d):?>
          <?php 
            $tanggal = new DateTime($d['naik_pangkat_yad']);
            $tanggal1 = new DateTime($d['naik_gaji_yad']);
            $today = new DateTime('today');
            $y = $today->diff($tanggal)->y;
            $m = $today->diff($tanggal)->m;
            $y1 = $today->diff($tanggal1)->y;
            $m1 = $today->diff($tanggal1)->m;
          ?>
            <?php if($y==0&&$m==0):?>
              <?php $i++;?>
            <?php endif;?>
            <?php if($y1==0&&$m1==0):?>
              <?php $i1++;?>
            <?php endif;?>
          <?php endforeach;?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $i;?></h3>
              <p>Naik Pangkat Bulan Ini</p>
            </div>
            <div class="icon">
              <i class="fa fa-sitemap"></i>
            </div>
            <a href="" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $i1;?></h3>
              <p>Naik Gaji Bulan Ini</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-check-o"></i>
            </div>
            <a href="" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $tot_usr['COUNT(*)'];?></h3>
              <p>User Admin</p>
            </div>
            <div class="icon">
              <i class="fa fa-key"></i>
            </div>
            <a href="" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Pegawai <strong>12435435</strong> Atas Nama <strong>Artono Dwi R</strong> Mendapatkan Kenaikan Gaji dan Pangkat Bulan ini
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-sitemap"></i> Pegawai Yang Akan Naik Pangkat Bulan Ini</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow: auto;">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="10">#</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Pangkat/Golongan</th>
                  <th>TMT</th>
                  <th>KP Yad</th>
                  <th class="text-center" width="90">Menu</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach($duk as $d):?>
                  <?php 
                    $tanggal = new DateTime($d['naik_pangkat_yad']);
                    $today = new DateTime('today');
                    $y = $today->diff($tanggal)->y;
                    $m = $today->diff($tanggal)->m;
                  ?>
                    <?php if($y==0&&$m==0):?>
                      <tr>
                        <td><?= $i;?></td>
                        <td><?= $d['nip'];?></td>
                        <td><?= $d['nama'];?></td>
                        <td><?= $d['pangkat'];?> (<?= $d['golongan'];?>)</td>
                        <td><?= mediumdate_indo($d['tmt_pangkat']);?></td>
                        <td><?= mediumdate_indo($d['naik_pangkat_yad']);?></td>
                        <td style="text-align: center;">
                          <a href="<?= base_url();?>duk/data_duk/<?= $d['id_duk'];?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                          <button class="btn btn-warning"><i class="fa fa-file-pdf-o"></i></button>
                        </td>
                      </tr>
                    <?php $i++;?>
                    <?php endif;?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-calendar-check-o"></i> Pegawai Yang Akan Naik Gaji Bulan Ini</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow: auto;">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="10">#</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Pangkat/Golongan</th>
                  <th>TMT</th>
                  <th>KGB Yad</th>
                  <th class="text-center" width="90">Menu</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach($duk as $d):?>
                  <?php 
                    $tanggal = new DateTime($d['naik_gaji_yad']);
                    $today = new DateTime('today');
                    $y = $today->diff($tanggal)->y;
                    $m = $today->diff($tanggal)->m;
                  ?>
                  <?php if($y==0&&$m==0):?>
                  <tr>
                    <td><?= $i;?></td>
                    <td><?= $d['nip'];?></td>
                    <td><?= $d['nama'];?></td>
                    <td><?= $d['pangkat'];?> (<?= $d['golongan'];?>)</td>
                    <td><?= mediumdate_indo($d['tmt_pangkat']);?></td>
                    <td><?= mediumdate_indo($d['naik_gaji_yad']);?></td>
                    <td style="text-align: center;">
                      <a href="<?= base_url();?>duk/data_duk/<?= $d['id_duk'];?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                      <button class="btn btn-success"><i class="fa fa-print"></i></button>
                    </td>
                  </tr>
                  <?php $i++;?>
                  <?php endif;?>
                  <?php endforeach;?>
                </tbody>
              </table>
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