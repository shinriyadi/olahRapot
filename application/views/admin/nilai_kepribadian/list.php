    <script type="text/javascript">
      function detail(kode) {
        document.getElementById('detailData').innerHTML =  "";
        $.ajax({
          url:"<?php echo site_url(). '/admin/nilai_kepribadian/detail/' ?>" + kode,
          success: function(msg) {
            $('#detailData').html(msg);
          },
          dataType: "html"
        });
      }

      function ubah(kode) {
        document.getElementById('editData').innerHTML =  "";
        $.ajax({
          url:"<?php echo site_url(). '/admin/nilai_kepribadian/edit/' ?>" + kode,
          success: function(msg) {
            $('#editData').html(msg);
          },
          dataType: "html"
        });
      }

      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
        });
      }, 2000);
    </script>


    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Nilai Kepribadian
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <?php
        if ($msg != "") {
          echo $msg;
        }
        ?>

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">DAFTAR SISWA</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($ls as $v) {
                      ?>
                      <tr class="">
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $v['nama_siswa'] ?></td>
                        <td><?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan'] ?></td>
                        <td align="center">
                          <button type="button" class="btn btn-success btn-xs btn-flat" data-toggle="modal" href="#editModal" onclick="ubah('<?php echo $v['id_siswa'] ?>')" >
                            Edit&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i>
                          </button>
                        </td>
                        <td align="center">
                          <button type="button" class="btn btn-info btn-xs btn-flat" data-toggle="modal" href="#detailModal" onclick="detail('<?php echo $v['id_siswa'] ?>')" >
                            Detail&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>
                          </button>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>
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

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Beri Nilai</h4>
          </div>
          <div id="editData">

          </div>
        </div>
      </div>
    </div>
    <!-- modal -->

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Detail Nilai</h4>
          </div>
          <div id="detailData">

          </div>
        </div>
      </div>
    </div>
    <!-- modal -->
