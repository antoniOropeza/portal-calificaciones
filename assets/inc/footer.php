<footer class="main-footer">
<img src="assets/img/logo.png" width="240" height="240" alt="ooad" class="welcome-image">
      
    <strong>Copyright &copy;<?=date('Y')?> <a href="https://sicaviqa.imss.gob.mx/">SICAVI</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
    </div>
  </footer>

<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>

<!-- DataTables  & Plugins -->

<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
<script>
  $(document).ready(function () {
    $('.nav-link').click(function () {
      $('#loader').show();
    });
  });
</script>