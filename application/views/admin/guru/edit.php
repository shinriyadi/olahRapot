<form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/guru/edit_process' ?>">
  <div class="modal-body">
    <div class="col-md-12">
        <div class="form-group">
          <label>User ID/Username</label>
          <input type="input" class="form-control" placeholder="Username" name="username" value="<?php echo $v['username'] ?>">
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="input" class="form-control" placeholder="Nama" name="nama" value="<?php echo $v['nama_user'] ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="input" class="form-control" placeholder="Password" name="password" value="<?php echo $v['password'] ?>">
        </div>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control" style="width: 100%;" name="status">
            <option <?php if($v['status'] == 'GURU' ){echo 'selected';} ?>
            >GURU</option>
            <option <?php if($v['status'] == 'WALI KELAS' ){echo 'selected';} ?>
            >WALI KELAS</option>
            <option <?php if($v['status'] == 'BK' ){echo 'selected';} ?>
            >BK</option>
          </select>
          <input type="hidden" value="<?php echo $v['id_user'] ?>" name="id_user">
        </div>
      </div>

    </div>
    <div class="modal-footer">
      <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
      <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
    </div>
  </form>