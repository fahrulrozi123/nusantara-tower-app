<!-- jQuery 3 -->
<script src="{{ asset("template/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("template/bower_components/jquery-ui/jquery-ui.min.js") }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("template/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset("template/bower_components/raphael/raphael.min.js") }}"></script>
<script src="{{ asset("template/bower_components/morris.js/morris.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ asset("template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js") }}"></script>
<!-- jvectormap -->
<script src="{{ asset("template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset("template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset("template/bower_components/jquery-knob/dist/jquery.knob.min.js") }}"></script>
<!-- daterangepicker -->
<script src="{{ asset("template/bower_components/moment/min/moment.min.js") }}"></script>
<script src="{{ asset("template/bower_components/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
<!-- datepicker -->
<script src="{{ asset("template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js") }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset("template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>
<!-- Slimscroll -->
<script src="{{ asset("template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset("template/bower_components/fastclick/lib/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("template/dist/js/adminlte.min.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("template/dist/js/pages/dashboard.js") }}"></script>
<!-- AdminLTE for demo purposes --> 
<script src="{{ asset("template/dist/js/demo.js") }}"></script>

<script src="{{ asset("template/dist/js/pages/dashboard2.js") }}"></script>

<script src="{{ asset("template/bower_components/Chart.js/Chart.js") }}"></script>

<!-- DataTables -->
<script src="{{ asset("template/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script> 

{{-- validator --}}
<script src="{{ asset('js/js/validator') }}"></script>

<script src="{{ asset ("template/js/demo.js") }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@stack('page')

<script>
  $('.keluar').click(function(){
        swal("Success", "Anda berhasil log out", "success");
  });
</script>
<script>
  $('.tambah').click(function(){
      swal("Success", "Data berhasil ditambahkan", "success");
  });
</script>
<script>
  $('.edit').click(function(){
        swal("Success", "Data berhasil diedit", "success");
  });
</script>
<script>
  $('.deleteuser').click(function(){
  var user_id = $(this).attr('data-id');
  var user = $(this).attr('data-name');
        swal({
        title: "Apa kamu yakin?",
        text: "kamu akan menghapus user dengan nama "+user+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
              window.location = "/deleteuser/"+user_id+""
              swal("user "+user+" berhasil di hapus", {
              icon: "success",
              });
        } else {
              swal(
                    'Oooops!!!',
                    'user '+user+' gagal di hapus :)',
                    'error'
              )
        }
        });
              });
  </script>
<script>
  $('.deleteunit').click(function(){
  var unit_id = $(this).attr('data-id');
  var unit = $(this).attr('data-nama_unit');
        swal({
        title: "Apa kamu yakin?",
        text: "kamu akan menghapus unit dengan nama "+unit+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
              window.location = "/deleteunit/"+unit_id+""
              swal("unit "+unit+" berhasil di hapus", {
              icon: "success",
              });
        } else {
              swal(
                    'Oooops!!!',
                    'unit '+unit+' gagal di hapus :)',
                    'error'
              )
        }
        });
              });
  </script>
<script>
  $('.deletetenant').click(function(){
  var tenant_id = $(this).attr('data-id');
  var tenant = $(this).attr('data-company');
        swal({
        title: "Apa kamu yakin?",
        text: "kamu akan menghapus data tenant dengan nama "+tenant+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
              window.location = "/deletetenant/"+tenant_id+""
              swal("tenant "+tenant+" berhasil di hapus", {
              icon: "success",
              });
        } else {
              swal(
                    'Oooops!!!',
                    'tenant '+tenant+' gagal di hapus :)',
                    'error'
              )
        }
        });
              });
  </script>