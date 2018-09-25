<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
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

        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $guru['jumlah']; ?></h3>

              <p>Guru</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $siswa['jumlah'] ?></h3>

              <p>Siswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $mapel['jumlah'] ?></h3>

              <p>Mata Pelajaran</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $kelas['jumlah'] ?></h3>

              <p>Kelas</p>
            </div>
            <div class="icon">
              <i class="fa fa-university"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">About</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row clearfix">
                <div class="col-md-4" style="margin-top: 30px;margin-bottom: 30px">
                  <div style="display: flex;align-items: center;justify-content: center;height: 100%;flex-direction: column;">
                    <img src="<?php echo base_url(). '/assets/logo.png' ?>" style="max-width: 100%; width: 180px;height: auto;">
                  </div>
                  
                </div>
                <div class="col-md-8" style="margin-top: 30px;margin-bottom: 30px;display: flex;
  justify-content: center;
  flex-direction: column;">  
                  <table>
                    <tr>
                      <td><h4>Nama Sekolah&nbsp;&nbsp;</h4></td>
                      <td><h4>&nbsp;:</h4></td>
                      <td><h4>&nbsp;<?php echo $sekolah['nama_sekolah'] ?></h4></td>
                    </tr>
                    <tr>
                      <td><h4>Alamat Sekolah&nbsp;&nbsp;</h4></td>
                      <td><h4>&nbsp;:</h4></td>
                      <td><h4>&nbsp;<?php echo $sekolah['alamat_sekolah'] ?></h4></td>
                    </tr><tr>
                      <td><h4>Semester&nbsp;&nbsp;</h4></td>
                      <td><h4>&nbsp;:</h4></td>
                      <td><h4>&nbsp;<?php echo $sekolah['semester'] ?></h4></td>
                    </tr><tr>
                      <td><h4>Tahun Ajaran&nbsp;&nbsp;</h4></td>
                      <td><h4>&nbsp;:</h4></td>
                      <td><h4>&nbsp;<?php echo $sekolah['tahun_ajaran'] ?></h4></td>
                    </tr>
                    <tr>
                      <td><h4>Kepala Sekolah&nbsp;&nbsp;</h4></td>
                      <td><h4>&nbsp;:</h4></td>
                      <td><h4>&nbsp;<?php echo $sekolah['kepala_sekolah'] ?></h4></td>
                    </tr>
                  </table>
                </div>
              </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div> 
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->