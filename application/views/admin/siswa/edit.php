<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/siswa/edit_process' ?>">
  <div class="modal-body">
    <div class="col-md-12">
      <form action="<?php echo site_url(). '/admin/siswa/update' ?>" method="post">
        <div class="form-group">
          <label>NIS</label>
          <input type="input" class="form-control"  placeholder="NIS" name="nis" value="<?php echo $v['nis'] ?>">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="input" class="form-control"  placeholder="nama" name="nama" value="<?php echo $v['nama_siswa'] ?>">
          <input type="hidden" value="<?php echo $v['id_siswa'] ?>" name="id_siswa">
        </div>
        <div class="form-group">
          <label>Kelas</label>
          <select class="form-control" name="kelas">
            <?php foreach($k as $v) { ?>
              <option value="<?php echo $v['id_kelas'] ?>"><?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan'] ?></option>
            <?php } ?>
          </select>
        </div>
      </div>

    </div>
    <div class="modal-footer">
      <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
      <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
    </div>
  </form>