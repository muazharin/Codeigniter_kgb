
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small>Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <button class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export</button>
        <a href="pegawai/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 10px;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-user"></i> Data Pegawai PN-Kendari Tahun <?= date("Y"); ?></h3>
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
                  <th>Jabatan</th>
                  <th>TMT</th>
                  <th class="text-center" width="90">Menu</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>1</td>
                    <td>NIP. 19751206 200112 1 001</td>
                    <td>Cassandra</td>
                    <td>Pembina Utama Muda (IV/c)</td>
                    <td>01-04-2017</td>
                    <td>Wakil Ketua</td>
                    <td>28-09-2018</td>
                    <td style="text-align: center;">
                      <a href="profil" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                      <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>NIP. 19610923 198303 1 005</td>
                    <td>HEBBIN SILALAHI, S.H. M.H</td>
                    <td>Pembina Utama Muda (IV/c)</td>
                    <td>01-04-2016</td>
                    <td>Wakil Ketua</td>
                    <td>20-12-2017</td>
                    <td style="text-align: center;">
                      <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>

                   <tr>
                    <td>3</td>
                    <td>NIP. 19650807 200003 1 003</td>
                    <td>ANDI ASMURUF, SH. MH</td>
                    <td>Pembina (IV/a)</td>
                    <td>01-10-2015</td>
                    <td>Hakim Madya Pratama</td>
                    <td>05-01-2016</td>
                    <td style="text-align: center;">
                      <a href="profil.php" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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


  