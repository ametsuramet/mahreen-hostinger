<!-- ./wrapper -->

<!-- add new calendar event modal -->


<script src="/public/bower_components/moment/min/moment.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/public/bower_components/AdminLTE/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="/public/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="/public/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="/public/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="/public/bower_components/AdminLTE/plugins/knob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="/public/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="/public/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/public/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="/public/bower_components/AdminLTE/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- jQuery 2.2.0 -->
<script src="/public/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick --> 
<script src="/public/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/public/bower_components/AdminLTE/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/public/bower_components/AdminLTE/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- DataTables -->
<script src="/public/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/public/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="/public/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // // Replace the <textarea id="editor1"> with a CKEditor
    // // instance, using default configuration.
    // CKEDITOR.replace('editor1');
    // //bootstrap WYSIHTML5 - text editor
    // $(".textarea").wysihtml5();
    $("#datatable1").DataTable();
    $('#datatable2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- AdminLTE App -->
<script src="/public/bower_components/AdminLTE/dist/js/app.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="/public/bower_components/AdminLTE/dist/js/pages/dashboard2.js" type="text/javascript"></script> --}}

<!-- AdminLTE for demo purposes -->
<script src="/public/bower_components/AdminLTE/dist/js/demo.js" type="text/javascript"></script>