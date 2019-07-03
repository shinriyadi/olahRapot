  <div class="modal-body">
    <div class="clearfix">
      <div class="col-md-12">
      <div class="form-group">
            <h4><?php echo $v['nama_siswa']; ?></h4>
        </div>
          <div class="form-group">
            <label>Mitra PKL : <?php echo $v['mitra_pkl'] ?></label> 
          </div>
          <div class="form-group">
            <label>Lokasi PKL : <?php echo $v['lokasi_pkl'] ?></label> 
          </div>
          <div class="form-group">
            <label>Lama PKL: <?php echo $v['lama_pkl'] ?> Bulan</label> 
          </div>
          <div class="form-group">
            <label>Keterangan PKL : <?php echo $v['keterangan_pkl'] ?></label> 
          </div>
          <div class="form-group">
            <label>Jenis Prestasi: <?php echo $v['jenis_prestasi'] ?></label> 
          </div>
          <div class="form-group">
            <label>Keterangan Prestasi: <?php echo $v['keterangan_prestasi'] ?></label> 
          </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
  </div>
</form>