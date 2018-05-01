  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <?php 
        if (isset($_SESSION['admin'])){
       ?>
      <ul class="sidebar-menu">
        <li <?php if($url=='dashboard') {echo 'class = "active"';} ?>>
          <a href="<?php echo site_url(). 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>

        <li <?php if($url=='guru') {echo 'class = "active"';} ?>>
          <a href="<?php echo site_url(). 'admin/guru' ?>"><i class="fa fa-graduation-cap"></i> <span>Guru</span></a>
        </li>

        <li <?php if($url=='siswa'){echo 'class= "active"';} ?>>
          <a href="<?php echo site_url(). 'admin/siswa' ?>"><i class="fa fa-users"></i> <span>Siswa</span></a>
        </li>

        <li <?php if($url=='perwalian'){echo 'class= "active"';} ?>>
          <a href="<?php echo site_url(). 'admin/perwalian' ?>"><i class="fa fa-link"></i> <span>Perwalian</span></a>
        </li>

        <li <?php if($url=='mapel_dkv'|$url=='mapel_tkj'|$url=='mapel_tb'){echo 'class= "treeview active"';} ?>>
          <a href="#">
            <i class="fa fa-book"></i> <span>Mata Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($url=='mapel_dkv'){echo 'class= "active"';} ?>>
              <a href="<?php echo site_url(). 'admin/mapel_dkv'; ?>"><i class="fa fa-circle-o"></i> Desain Komunikasi Visual</a>
            </li>
            <li <?php if($url=='mapel_tb'){echo 'class= "active"';} ?>>
              <a href="<?php echo site_url(). 'admin/mapel_tb'; ?>"><i class="fa fa-circle-o"></i> Tata Busana</a>
            </li>
            <li <?php if($url=='mapel_tkj'){echo 'class= "active"';} ?>>
              <a href="<?php echo site_url(). 'admin/mapel_tkj'; ?>"><i class="fa fa-circle-o"></i> Teknik Komputer Jaringan</a>
            </li>
          </ul>
        </li>

        <li <?php if($url=='pMapel'|$url=='ekstra'){echo 'class= "treeview active"';} ?>>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($url=='ekstra'){echo 'class= "active"';} ?>>
              <a href="<?php echo site_url(). 'admin/ekstra'; ?>"><i class="fa fa-circle-o"></i> Ekstrakulikuler</a>
            </li>
            <li <?php if($url=='pMapel'){echo 'class= "active"';} ?>>
              <a href="<?php echo site_url(). 'admin/pMapel'; ?>"><i class="fa fa-circle-o"></i> Pelajaran</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="<?php echo site_url(). 'admin/nilai_mapel' ?>"><i class="fa fa-circle"></i> <span>Nilai Mapel</span></a>
        </li>

        <li <?php if($url=='nilai_kepribadian'|$url=='prestasi'){echo 'class= "treeview active"';} ?>>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Nilai Non Akademik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Kelas DKV
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url(). 'admin/nilai_kepribadian/dkv'; ?>">
                    <i class="fa fa-circle-o"></i>Absensi & Ekstrakulikuler
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url(). 'admin/prestasi/dkv'; ?>">
                    <i class="fa fa-circle-o"></i>Prestasi & PKL
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Kelas TB
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url(). 'admin/nilai_kepribadian/tb'; ?>">
                    <i class="fa fa-circle-o"></i>Absensi & Ekstrakulikuler
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url(). 'admin/prestasi/tb'; ?>">
                    <i class="fa fa-circle-o"></i>Prestasi & PKL
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Kelas TKJ
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url(). 'admin/nilai_kepribadian/tkj'; ?>">
                    <i class="fa fa-circle-o"></i>Absensi & Ekstrakulikuler
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url(). 'admin/prestasi/tkj'; ?>">
                    <i class="fa fa-circle-o"></i>Prestasi & PKL
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li>
          <a href="<?php echo site_url(). 'admin/nilai_rapor' ?>"><i class="fa fa-circle"></i> <span>Nilai Rapor</span></a>
        </li>

        <li>
          <a href="<?php echo site_url(). 'admin/sekolah' ?>"><i class="fa fa-circle"></i> <span>Tentang</span></a>
        </li>
      </ul>
      <?php 
        }
       ?>

       <!-- wali kelas -->
       <?php 
        if (isset($_SESSION['wali_kelas'])){
       ?>
      <ul class="sidebar-menu">
        <li <?php if($url=='dashboard') {echo 'class = "active"';} ?>>
          <a href="<?php echo site_url(). 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(). 'admin/nilai_mapel' ?>"><i class="fa fa-circle"></i> <span>Nilai Mapel</span></a>
        </li>

        <li>
          <a href="<?php echo site_url(). 'admin/pMapel' ?>"><i class="fa fa-circle"></i> <span>Pengaturan Mapel</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(). 'admin/nilai_mapel/nilai_kelas' ?>"><i class="fa fa-circle"></i> <span>Nilai Kelas</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(). 'admin/nilai_rapor' ?>"><i class="fa fa-circle"></i> <span>Nilai Rapor</span></a>
        </li>
      </ul>
       <?php 
        }
        ?>

      <!-- BK -->
      <?php 
        if (isset($_SESSION['bk'])){
       ?>
      <ul class="sidebar-menu">
        <li <?php if($url=='dashboard') {echo 'class = "active"';} ?>>
          <a href="<?php echo site_url(). 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li <?php if($url=='ekstra'){echo 'class= "active"';} ?>>
              <a href="<?php echo site_url(). 'admin/ekstra'; ?>"><i class="fa fa-plus"></i> Ekstrakulikuler</a>
        </li>
        <li <?php if($url=='nilai_kepribadian'|$url=='prestasi'){echo 'class= "treeview active"';} ?>>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Nilai Non Akademik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Kelas DKV
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url(). 'admin/nilai_kepribadian/dkv'; ?>">
                    <i class="fa fa-circle-o"></i>Absensi & Ekstrakulikuler
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url(). 'admin/prestasi/dkv'; ?>">
                    <i class="fa fa-circle-o"></i>Prestasi & PKL
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Kelas TB
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url(). 'admin/nilai_kepribadian/tb'; ?>">
                    <i class="fa fa-circle-o"></i>Absensi & Ekstrakulikuler
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url(). 'admin/prestasi/tb'; ?>">
                    <i class="fa fa-circle-o"></i>Prestasi & PKL
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Kelas TKJ
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url(). 'admin/nilai_kepribadian/tkj'; ?>">
                    <i class="fa fa-circle-o"></i>Absensi & Ekstrakulikuler
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url(). 'admin/prestasi/tkj'; ?>">
                    <i class="fa fa-circle-o"></i>Prestasi & PKL
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
       <?php 
        }
        ?>

       <!-- guru -->
      <?php 
        if (isset($_SESSION['guru'])){
       ?>
      <ul class="sidebar-menu">
        <li <?php if($url=='dashboard') {echo 'class = "active"';} ?>>
          <a href="<?php echo site_url(). 'admin/dashboard' ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(). 'admin/nilai_mapel' ?>"><i class="fa fa-circle"></i> <span>Nilai Mapel</span></a>
        </li>

        <li>
          <a href="<?php echo site_url(). 'admin/pMapel' ?>"><i class="fa fa-circle"></i> <span>Pengaturan Mapel</span></a>
        </li>
      </ul>
       <?php 
        }
        ?>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>