<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . 'admin/ekstra/edit_process' ?>">
  <div class="modal-body">
    <div class="col-md-12">
      <div class="form-group">
        <label>Pilih Pengampu</label>
        <input type="text" name="nama_ekstra" class="form-control" value="<?php echo $v['nama_ekstra'] ?>">
      </div>
      <input type="hidden" value="<?php echo $v['id_ekstra'] ?>" name="id_ekstra">

        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
          <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
        </div>
      </form>