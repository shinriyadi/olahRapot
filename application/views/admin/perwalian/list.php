    <script type="text/javascript">
      function ubah(kode) {
        document.getElementById('editData').innerHTML =  "";
        $.ajax({
          url:"<?php echo site_url(). '/admin/perwalian/edit/' ?>" + kode,
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
          Master Wali
        </h1>
      </section>

    <!-- Main content -->
    <section class="content">

    <?php
      if ($msg != "") { ?>
        <?php echo $msg; ?>
      <?php
    }
    ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">DAFTAR WALI</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Wali Kelas</th>
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
                      <td><?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan'] ?></td>
                      <td><?php echo $v['nama_jurusan'] ?></td>
                      <td><?php echo $v['nama_user'] ?></td>
                      <td align="center">
                        <button type="button" class="btn btn-success btn-xs btn-flat" data-toggle="modal" href="#editModal" onclick="ubah('<?php echo $v['id_kelas'] ?>')" >
                          Ubah&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i>
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
          <h4 class="modal-title">Edit Perwalian</h4>
        </div>
        <div id="editData">

        </div>
      </div>
    </div>
  </div>
  <!-- modal -->
