<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/mapel_tb/edit_process' ?>">
  <div class="modal-body">
    <div class="clearfix">
      <div class="col-md-12">
       <div class="form-group">
        <h4><?php echo $v['nama_mapel']; ?></h4>
      </div>
       <div class="form-group">
        <label>Pilih Kompetensi</label>
        <select class="form-control " style="width: 100%;" name="kompetensi">
          <?php foreach ($komp as $g){ ?>
          <option value="<?php echo $g['id_kompetensi'] ?>"><?php echo $g['nama_kompetensi'] ?> --> <?php echo $g['kurikulum'] ?></option>
          <?php } ?>
        </select>
      </div> 
      <div class="form-group">
        <label>Pilih Pengampu</label>
        <select class="form-control " style="width: 100%;" name="guru">
          <?php foreach ($guru as $g){ ?>
          <option value="<?php echo $g['id_user'] ?>"><?php echo $g['nama_user'] ?></option>
          <?php } ?>
        </select>
      </div>
      <input type="hidden" value="<?php echo $v['id_mapel'] ?>" name="id_mapel">

        </div>
    </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
          <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
        </div>
      </form>