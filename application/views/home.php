
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
          <?php 
            $i=0; 
            $i1=0;
            $thn = date('Y');
            $bln = date('m');
          ?>
          <?php foreach($duk as $d):?>
          <?php 
            $tanggal1 = explode('-', $d['naik_pangkat_yad']);
            $tanggal2 = explode('-', $d['naik_gaji_yad']);
            $y = $thn - $tanggal1[0];
            $m = $bln - $tanggal1[1];
            $y1 = $thn - $tanggal2[0];
            $m1 = $bln - $tanggal2[1];
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
      <?php foreach ($duk as $d):?>
        <?php
          $tanggal1 = explode('-', $d['naik_pangkat_yad']);
          $tanggal2 = explode('-', $d['naik_gaji_yad']);
          $y = $thn - $tanggal1[0];
          $m = $bln - $tanggal1[1];
          $y1 = $thn - $tanggal2[0];
          $m1 = $bln - $tanggal2[1];
        ?>
        <?php if($y==0 && $m==0 && $y1==0 && $m1==0):?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php foreach($duk as $d):?>
              <?php 
                $tanggal2 = explode('-', $d['naik_pangkat_yad']);
                $tanggal3 = explode('-', $d['naik_gaji_yad']);
                $y2 = $thn - $tanggal2[0];
                $m2 = $bln - $tanggal2[1];
                $y3 = $thn - $tanggal3[0];
                $m3 = $bln - $tanggal3[1];

              ?>
                <?php if($y2==0 && $m2==0 && $y3==0 && $m3==0):?>
                  Pegawai <strong><?= $d['nip'];?></strong> Atas Nama <strong><?= $d['nama'];?></strong> Mendapatkan Kenaikan Gaji dan Pangkat Bulan ini<br>
                <?php endif;?>
              <?php endforeach;?>
          </div>
        <?php endif;?>
      <?php endforeach;?>
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
                    $tanggal4 = explode('-', $d['naik_pangkat_yad']);
                    $y4 = $thn-$tanggal4[0];
                    $m4 = $bln-$tanggal4[1];
                  ?>
                    <?php if($y4==0&&$m4==0):?>
                      <tr>
                        <td><?= $i;?></td>
                        <td><?= $d['nip'];?></td>
                        <td><?= $d['nama'];?></td>
                        <td><?= $d['pangkat'];?> (<?= $d['golongan'];?>)</td>
                        <td><?= mediumdate_indo($d['tmt_pangkat']);?></td>
                        <td><?= mediumdate_indo($d['naik_pangkat_yad']);?></td>
                        <td style="text-align: center;">
                          <a href="<?= base_url();?>data_duk/<?= $d['id_duk'];?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                          <a href="<?= base_url(); ?>laporan/cek/<?= $d['id_duk']?>/<?= $d['nip']?>" class="btn btn-success"><i class="fa fa-print"></i></a>
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
                    // $tanggal5 = new DateTime($d['naik_gaji_yad']);
                    // $today4 = new DateTime('today');
                    // $y5 = $today4->diff($tanggal5)->y;
                    // $m5 = $today4->diff($tanggal5)->m;
                    $tanggal5 = explode('-', $d['naik_gaji_yad']);
                    $y5 = $thn-$tanggal5[0];
                    $m5 = $bln-$tanggal5[1];

                  ?>
                  <?php if($y5==0&&$m5==0):?>
                  <tr>
                    <td><?= $i;?></td>
                    <td><?= $d['nip'];?></td>
                    <td><?= $d['nama'];?></td>
                    <td><?= $d['pangkat'];?> (<?= $d['golongan'];?>)</td>
                    <td><?= mediumdate_indo($d['tmt_pangkat']);?></td>
                    <td><?= mediumdate_indo($d['naik_gaji_yad']);?></td>
                    <td style="text-align: center;">
                      <a href="<?= base_url();?>duk/data_duk/<?= $d['id_duk'];?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                      <a href="<?= base_url(); ?>laporan/check/<?= $d['id_duk']?>/<?= $d['nip']?>" class="btn btn-success"><i class="fa fa-print"></i></a>
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