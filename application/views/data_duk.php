
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data DUK
        <small>Pegawai</small>
      </h1>
      <ol class="breadcrumb">
      <a href="<?= base_url();?>export_duk" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export</a>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 10px;">
    <div class="row mt-3">
        <div class="col-xs-12">
            <?php if($this->session->flashdata('duk')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Data duk pegawai <strong>berhasil</strong> <?= $this->session->flashdata('duk');?>
                </div>
            <?php endif;?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-credit-card"></i> Data DUK Pegawai PN-Kendari</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow: auto;">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="10">#</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Pangkat</th>
                  <th>Golongan</th>
                  <th>Jabatan</th>
                  <th>KP Yad</th>
                  <th>KGB Yad</th>
                  <th class="text-center" width="auto">Menu</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($duk as $d):?>
                  <tr>
                    <td><?= $i;?></td>
                    <td><?= $d['nip'];?></td>
                    <td><?= $d['nama'];?></td>
                    <td><?= $d['pangkat'];?></td>
                    <td><?= $d['golongan'];?></td>
                    <td><?= $d['jabatan'];?></td>
                    <td><?= $d['naik_pangkat_yad'];?></td>
                    <td><?= $d['naik_gaji_yad'];?></td>
                    <td>
                       <a href="<?= base_url(); ?>data_duk/<?= $d['id_duk']?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  <?php $i++;?>
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


  