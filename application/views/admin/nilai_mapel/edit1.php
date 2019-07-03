<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/nilai_mapel/tambah_nilai' ?>">
  <div class="modal-body">
    <div class="clearfix">
      <div class="col-md-12">
        <div class="form-group" align="center">
            <b><?php echo $v['nama_siswa']; ?></b>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label>Ulangan Harian/Tugas 1</label>
            <input type="text" name="uh1" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 2</label>
            <input type="text" name="uh2" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 3</label>
            <input type="text" name="uh3" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 4</label>
            <input type="text" name="uh4" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 5</label>
            <input type="text" name="uh5" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 6</label>
            <input type="text" name="uh6" class="form-control" value="0">
          </div>
        </div>

        <div class="col-md-2">
            
        </div>

        <div class="col-md-5">
          <div class="form-group">
            <label>Nilai Keterampilan 1</label>
            <input type="text" name="ket1" class="form-control" value="0">
            <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $v['id_siswa'] ?>">
            <input type="hidden" name="id_mapel" class="form-control" value="<?php echo $v['id_mapel'] ?>">
          </div>
          <div class="form-group">
            <label>Nilai Keterampilan 2</label>
            <input type="text" name="ket2" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>Nilai Keterampilan 3</label>
            <input type="text" name="ket3" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>Nilai Keterampilan 4</label>
            <input type="text" name="ket4" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>UTS</label>
            <input type="text" name="uts" class="form-control" value="0">
          </div>
          <div class="form-group">
            <label>UAS</label>
            <input type="text" name="uas" class="form-control" value="0">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
    <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
  </div>
</form>