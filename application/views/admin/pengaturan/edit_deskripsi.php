<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/pMapel/edit_process' ?>">
  <div class="modal-body">
  <div class="clearfix">
    <h4><?php echo $v['nama_mapel'] ?> <i class="fa fa-minus"></i> <?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan'] ?></h4>
    <br>
    <div class="col-md-5">
        <div class="form-group">
          <label>KKM Pengetahuan</label>
          <input class="form-control" placeholder="KKM Penetahuan" name="kkm_pengetahuan" value="<?php echo $k['kkm_pengetahuan'] ?>" required>
          <input type="hidden" name="id_mapel" value="<?php echo $k['id_mapel'] ?>">
        </div>
        <div class="form-group">
          <label>Pengetahuan A</label>
          <textarea class="form-control" name="pengA" ><?php echo $v['a_pengetahuan'] ?></textarea>
        </div>
        <div class="form-group">
          <label>Pengetahuan B</label>
          <textarea class="form-control" name="pengB" ><?php echo $v['b_pengetahuan'] ?></textarea>
        </div>
        <div class="form-group">
           <label>Pengetahuan C</label>
          <textarea class="form-control" name="pengC" ><?php echo $v['c_pengetahuan'] ?></textarea>
        </div>
        <div class="form-group">
           <label>Pengetahuan D</label>
          <textarea class="form-control" name="pengD" ><?php echo $v['d_pengetahuan'] ?></textarea>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6">
        <div class="form-group">
          <label>KKM Keterampilan</label>
          <input class="form-control" placeholder="KKM Keterampilan" name="kkm_keterampilan" value="<?php echo $k['kkm_keterampilan'] ?>" required>
        </div>
        <div class="form-group">
          <label>Keterampilan A</label>
          <textarea class="form-control" name="ketA" ><?php echo $v['a_keterampilan'] ?></textarea>
        </div>
        <div class="form-group">
          <label>Keterampilan B</label>
          <textarea class="form-control" name="ketB" ><?php echo $v['b_keterampilan'] ?></textarea>
        </div>
        <div class="form-group">
           <label>Keterampilan C</label>
          <textarea class="form-control" name="ketC" ><?php echo $v['c_keterampilan'] ?></textarea>
        </div>
        <div class="form-group">
           <label>Keterampilan D</label>
          <textarea class="form-control" name="ketD" ><?php echo $v['d_keterampilan'] ?></textarea>
        </div>
      </div>
      <input type="hidden" name="id_keterangan" value="<?php echo $v['id_keterangan_mapel'] ?>">
    </div>
    </div>
    <div class="modal-footer">
      <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
      <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
    </div>
  </form>