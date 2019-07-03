<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DASHBOARD
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <script type="text/javascript">
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
        });
      }, 2000);
    </script>
    
    <?php
        if ($msg != "") {
          echo $msg;
        }
        ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->