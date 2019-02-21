<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small>Referensi Gaji</small>
      </h1>
      <ol class="breadcrumb">
        <button class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export</button>
        <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 10px;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Referensi Gaji Pegawai PN-Kendari Tahun <?= date("Y"); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow: auto;">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Golongan</th>
                  <th>Masa Kerja</th>
                  <th>Gaji Pokok</th>
                  <th class="text-center" width="90">Menu</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1A00</td>
                    <td>Masa Kerja 00</td>
                    <td>Rp. 1.486.500</td>
                    <td style="text-align: center;">
                      <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
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
  <!-- /.content-wrapper -->