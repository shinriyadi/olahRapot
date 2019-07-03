<html>
<title></title>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <h4><?php echo "Data Nilai Pengetahuan Kelas ".$kelas['tingkat']; echo " ".$kelas['kode_jurusan']; ?>
  </h4>
  <input type="button" onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel">

  <table id="testTable" summary="Rekap Data Nilai Pengetahuan Kelas <?php echo $kelas['tingkat']; echo " ".$kelas['kode_jurusan'] ?>" rules="groups" frame="hsides" border="2">

    <caption>Rekap Data Nilai Pengetahuan Kelas <?php echo $kelas['tingkat']; echo " ".$kelas['kode_jurusan'] ?></caption>
    <colgroup align="center"></colgroup><colgroup align="left"></colgroup><colgroup span="2" align="center"></colgroup>

    <thead>
      <th></th>
      <th>Nama Siswa</th>
      <th>Mata Pelajaran</th>
      <th>Nilai</th>
    </thead>
    <tbody> 
      <?php 
      $i = 1;
      foreach ($nilai as $v) { ?>
      <tr>
        <td></td>
        <td><?php echo $v['nama']; ?></td>
        <td><?php echo $v['mapel']; ?></td>
        <td><?php echo $v['nilai'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <script type="text/javascript">
    var seen = {};
    $('td:nth-child(2)').each(function() {
    // Encode column and content information.
    var index =  $(this).index();
    var txt = $(this).text();
    if (seen[index] === txt) {
      $(this).text('');
    }
    else {
      seen[index] = txt;
    }
  });

    var tableToExcel = (function() {
      var uri = 'data:application/vnd.ms-excel;base64,'
      , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
      , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
      , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
      return function(table, name) {
        if (!table.nodeType) table = document.getElementById(table)
          var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
        window.location.href = uri + base64(format(template, ctx))
      }
    })();
  </script>
</body>
</html>

