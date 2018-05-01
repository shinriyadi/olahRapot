<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/prestasi/edit_process' ?>">
  <div class="modal-body">
    <div class="clearfix">
      <div class="col-md-12">
        <div class="form-group">
            <h4 style="margin-left: 15px;"><?php echo $v['nama_siswa']; ?></h4>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label>Mitra PKL</label>
            <input type="text" name="pkl" class="form-control" value="<?php echo $v['mitra_pkl'] ?>">
            <input type="hidden" name="id_pkl" class="form-control" value="<?php echo $v['id_pkl'] ?>">
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="<?php echo $v['lokasi_pkl'] ?>">
          </div>
          <div class="form-group">
            <label>Lama PKL (dalam bulan)</label>
            <input type="text" name="lama" class="form-control" value="<?php echo $v['lama_pkl'] ?>">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan_pkl" class="form-control" value="<?php echo $v['keterangan_pkl'] ?>">
          </div>
        </div>

        <div class="col-md-2">
            
        </div>

        <div class="col-md-5">
          <div class="form-group">
            <label>Jenis Prestasi</label>
            <input type="text" name="prestasi" class="form-control" value="<?php echo $v['jenis_prestasi'] ?>">
            <input type="hidden" name="id_prestasi" class="form-control" value="<?php echo $v['id_prestasi'] ?>">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan_prestasi" class="form-control" value="<?php echo $v['keterangan_prestasi'] ?>">
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