<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/nilai_kepribadian/edit_process' ?>">
  <div class="modal-body">
    <div class="clearfix">
      <div class="col-md-12">
        <div class="form-group">
            <h4 style="margin-left: 15px;"><?php echo $v['nama_siswa']; ?></h4>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <label>Ekstra Kulikuler</label>
            <select class="form-control " style="width: 100%;" name="id_ekstra">
              <?php foreach ($e as $k){ ?>
              <option value="<?php echo $k['id_ekstra'] ?>"><?php echo $k['nama_ekstra'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Keterangan Ekstrakulikuler</label>
            <input type="text" name="ket_ekstra" class="form-control" value="<?php echo $v['keterangan_ekstra'] ?>">
          </div>
        </div>

        <div class="col-md-2">
            
        </div>

        <div class="col-md-5">
          <div class="form-group">
            <label>Sakit</label>
            <input type="text" name="sakit" class="form-control" value="<?php echo $v['sakit'] ?>">
            <input type="hidden" name="id_kepribadian" class="form-control" value="<?php echo $v['id_kepribadian'] ?>">
          </div>
          <div class="form-group">
            <label>Izin</label>
            <input type="text" name="izin" class="form-control" value="<?php echo $v['izin'] ?>">
          </div>
          <div class="form-group">
            <label>Tanpa Keterangan</label>
            <input type="text" name="tanpa" class="form-control" value="<?php echo $v['tanpa_keterangan'] ?>">
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