<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/perwalian/edit_process' ?>">
  <div class="modal-body">
    <div class="col-md-12">
      <div class="form-group">
        <label>Pilih Wali</label>
        <select class="form-control " style="width: 100%;" name="id_user">
          <?php foreach ($g as $vg){ ?>
          <option value="<?php echo $vg['id_user'] ?>"><?php echo $vg['nama_user'] ?></option>
          <?php } ?>
        </select>
        <input type="hidden" value="<?php echo $v['id_user'] ?>" name="user">
        <input type="hidden" value="<?php echo $v['id_kelas'] ?>" name="id_kelas">
      </div>
    </div>

  </div>
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
    <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
  </div>
</form>