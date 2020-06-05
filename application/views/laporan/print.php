<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <img src="<?php echo base_url('assets/images/kop-disnaker.png'); ?>" width="100%" height="20%"><br>
  <center>
    <font size="2.5"><b>DATA PERUBAHAN ALAMAT TINGGAL <br> <u>SURAT KETERANGAN LAPORAN KEBERADAAN TENAGA KERJA ASING</u> </b>
  </center> <br><br>
  <table border="1">
    <tr>
      <th bgcolor="#00ff80" style="text-align:center">No</th>
      <th bgcolor="#00ff80" style="text-align:center">ID TKA</th>
      <th bgcolor="#00ff80" style="text-align:center">Nama TKA</th>
      <th bgcolor="#00ff80" style="text-align:center">Nama Perusahaan</th>
      <th bgcolor="#00ff80" style="text-align:center">Alamat Perubahan</th>
      <th bgcolor="#00ff80" style="text-align:center">Tanggal Perubahan</th>
    </tr>

    <?php $no = 1;
    foreach ($surat as $cetak) : ?>
      <tr>
        <td style="text-align:center"><?php echo $no++ ?></td>
        <td style="text-align:center"><?php echo $cetak->id_s_tka ?></td>
        <td style="text-align:center"><?php echo $cetak->nama_tka ?></td>
        <td style="text-align:center"><?php echo $cetak->nama_perusahaan ?></td>
        <td style="text-align:center"><?php echo $cetak->alamat_perubahan ?></td>
        <td style="text-align:center"><?php echo date_indo($cetak->tanggal_surat); ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>