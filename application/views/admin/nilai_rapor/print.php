<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Print Rapor Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/skin-blue.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

  <style type="text/css" media="print">
    body{
      font-size: 12px;
    }
    td {
      padding: 1.5px;
    }
    th {
      padding: 2px;
      text-align: center;
    }
    .tabel {
      text-align: center;
      border: 1px solid #000;
    }
    .tabel2 {
      border: 1px solid #000;
    }
    .tabel3 {
      border: 1px solid #000;
    }
    .tabel3 td {
      padding-top: 0;
      padding-bottom: 0;
      padding-left: 3px;
      border: 1px solid #000;
    }
    .tabel2 td {
      padding: 5px;
    }
    .tabel td:nth-child(1){
      vertical-align: top;
      width:5%;
    }
    .tabel td:nth-child(2){
      vertical-align: top;
      width:25%;
      height: 60px;
      padding-bottom: 10px;
      padding-left: 3px;
    }
    .tabel td:nth-child(3){
      width:5%;
    }
    .tabel td:nth-child(4){
      width:5%;
    }
    .tabel td:nth-child(5){
      width:5%;
    }
    .tabel td:nth-child(6){
      vertical-align: top;
      font-size: 12px;
      text-align: left;
      width:20%;
      padding-bottom: 10px;
      padding-left: 3px;
    }
    .tabel td:nth-child(7){
      width:5%;
    }
    .tabel td:nth-child(8){
      width:5%;
    }
    .tabel td:nth-child(9){
      width:5%;
    }
    .tabel td:nth-child(10){
      vertical-align: top;
      font-size: 12px;
      text-align: left;
      width:20%;
      padding-bottom: 10px;
      padding-left: 3px;
    }
    .break {
      page-break-before: always; 
      page-break-inside: avoid; 
    }
    @page {
      size: a4;
      margin-top: 0;
      margin-bottom: 0;
    }
    .jarak {
      padding-top: 50px;
    }
  </style>
