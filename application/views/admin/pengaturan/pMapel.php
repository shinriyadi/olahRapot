    <script type="text/javascript">
    	function hapus(id) {
    		if (confirm("Apakah anda yakin menghapus data ini?")) {
    			window.location.href = "<?php echo site_url() . '/admin/pMapel/delete' ?>/"+id;
    		} else {
    			""
    		}
    	}

    	function ubah(kode) {
    		document.getElementById('editData').innerHTML =  "";
    		$.ajax({
    			url:"<?php echo site_url(). '/admin/pMapel/edit/' ?>" + kode,
    			success: function(msg) {
    				$('#editData').html(msg);
    			},
    			dataType: "html"
    		});
    	}

      function lihat(kode) {
        document.getElementById('viewData').innerHTML =  "";
        $.ajax({
          url:"<?php echo site_url(). '/admin/pMapel/detail/' ?>" + kode,
          success: function(msg) {
            $('#viewData').html(msg);
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
    			Pengaturan Mata Pelajaran
    		</h1>
    	</section>

    	<!-- Main content -->
    	<section class="content">
       <?php
       if ($msg != "") {
        echo $msg;
      }
      ?>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Deskripsi Nilai Mapel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <div class="row">
            <form action="<?php echo site_url(). '/admin/pMapel/add_process' ?>" method="post">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Mata Pelajaran </label>
                  <select class="form-control select2" style="width: 100%;" name="id_mapel">
                    <?php foreach ($mapel as $v){ ?>
                    <option value="<?php echo $v['id_mapel'] ?>"><?php echo $v['nama_mapel'] ?> --- <?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan'] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Pengetahuan (A) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai A" name="pengA">
                </div>

                <div class="form-group">
                  <label>Pengetahuan (B) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai B" name="pengB">
                </div>

                <div class="form-group">
                  <label>Pengetahuan (C) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai C" name="pengC">
                </div>

                <div class="form-group">
                  <label>Pengetahuan (D) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai D" name="pengD">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label style="margin-bottom: 38px;">&nbsp; </label>
                </div>

                <div class="form-group">
                  <label>Keterampilan (A) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai A" name="ketA">
                </div>
                <div class="form-group">
                  <label>Keterampilan (B) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai B" name="ketB">
                </div>

                <div class="form-group">
                  <label>Keterampilan (C) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai C" name="ketC">
                </div>

                <div class="form-group">
                  <label>Keterampilan (D) </label>
                  <input type="input" class="form-control"  placeholder="Deskripsi Untuk Nilai D" name="ketD">
                </div>
                <div class="col-xs-9" style="padding: 0"></div>
                <div class="col-xs-3" style="padding: 0">
                  <button type="submit" class="btn btn-block btn-primary btn-flat" >Simpan</button>
                </div>                
              </form>

            </div>
            </div>
          </div>
        </div>

      <div class="row">
       <div class="col-xs-12">
        <div class="box">
         <div class="box-header">
          <h3>Daftar Mata Pelajaran</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
          <thead>
           <tr>
            <th>NO</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th></th>
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
              <td><?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan'] ?></td>
              <td align="center">
                <button type="button" class="btn btn-info btn-xs btn-flat" data-toggle="modal" href="#viewModal" onclick="lihat('<?php echo $v['id_keterangan_mapel'] ?>')" >
                  Detail&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>
                </button>
              </td>
              <td align="center">
                <button type="button" class="btn btn-success btn-xs btn-flat" data-toggle="modal" href="#editModal" onclick="ubah('<?php echo $v['id_keterangan_mapel'] ?>')" >
                  Edit&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i>
                </button>
              </td>
              <td align="center">
                <button type="button" class="btn btn-danger btn-xs btn-flat" onclick="hapus('<?php echo $v['id_keterangan_mapel'] ?>')">
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
     <h4 class="modal-title">Edit Deskripsi Mata Pelajaran</h4>
   </div>
   <div id="editData">

   </div>
 </div>
</div>
</div>
<!-- modal -->

<!-- modal detail -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title">Detail Deskripsi</h4>
   </div>
   <div id="viewData">

   </div>
 </div>
</div>
</div>

