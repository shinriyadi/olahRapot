<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . 'admin/sekolah/edit_process' ?>">
  <div class="modal-body">
    <div class="col-md-12">
      <div class="form-group">
        <label>Nama Sekolah</label>
        <input type="text" name="nama_sekolah" class="form-control" value="<?php echo $v['nama_sekolah'] ?>">
      </div>
      <div class="form-group">
        <label>Alamat Sekolah</label>
        <input type="text" name="alamat_sekolah" class="form-control" value="<?php echo $v['alamat_sekolah'] ?>">
      </div>
      <div class="form-group">
        <label>Tahun Ajaran</label>
        <input type="text" name="tahun_ajaran" class="form-control" value="<?php echo $v['tahun_ajaran'] ?>">
      </div>
      <div class="form-group">
        <label>Semester</label>
        <input type="text" name="semester" class="form-control" value="<?php echo $v['semester'] ?>">
      </div>
      <div class="form-group">
        <label>Kepala Sekolah</label>
        <input type="text" name="kepala_sekolah" class="form-control" value="<?php echo $v['kepala_sekolah'] ?>">
      </div>
      <div class="form-group">
        <label>NIY Kepala Sekolah</label>
        <input type="text" name="NIY" class="form-control" value="<?php echo $v['niy_kepala'] ?>">
      </div>
      <div class="form-group">
        <label>Sikap Spiritual</label>
        <input type="text-area" name="sikap_spiritual" class="form-control" value="<?php echo $v['sikap_spiritual'] ?>">
      </div>
      <input type="hidden" value="<?php echo $v['id_sekolah'] ?>" name="id_sekolah">

    </div>
  </div>
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
    <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
  </div>
</form>