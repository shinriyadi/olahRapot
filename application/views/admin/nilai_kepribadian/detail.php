  <div class="modal-body">
    <div class="clearfix">
      <div class="col-md-12">
      <div class="form-group">
            <h4><?php echo $v['nama_siswa']; ?></h4>
        </div>
          <div class="form-group">
            <label>Sakit : <?php echo $v['sakit'] ?></label> 
          </div>
          <div class="form-group">
            <label>Izin : <?php echo $v['izin'] ?></label> 
          </div>
          <div class="form-group">
            <label>Tanpa Keterangan: <?php echo $v['tanpa_keterangan'] ?></label> 
          </div>
          <div class="form-group">
            <label>Esktrakulikuler : <?php echo $v['nama_ekstra'] ?></label> 
          </div>
          <div class="form-group">
            <label>Keterangan Ekstrakulikuler: <?php echo $v['keterangan_ekstra'] ?></label> 
          </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
  </div>
</form>