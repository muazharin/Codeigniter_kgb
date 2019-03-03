 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#"> Pengadilan Negeri</a>.</strong> Sulawesi Tenggara
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sparkline -->
<script src="<?= base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?= base_url();?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<!-- datepicker -->
<script src="<?= base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- DataTables -->
<script src="<?= base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- CK Editor -->
<script src="<?= base_url();?>assets/bower_components/ckeditor/ckeditor.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
  function myFunction() {
    var y = document.getElementById("password1");
    var z = document.getElementById("password2");
    if (y.type === "password" && z.type === "password" ) {
      y.type = "text";
      z.type = "text";
    } else {
      y.type = "password";
      z.type = "password";
    }
  }
</script>
<script src="<?= base_url();?>assets/dist/js/demo.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('<?= $sidebar; ?>').addClass("active");
  });

  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });

      //Date picker
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
</script>
<!-- <script>
  $(document).ready(function() {
    $('#mn2').addClass("active");
  });

  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script> -->

</body>
</html>

