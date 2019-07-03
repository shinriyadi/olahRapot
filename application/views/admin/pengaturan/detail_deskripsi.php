<div class="modal-body">
  <h3><?php echo $v['nama_mapel'] ?> --- <?php echo $v['tingkat']; ?> <?php echo $v['kode_jurusan'] ?></h3>
  <br>
  <div class="clearfix">
    <label>Pengetahuan</label><br>
    <p>KKM : <?php echo $k['kkm_pengetahuan'] ?></p>
    <p>Deskripsi A : <?php echo $v['a_pengetahuan'] ?></p>
    <p>Deskripsi B : <?php echo $v['b_pengetahuan'] ?></p>
    <p>Deskripsi C : <?php echo $v['c_pengetahuan'] ?></p>
    <p>Deskripsi D : <?php echo $v['d_pengetahuan'] ?></p>
    <br>
    <label>Keterampilan</label><br>
    <p>KKM : <?php echo $k['kkm_keterampilan'] ?></p>
    <p>Deskripsi A : <?php echo $v['a_keterampilan'] ?></p>
    <p>Deskripsi B : <?php echo $v['b_keterampilan'] ?></p>
    <p>Deskripsi C : <?php echo $v['c_keterampilan'] ?></p>
    <p>Deskripsi D : <?php echo $v['d_keterampilan'] ?></p>
  </div>
<div class="modal-footer">
  <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
</div>
