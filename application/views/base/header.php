<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Rapor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/skin-blue.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo site_url(). 'admin/dashboard' ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-archive"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-archive"></i><b>&nbsp;&nbsp;SI</b>Rapor</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $vUser['nama_user'] ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu" style="width:auto;min-width:130px;">              
              <li class="header" style="padding: 0;">                
                <ul class="menu" >
                  <li >
                    <a href="#editPassword" data-toggle="modal" data-target="#editPassword" style="color:#333;">
                      <i class="fa fa-cog"></i>&nbsp;|&nbsp;Edit Profil
                    </a>
                  </li>
                  <li >
                    <a href="<?php echo site_url(). 'login/logout' ?>" style="color:#333;">
                      <i class="fa fa-power-off"></i>&nbsp;|&nbsp;Log Out
                    </a>
                  </li>
                </ul>                                 
              </li>
              
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Edit Profil</h4>
        </div>
        <div id="editPassword">
          <form class="cmxform form-horizontal tasi-form" id="commentForm" method="POST" action="<?php echo site_url() . '/admin/user/edit' ?>">
            <div class="modal-body">
              <dib class="clearfix">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="input" class="form-control"  placeholder="" name="nama" value="<?php echo $vUser['nama_user'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>User ID</label>
                  <input type="input" class="form-control"  placeholder="" name="username" value="<?php echo $vUser['username'] ?>">
                </div>
                <div class="form-group">
                  <label>Masukkan Password Lama</label>
                  <input type="password" class="form-control"  placeholder="" name="password_lama" >
                  <input type="hidden" class="form-control"  placeholder="" name="password_lama_benar" value="<?php echo $vUser['password'] ?>">
                </div>
                <div class="form-group">
                  <label>Masukkan Password Baru</label>
                  <input type="password" class="form-control"  placeholder="" name="password_baru1" >
                </div>
                <div class="form-group">
                  <label>Masukkan Password Baru Sekali Lagi</label>
                  <input type="password" class="form-control"  placeholder="" name="password_baru2" >
                  <input type="hidden" class="form-control"  placeholder="" name="kode_user" value="<?php echo $vUser['id_user'] ?>">
                </div>
              </div>
              </dib>
            </div>
    <div class="modal-footer">
      <button data-dismiss="modal" class="btn btn-default btn-flat" type="button">Tutup</button>
      <button class="btn btn-primary btn-flat" type="submit">Simpan</button>
    </div>
  </form>
        </div>
      </div>
    </div>
  </div>