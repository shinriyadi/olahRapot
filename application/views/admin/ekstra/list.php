    <script type="text/javascript">
    	function hapus(id) {
    		if (confirm("Apakah anda yakin menghapus data ini?")) {
    			window.location.href = "<?php echo site_url() . '/admin/ekstra/delete' ?>/"+id;
    		} else {
    			""
    		}
    	}

    	function ubah(kode) {
    		document.getElementById('editData').innerHTML =  "";
    		$.ajax({
    			url:"<?php echo site_url(). '/admin/ekstra/edit/' ?>" + kode,
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
    			Ekstrakulikuler
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
    						<label>&nbsp;</label>
    						<button type="button" class="btn btn-primary btn-flat" data-toggle="modal" href="#tambahModal" style="margin-bottom: 20px" >
    							Tambah&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i>
    						</button>
    						<!-- /.box-header -->
    						<div class="box-body">
    							<table id="example1" class="table table-bordered table-striped">
    								<thead>
    									<tr>
    										<th>NO</th>
    										<th>Nama</th>
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
    											<td><?php echo $v['nama_ekstra'] ?></td>
    											<td align="center">
    												<button type="button" class="btn btn-success btn-xs btn-flat" data-toggle="modal" href="#editModal" onclick="ubah('<?php echo $v['id_ekstra'] ?>')" >
    													Edit&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i>
    												</button>
    											</td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-danger btn-xs btn-flat" onclick="hapus('<?php echo $v['id_ekstra'] ?>')">
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
    					<h4 class="modal-title">Edit ekstra</h4>
    				</div>
    				<div id="editData">

    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- modal -->

    	<!-- modal -->
    	<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    		<div class="modal-dialog">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    					<h4 class="modal-title">Tambah Ekstrakulikuler</h4>
    				</div>
    				<div id="editData">
    				<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . 'admin/ekstra/add_process' ?>">
    						<div class="modal-body">
    							<div class="col-md-12">
    								<div class="form-group">
    									<label>Nama Ekstrakulikuler</label>
    									<input type="input" class="form-control" placeholder="Masukkan Nama Ekstrakulikuler" name="nama_ekstra">
    								</div>
    							</div>
    							<div class="modal-footer">
    								<button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
    								<button class="btn btn-primary btn-flat" type="submit">Simpan</button>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>

