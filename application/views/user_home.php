
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
        <small>Halaman Utama</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Beranda</a></li>
        <!-- <li class="active">Dashboard</li> -->
      </ol>
    </section>
    <?php
      $jk1='';
      if($pegawai['jenis_kelamin']=='Laki-laki'){
        $jk1='pria';
      }else{
        $jk1='wanita';
      }
    ?>
    <!-- Main content -->
    <section class="content" style="min-height: 600px;">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <center><h3 class="widget-user-username" style="margin-top: -15px;"><?= $client['nama'];?></h3></center>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?= base_url() ?>assets/dist/img/<?= $jk1?>.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <span class="description-header">Pangkat</span>
                    <h5 class="description-text"><?= $client['pangkat'];?></h5>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <span class="description-header">Golongan</span>
                    <h5 class="description-text"><?= $client['golongan'];?></h5>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Gaji</h5>
                    <span class="description-text">Rp. <?= nominal($gaji['gaji_pokok']);?>,00</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->

        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-sitemap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kenaikan Pangkat Berikutnya</span>
              <span class="info-box-number"> <i class="fa fa-calendar"></i> <?= date_indo($client['naik_pangkat_yad']);?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-calendar-check-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kenaikan Gaji Berikutnya</span>
              <span class="info-box-number"> <i class="fa fa-calendar"></i> <?= date_indo($client['naik_gaji_yad']);?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </div>
        
        

        
        
      </div>
      <!-- /.row -->
     
    </section>
    <!-- /.content -->
</div>