</head>
<body onload="window.print();">

  <!-- page 1 -->
  <div class="row jarak">
    <div class="col-xs-6 table-responsive">
      <table>
        <tr>
          <td>Nama Sekolah</td>
          <td>:</td>
          <td><?php echo $sekolah['nama_sekolah'] ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $sekolah['alamat_sekolah'] ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $v['nama_siswa'] ?></td>
        </tr>
        <tr>
          <td>No. Induk/NISN</td>
          <td>:</td>
          <td><?php echo $v['nis']; ?></td>
        </tr>
      </table>
    </div>
    <!-- /.col -->
    <div class="col-xs-6 table-responsive">
      <table class="pull-right">
        <tr>
          <td>Kelas</td>
          <td>:</td>
          <td><?php echo $v['tingkat'] ?> <?php echo $v['kode_jurusan'] ?></td>
        </tr>
        <tr>
          <td>Semester</td>
          <td>:</td>
          <td><?php if($sekolah['semester'] == 1){
            echo $sekolah['semester']; echo " (satu)";
          } else {echo $sekolah['semester']; echo " (dua)";}?></td>
        </tr>
        <tr>
          <td>Tahun Pelajaran</td>
          <td>:</td>
          <td><?php echo $sekolah['tahun_ajaran'] ?></td>
        </tr>
      </table>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      CAPAIAN HASIL BELAJAR <br>
      <b>A. Sikap Spiritual</b>
      <p align="justify" style="border: 1.2px solid #000; padding: 3px"><?php echo $sekolah['sikap_spiritual'] ?></p>
    </div>

    <br>

    <div class="col-md-12">
      <b>B. Pengetahuan dan Keterampilan</b>
    </div>
    <div class="col-xs-12 table-responsive">
      <table border="1" width="100%" class="tabel">
        <thead>
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Mata Pelajaran</th>
            <th colspan="4">Pengetahuan</th>
            <th colspan="4">Keterampilan</th>
          </tr>
          <tr>
            <th style="font-size: 12px">KKM</th>
            <th style="font-size: 12px">Angka</th>
            <th style="font-size: 12px">Predikat</th>
            <th>Deskripsi</th>
            <th style="font-size: 12px">KKM</th>
            <th style="font-size: 12px">Angka</th>
            <th style="font-size: 12px">Predikat</th>
            <th>Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th colspan="2" style="text-align: left;"><b>Muatan Nasional</b></th>
            <th></th> <th></th> <th></th> <th></th> <th></th><th></th><th></th> <th></th>
          </tr>
          <?php
          $i = 1; 
          foreach ($nas1 as $v){ ?>
          <tr class="">
            <td><?php echo $i++ ?></td>
            <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
            <td><b>75</b></td>
            <td><?php echo $v['pengetahuan_akhir'] ?></td>
            <td> <?php if($v['pengetahuan_akhir'] < 50){
              echo "D";
            } elseif ($v['pengetahuan_akhir'] <= 74) {
              echo "C";
            } elseif ($v['pengetahuan_akhir'] <= 84) {
              echo "B";
            } elseif ($v['pengetahuan_akhir'] > 84) {
              echo "A";
            } ?>      
          </td>
          <td><?php if($v['pengetahuan_akhir'] < 50){
            echo $v['d_pengetahuan'];
          } elseif ($v['pengetahuan_akhir'] <= 74) {
            echo $v['c_pengetahuan'];
          } elseif ($v['pengetahuan_akhir'] <= 84) {
            echo $v['b_pengetahuan'];
          } elseif ($v['pengetahuan_akhir'] > 84) {
            echo $v['a_pengetahuan'];
          } ?> </td>
          <td><b>75</b></td>
          <td><?php echo $v['keterampilan_akhir'] ?></td>
          <td> <?php if($v['keterampilan_akhir'] < 50){
            echo "D";
          } elseif ($v['keterampilan_akhir'] <= 74) {
            echo "C";
          } elseif ($v['keterampilan_akhir'] <= 84) {
            echo "B";
          } elseif ($v['keterampilan_akhir'] > 84) {
            echo "A";
          } ?>      
        </td>
        <td><?php if($v['keterampilan_akhir'] < 50){
          echo $v['d_keterampilan'];
        } elseif ($v['keterampilan_akhir'] <= 74) {
          echo $v['c_keterampilan'];
        } elseif ($v['keterampilan_akhir'] <= 84) {
          echo $v['b_keterampilan'];
        } elseif ($v['keterampilan_akhir'] > 84) {
          echo $v['a_keterampilan'];
        } ?> </td>
      </tr>
      <?php } ?>
      <?php
    foreach ($nas2 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
    </tr>
    <?php } ?>
      <tr>
        <th colspan="2" style="text-align: left;"><b>Muatan Kewilayahan</b></th>
        <th></th> <th></th> <th></th> <th></th> <th></th><th></th><th></th> <th></th>
      </tr>
      <?php
      foreach ($wil1 as $v){ ?>
      <tr class="">
        <td><?php echo $i++ ?></td>
        <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
        <td><b>75</b></td>
        <td><?php echo $v['pengetahuan_akhir'] ?></td>
        <td> <?php if($v['pengetahuan_akhir'] < 50){
          echo "D";
        } elseif ($v['pengetahuan_akhir'] <= 74) {
          echo "C";
        } elseif ($v['pengetahuan_akhir'] <= 84) {
          echo "B";
        } elseif ($v['pengetahuan_akhir'] > 84) {
          echo "A";
        } ?>      
      </td>
      <td><?php if($v['pengetahuan_akhir'] < 50){
        echo $v['d_pengetahuan'];
      } elseif ($v['pengetahuan_akhir'] <= 74) {
        echo $v['c_pengetahuan'];
      } elseif ($v['pengetahuan_akhir'] <= 84) {
        echo $v['b_pengetahuan'];
      } elseif ($v['pengetahuan_akhir'] > 84) {
        echo $v['a_pengetahuan'];
      } ?> </td>
      <td><b>75</b></td>
      <td><?php echo $v['keterampilan_akhir'] ?></td>
      <td> <?php if($v['keterampilan_akhir'] < 50){
        echo "D";
      } elseif ($v['keterampilan_akhir'] <= 74) {
        echo "C";
      } elseif ($v['keterampilan_akhir'] <= 84) {
        echo "B";
      } elseif ($v['keterampilan_akhir'] > 84) {
        echo "A";
      } ?>      
    </td>
    <td><?php if($v['keterampilan_akhir'] < 50){
      echo $v['d_keterampilan'];
    } elseif ($v['keterampilan_akhir'] <= 74) {
      echo $v['c_keterampilan'];
    } elseif ($v['keterampilan_akhir'] <= 84) {
      echo $v['b_keterampilan'];
    } elseif ($v['keterampilan_akhir'] > 84) {
      echo $v['a_keterampilan'];
    } ?> </td>
  </tr>
  <?php } ?>
  <?php
    foreach ($wil2 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
    </tr>
    <?php } ?>
  <tr>
    <th colspan="2" style="text-align: left;"><b>Muatan Peminatan Kejuruan</b></th>
    <th></th> <th></th> <th></th> <th></th> <th></th><th></th><th></th> <th></th>
  </tr>
  <tr>
    <th colspan="2" style="text-align: left;"><b>C1. Dasar Bidang Keahlian</b></th>
    <th></th> <th></th> <th></th> <th></th> <th></th><th></th><th></th> <th></th>
  </tr>
  <?php
  $i = 1; 
  foreach ($bid1 as $v){ ?>
  <tr class="">
    <td><?php echo $i++ ?></td>
    <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
    <td><b>75</b></td>
    <td><?php echo $v['pengetahuan_akhir'] ?></td>
    <td> <?php if($v['pengetahuan_akhir'] < 50){
      echo "D";
    } elseif ($v['pengetahuan_akhir'] <= 74) {
      echo "C";
    } elseif ($v['pengetahuan_akhir'] <= 84) {
      echo "B";
    } elseif ($v['pengetahuan_akhir'] > 84) {
      echo "A";
    } ?>      
  </td>
  <td><?php if($v['pengetahuan_akhir'] < 50){
    echo $v['d_pengetahuan'];
  } elseif ($v['pengetahuan_akhir'] <= 74) {
    echo $v['c_pengetahuan'];
  } elseif ($v['pengetahuan_akhir'] <= 84) {
    echo $v['b_pengetahuan'];
  } elseif ($v['pengetahuan_akhir'] > 84) {
    echo $v['a_pengetahuan'];
  } ?> </td>
  <td><b>75</b></td>
  <td><?php echo $v['keterampilan_akhir'] ?></td>
  <td> <?php if($v['keterampilan_akhir'] < 50){
    echo "D";
  } elseif ($v['keterampilan_akhir'] <= 74) {
    echo "C";
  } elseif ($v['keterampilan_akhir'] <= 84) {
    echo "B";
  } elseif ($v['keterampilan_akhir'] > 84) {
    echo "A";
  } ?>      
</td>
<td><?php if($v['keterampilan_akhir'] < 50){
  echo $v['d_keterampilan'];
} elseif ($v['keterampilan_akhir'] <= 74) {
  echo $v['c_keterampilan'];
} elseif ($v['keterampilan_akhir'] <= 84) {
  echo $v['b_keterampilan'];
} elseif ($v['keterampilan_akhir'] > 84) {
  echo $v['a_keterampilan'];
} ?> </td>
</tr>
<?php } ?>
<?php
    foreach ($bid2 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>


<!-- page 2 -->
<div class="row break jarak">
  <div class="col-xs-12 table-responsive">
    <table border="1" width="100%" class="tabel">
      <thead>
        <tr>
          <th rowspan="2">No</th>
          <th rowspan="2">Mata Pelajaran</th>
          <th colspan="4">Pengetahuan</th>
          <th colspan="4">Keterampilan</th>
        </tr>
        <tr>
          <th style="font-size: 12px">KKM</th>
          <th style="font-size: 12px">Angka</th>
          <th style="font-size: 12px">Predikat</th>
          <th>Deskripsi</th>
          <th style="font-size: 12px">KKM</th>
          <th style="font-size: 12px">Angka</th>
          <th style="font-size: 12px">Predikat</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th colspan="2" style="text-align: left;"><b>C2. Dasar Program Keahlian</b></th>
          <th></th> <th></th> <th></th> <th></th> <th></th><th></th><th></th> <th></th>
        </tr>
        <?php
        $i = 1; 
        foreach ($prog1 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td><b>75</b></td>
          <td><?php echo $v['pengetahuan_akhir'] ?></td>
          <td> <?php if($v['pengetahuan_akhir'] < 50){
            echo "D";
          } elseif ($v['pengetahuan_akhir'] <= 74) {
            echo "C";
          } elseif ($v['pengetahuan_akhir'] <= 84) {
            echo "B";
          } elseif ($v['pengetahuan_akhir'] > 84) {
            echo "A";
          } ?>      
        </td>
        <td><?php if($v['pengetahuan_akhir'] < 50){
          echo $v['d_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] <= 74) {
          echo $v['c_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] <= 84) {
          echo $v['b_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] > 84) {
          echo $v['a_pengetahuan'];
        } ?> </td>
        <td><b>75</b></td>
        <td><?php echo $v['keterampilan_akhir'] ?></td>
        <td> <?php if($v['keterampilan_akhir'] < 50){
          echo "D";
        } elseif ($v['keterampilan_akhir'] <= 74) {
          echo "C";
        } elseif ($v['keterampilan_akhir'] <= 84) {
          echo "B";
        } elseif ($v['keterampilan_akhir'] > 84) {
          echo "A";
        } ?>      
      </td>
      <td><?php if($v['keterampilan_akhir'] < 50){
        echo $v['d_keterampilan'];
      } elseif ($v['keterampilan_akhir'] <= 74) {
        echo $v['c_keterampilan'];
      } elseif ($v['keterampilan_akhir'] <= 84) {
        echo $v['b_keterampilan'];
      } elseif ($v['keterampilan_akhir'] > 84) {
        echo $v['a_keterampilan'];
      } ?> </td>
    </tr>
    <?php } ?>
    <?php
    foreach ($prog2 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
    </tr>
    <?php } ?>
    <tr>
      <td>-</td><td>-</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

        <tr>
          <th colspan="2" style="text-align: left;"><b>C3. Kompetensi Keahlian</b></th>
          <th></th> <th></th> <th></th> <th></th> <th></th><th></th><th></th> <th></th>
        </tr>
    <?php
        $i = 1; 
        foreach ($komp1 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td><b>75</b></td>
          <td><?php echo $v['pengetahuan_akhir'] ?></td>
          <td> <?php if($v['pengetahuan_akhir'] < 50){
            echo "D";
          } elseif ($v['pengetahuan_akhir'] <= 74) {
            echo "C";
          } elseif ($v['pengetahuan_akhir'] <= 84) {
            echo "B";
          } elseif ($v['pengetahuan_akhir'] > 84) {
            echo "A";
          } ?>      
        </td>
        <td><?php if($v['pengetahuan_akhir'] < 50){
          echo $v['d_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] <= 74) {
          echo $v['c_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] <= 84) {
          echo $v['b_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] > 84) {
          echo $v['a_pengetahuan'];
        } ?> </td>
        <td><b>75</b></td>
        <td><?php echo $v['keterampilan_akhir'] ?></td>
        <td> <?php if($v['keterampilan_akhir'] < 50){
          echo "D";
        } elseif ($v['keterampilan_akhir'] <= 74) {
          echo "C";
        } elseif ($v['keterampilan_akhir'] <= 84) {
          echo "B";
        } elseif ($v['keterampilan_akhir'] > 84) {
          echo "A";
        } ?>      
      </td>
      <td><?php if($v['keterampilan_akhir'] < 50){
        echo $v['d_keterampilan'];
      } elseif ($v['keterampilan_akhir'] <= 74) {
        echo $v['c_keterampilan'];
      } elseif ($v['keterampilan_akhir'] <= 84) {
        echo $v['b_keterampilan'];
      } elseif ($v['keterampilan_akhir'] > 84) {
        echo $v['a_keterampilan'];
      } ?> </td>
    </tr>
    <?php } ?>

    <?php
    foreach ($komp2 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
    </tr>
    <?php } ?>

        <tr>
          <th colspan="2" style="text-align: left;"><b>Muatan Lokal</b></th>
          <th></th> <th></th> <th></th> <th></th> <th></th><th></th><th></th> <th></th>
        </tr>
    <?php
        $i = 1; 
        foreach ($lokal1 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td><b>75</b></td>
          <td><?php echo $v['pengetahuan_akhir'] ?></td>
          <td> <?php if($v['pengetahuan_akhir'] < 50){
            echo "D";
          } elseif ($v['pengetahuan_akhir'] <= 74) {
            echo "C";
          } elseif ($v['pengetahuan_akhir'] <= 84) {
            echo "B";
          } elseif ($v['pengetahuan_akhir'] > 84) {
            echo "A";
          } ?>      
        </td>
        <td><?php if($v['pengetahuan_akhir'] < 50){
          echo $v['d_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] <= 74) {
          echo $v['c_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] <= 84) {
          echo $v['b_pengetahuan'];
        } elseif ($v['pengetahuan_akhir'] > 84) {
          echo $v['a_pengetahuan'];
        } ?> </td>
        <td><b>75</b></td>
        <td><?php echo $v['keterampilan_akhir'] ?></td>
        <td> <?php if($v['keterampilan_akhir'] < 50){
          echo "D";
        } elseif ($v['keterampilan_akhir'] <= 74) {
          echo "C";
        } elseif ($v['keterampilan_akhir'] <= 84) {
          echo "B";
        } elseif ($v['keterampilan_akhir'] > 84) {
          echo "A";
        } ?>      
      </td>
      <td><?php if($v['keterampilan_akhir'] < 50){
        echo $v['d_keterampilan'];
      } elseif ($v['keterampilan_akhir'] <= 74) {
        echo $v['c_keterampilan'];
      } elseif ($v['keterampilan_akhir'] <= 84) {
        echo $v['b_keterampilan'];
      } elseif ($v['keterampilan_akhir'] > 84) {
        echo $v['a_keterampilan'];
      } ?> </td>
    </tr>
    <?php } ?>
    <?php
    foreach ($lokal2 as $v){ ?>
        <tr class="">
          <td><?php echo $i++ ?></td>
          <td style="text-align: left;"><?php echo $v['nama_mapel'] ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>


<!-- page 3 -->
<div class="row break jarak">
  <div class="col-md-12">
    <b>C. Praktik Kerja Lapangan</b>
  </div>
  <div class="col-xs-12 table-responsive">
    <table border="1" width="100%" class="tabel2" ">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th width="25%">Mitra DU/DI</th>
          <th width="30%">Lokasi</th>
          <th width="10%">Lamanya (bulan)</th>
          <th width="30%">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">1</td>
          <td><?php if($pkl != NULL){echo $pkl['mitra_pkl'];} else { echo "-";} ?></td>
          <td><?php if($pkl != NULL){echo $pkl['lokasi_pkl'];} else { echo "-";} ?></td>
          <td align="center"><?php if($pkl != NULL){echo $pkl['lama_pkl'];} else { echo "-";} ?></td>
          <td><?php if($pkl != NULL){echo $pkl['keterangan_pkl'];} else { echo "-";} ?></td>
        </tr>
        <tr>
          <td align="center">2</td>
          <td>0</td>
          <td>0</td>
          <td align="center">0</td>
          <td>0</td>
        </tr>
        <tr>
          <td align="center">3</td>
          <td>0</td>
          <td>0</td>
          <td align="center">0</td>
          <td>0</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="col-md-12">
    <p>&nbsp;</p>
    <b>D. Ekstrakulikuler</b>
  </div>
  <div class="col-xs-12 table-responsive">
    <table border="1" width="100%" class="tabel2" ">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th width="25%">Kegiatan Ekstrakulikuler</th>
          <th width="70%">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">1</td>
          <td><?php if($ekstra != NULL){echo $ekstra['nama_ekstra'];} else {echo "-";} ?></td>
          <td><?php if($ekstra != NULL){echo $ekstra['keterangan_ekstra'];} else {echo "-";} ?></td>
        </tr>
        <tr>
          <td align="center">2</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td align="center">3</td>
          <td>0</td>
          <td>0</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="col-md-12">
  <p>&nbsp;</p>
    <b>E. Prestasi</b>
  </div>
  <div class="col-xs-12 table-responsive">
    <table border="1" width="100%" class="tabel3" ">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th width="25%">Jenis Prestasi</th>
          <th width="70%">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">1</td>
          <td><?php if($prestasi != NULL){echo $prestasi['jenis_prestasi'];} else {echo "-";} ?></td>
          <td><?php if($prestasi != NULL){echo $prestasi['keterangan_prestasi'];} else {echo "-";} ?></td>
        </tr>
        <tr>
          <td align="center">2</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td align="center">3</td>
          <td>0</td>
          <td>0</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="col-md-12">
    <p>&nbsp;</p>
    <b>F. Ketidakhadiran</b>
  </div>
  <div class="col-xs-12 table-responsive">
    <table class="tabel2">
      <tr style="border-bottom: 1px solid black">
        <td>Sakit</td>
        <td>:</td>
        <td> <?php if($kehadiran !=NULL){echo $kehadiran['sakit']; echo "  hari";}else{echo "belum di isi";}?></td>
      </tr>
      <tr style="border-bottom: 1px solid black">
        <td>Izin</td>
        <td>:</td>
        <td> <?php if($kehadiran !=NULL){echo $kehadiran['izin']; echo "  hari";}else{echo "belum di isi";}?></td>
      </tr>
      <tr>
        <td>Tanpa Keterangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td> <?php if($kehadiran !=NULL){echo $kehadiran['tanpa_keterangan']; echo "  hari";}else{echo "belum di isi";}?></td>
      </tr>
    </table>
  </div>

  <div class="col-md-12">
    <p>&nbsp;</p>
    <b>G. Catatan Wali Kelas</b>
  </div>
  <div class="col-xs-12 table-responsive">
    <table class="tabel2" width="100%">
      <tr>
        <td height="70px"></td>
      </tr>
    </table>
  </div>

  <div class="col-md-12">
    <p>&nbsp;</p>
    <b>H. Tanggapan Orang Tua.Wali</b>
  </div>
  <div class="col-xs-12 table-responsive">
    <table class="tabel2" width="100%">
      <tr>
        <td height="70px"></td>
      </tr>
    </table>
  </div>
</div>

  <?php if(date("m") == 1 ){
      $bulan = "Januari";
    } elseif (date("m") == 2) {
      $bulan = "Februari";
    } elseif (date("m") == 3) {
      $bulan = "Maret";
    } elseif (date("m") == 4) {
      $bulan = "April";
    } elseif (date("m") == 5) {
      $bulan = "Mei";
    } elseif (date("m") == 6) {
      $bulan = "Juni";
    } elseif (date("m") == 7) {
      $bulan = "Juli";
    } elseif (date("m") == 8) {
      $bulan = "Agustus";
    } elseif (date("m") == 9) {
      $bulan = "September";
    } elseif (date("m") == 10) {
      $bulan = "Oktober";
    } elseif (date("m") == 11) {
      $bulan = "November";
    } elseif (date("m") == 12) {
      $bulan = "Desember";
    } ?>

    <div class="col-md-12 row jarak" style="margin-top: -50px;">
      <div class="col-md-6 pull-left">
        <p>&nbsp;</p>
        Mengetahui <br>
        Orang Tua/Wali <br><br><br><br>.................................
      </div>

      <div class="col-md-6 pull-right">
        <p>&nbsp;</p>
        Yogyakarta, &nbsp;&nbsp;&nbsp; <?php echo $bulan; echo " 20"; echo date("y"); ?><br>
        Wali Kelas, <br><br><br><br><b><?php echo $wali['nama_user'] ?></b>
      </div>
    </div>

    <div class="col-md-12" align="center">
    <p>&nbsp;</p>
    Mengetahui <br>
    Kepala Sekolah <br><br><br>
    <b><?php echo $sekolah['kepala_sekolah'] ?><br>
    NIY. 117702037</b>      
  </div>
</body>
</html>