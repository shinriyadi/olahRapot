  <div class="modal-body">
    <div class="clearfix">
      <div class="col-md-12">
        <div class="col-md-5">
          <div class="form-group">
             <h4><?php echo $v['nama_siswa']; ?></h4>
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 1 : <?php echo $v['uh1'] ?></label> 
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 2 : <?php echo $v['uh2'] ?>
          </div></label>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 3 : <?php echo $v['uh3'] ?></label>
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 4 : <?php echo $v['uh4'] ?></label>
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 5 : <?php echo $v['uh5'] ?></label>
          </div>
          <div class="form-group">
            <label>Ulangan Harian/Tugas 6 : <?php echo $v['uh6'] ?></label>
          </div>
          <div class="form-group">
             <label>Nilai Pengetahuan Akhir: <?php echo $v['pengetahuan_akhir'] ?></label>
          </div>
          <div class="form-group">
             <label>Nilai Akhlak : 
                <?php if($v['pengetahuan_akhir'] < 50){
                  echo "D";
                  } elseif ($v['pengetahuan_akhir'] <= 74) {
                    echo "C";
                  } elseif ($v['pengetahuan_akhir'] <= 84) {
                    echo "B";
                  } elseif ($v['pengetahuan_akhir'] > 84) {
                    echo "A";
                  } ?>
              </label>
          </div>
        </div>

        <div class="col-md-2">
            
        </div>

        <div class="col-md-5">
          <div class="form-group">
             <h4>&nbsp;</h4>
          </div>
          <div class="form-group">
            <label>Nilai Keterampilan 1 : <?php echo $v['ket1'] ?></label>
            <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $v['id_siswa'] ?>">
            <input type="hidden" name="id_mapel" class="form-control" value="<?php echo $v['id_mapel'] ?>">
            <input type="hidden" name="id_detail" class="form-control" value="<?php echo $v['id_detail_nilai'] ?>">
          </div>
          <div class="form-group">
            <label>Nilai Keterampilan 2 : <?php echo $v['ket2'] ?></label>
          </div>
          <div class="form-group">
            <label>Nilai Keterampilan 3 : <?php echo $v['ket3'] ?></label>
          </div>
          <div class="form-group">
             <label>Nilai Keterampilan 4 : <?php echo $v['ket4'] ?></label>
          </div>
          <div class="form-group">
             <label>UTS : <?php echo $v['uts'] ?></label>
          </div>
          <div class="form-group">
             <label>UAS: <?php echo $v['uas'] ?></label>
          </div>
          <div class="form-group">
             <label>Nilai Keterampilan Akhir: <?php echo $v['keterampilan_akhir'] ?></label>
          </div>
          <div class="form-group">
             <label>Nilai Sikap :
                <?php if($v['keterampilan_akhir'] < 50){
                  echo "D";
                  } elseif ($v['keterampilan_akhir'] <= 74) {
                    echo "C";
                  } elseif ($v['keterampilan_akhir'] <= 84) {
                    echo "B";
                  } elseif ($v['keterampilan_akhir'] > 84) {
                    echo "A";
                  } ?>
             </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
  </div>
</form>