    <script type="text/javascript">
      function hapus(id) {
        if (confirm("Apakah anda yakin menghapus data ini?")) {
          window.location.href = "<?php echo site_url() . '/admin/mapel_dkv/delete' ?>/"+id;
        } else {
          ""
        }
      }

      function ubah(kode) {
        document.getElementById('editData').innerHTML =  "";
        $.ajax({
          url:"<?php echo site_url(). '/admin/mapel_dkv/edit/' ?>" + kode,
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
          Mata Pelajaran DKV
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <?php
        if ($msg != "") {
          echo $msg;
        }
        ?>
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Mata Pelajaran</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <form action="<?php echo site_url(). '/admin/mapel_dkv/add_process' ?>" method="post">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="input" class="form-control" placeholder="Nama Mata Pelajaran" name="nama">
                    <input type="hidden" name="password" value="<?php echo substr(sha1(mt_rand()),17,6); ?>">
                  </div>

                  <div class="form-group">
                    <label>Pilih Kompetensi</label>
                    <select class="form-control " style="width: 100%;" name="kompetensi">
                    <?php foreach ($kompetensi as $k){ ?>
                      <option value="<?php echo $k['id_kompetensi'] ?>"><?php echo $k['nama_kompetensi'] ?> --> <?php echo $k['kurikulum'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Pilih Pengampu</label>
                    <select class="form-control " style="width: 100%;" name="guru">
                    <?php foreach ($guru as $g){ ?>
                      <option value="<?php echo $g['id_user'] ?>"><?php echo $g['nama_user'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                   <div class="form-group">
                    <label>Pilih Kelas</label>
                    <select class="form-control " style="width: 100%;" name="kelas">
                    <?php foreach ($kelas as $k){ ?>
                      <option value="<?php echo $k['id_kelas'] ?>"><?php echo $k['tingkat'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="col-xs-9" style="padding: 0"></div>

                  <div class="col-xs-3" style="padding: 0">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-block btn-primary btn-flat" >Simpan</button>
                  </div>                
                </form>

              </div>

            </div>
          </div>
          <!-- /.row -->
        </div>

        <!-- </div> -->
        <!-- /.box -->

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">DAFTAR Mata Pelajaran</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Mapel</th>
                      <th>Kelas</th>
                      <th>Pengampu</th>
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
                        <td><?php echo $v['nama_mapel'] ?></td>
                        <td><?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan']?></td>
                        <td><?php echo $v['nama_user'] ?></td>
                        <td align="center">
                          <button type="button" class="btn btn-success btn-xs btn-flat" data-toggle="modal" href="#editModal" onclick="ubah('<?php echo $v['id_mapel'] ?>')" >
                            Edit&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i>
                          </button>
                        </td>
                        <td align="center">
                          <button type="button" class="btn btn-danger btn-xs btn-flat" onclick="hapus('<?php echo $v['id_mapel'] ?>')">
                            Hapus&nbsp;&nbsp;&nbsp;<i class="fa fa-trash"></i>
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
            <h4 class="modal-title">Edit Mata pelajaran</h4>
          </div>
          <div id="editData">

          </div>
        </div>
      </div>
    </div>
    <!-- modal -->
