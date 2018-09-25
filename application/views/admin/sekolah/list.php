    <script type="text/javascript">

    	function ubah(kode) {
    		document.getElementById('editData').innerHTML =  "";
    		$.ajax({
    			url:"<?php echo site_url(). '/admin/sekolah/edit/' ?>" + kode,
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
    			Tentang
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
                      <!-- /.box-header -->
                      <div class="box-body">
                         <div class="col-md-12">
                            <div class="col-md-3">
                                <h4>Nama</h4><br>
                                <h4>Alamat</h4><br>
                                <h4>Tahun Ajaran</h4><br>
                                <h4>Semester</h4><br>
                                <h4>Kepala Sekolah</h4><br>
                                <h4>NIY Kepala Sekolah</h4><br>
                            </div>
                            <div class="col-md-1">
                                <h4>:</h4><br>
                                <h4>:</h4><br>
                                <h4>:</h4><br>
                                <h4>:</h4><br>
                                <h4>:</h4><br>
                                <h4>:</h4><br>
                            </div>
                            <div class="col-md-7">
                                <h4><?php echo $v['nama_sekolah'] ?></h4><br>
                                <h4><?php echo $v['alamat_sekolah'] ?></h4><br>
                                <h4><?php echo $v['tahun_ajaran'] ?></h4><br>
                                <h4><?php echo $v['semester'] ?></h4><br>
                                <h4><?php echo $v['kepala_sekolah'] ?></h4><br>
                                <h4><?php echo $v['niy_kepala'] ?></h4><br>
                            </div> 
                            <center>
                                <button type="button" class="btn btn-primary btn-flat " data-toggle="modal" href="#editModal" onclick="ubah('<?php echo $v['id_sekolah'] ?>')">
                                Update&nbsp;&nbsp;&nbsp;<i class="fa fa-edit"></i>
                            </button>
                                
                            </center>
                        </div>
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-h4ledby="myModalh4" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title">Edit Tentang</h4>
       </div>
       <div id="editData">

       </div>
   </div>
</div>
</div>
<!-- modal -->