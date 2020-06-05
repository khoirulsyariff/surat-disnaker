<style type="text/css">
  @media print and (width: 21cm) and (height: 33cm) {
    @page {
      margin: 1cm;
    }
  }

  .tabelku {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 2px;
  }
</style>
<style type="text/css" media="print">
  @page {
    size: portrait;
  }
</style>
<img src="<?php echo base_url('assets/images/kop-disnaker.png'); ?>" width="100%" height="20%">
<br /><br />

<?php foreach ($surat as $surat) : ?>
  <center>
    <font size="2.5"><b>SURAT KETERANGAN KEPALA DINAS TENAGA KERJA DAN TRANSMIGRASI KARAWANG</b></font><br />Nomor:
    569 / <?php echo $surat['id_tka']; ?> / PPTK
  </center>
  <br />
  <center>
    <font size="2"><b>TENTANG <br> PERUBAHAN ALAMAT TINGGAL <br> SURAT KETERANGAN LAPORAN KEBERADAAN TENAGA KERJA ASING <br> A.N <?php echo $surat['nama_tka']; ?></b>

    </font>
  </center>
  <br>
  <center>
    <font size="2"><b>KEPALA DINAS TENAGA KERJA DAN TRANSMIGRASI KARAWANG</b></font>
  </center>
  <br>

  <table width="100%">
    <tr>
      <td>Menimbang </td>
      <td width="5%"></td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td width="15%"></td>
      <td width="5%">a.</td>
      <td width="80%">
        <p align="justivy">Bahwa memohon untuk perubagan alamat tinggal pada Laporan Keberadaan Tenaga Kerja Asing
          a.n <?php echo $surat['nama_tka']; ?> . Semula tertulis <?php echo $surat['alamat']; ?> ,
          Menjadi : <?php echo $surat['alamat_perubahan']; ?>
        </p>
      </td>
    </tr>

    </tr>
    <tr>
      <td width="15%"></td>
      <td width="5%">b.</td>
      <td width="80%">
        <p align="justivy">Bahwa untuk itu perlu ditetapkan dengan Surat Keterangan Kepala Dinas Tenaga Kerja dan Transmigrasi Karawang.</p>
      </td>
    </tr>
  </table> <br>

  <table width="100%">
    <tr>
      <td>Mengingat</td>
      <td width="5%">
      <td></td>
      <td>:</td>
      <td></td>
      <td>
        <p align="justivy"> Surat Keterangan Kepala Dinas Tenaga Kerja dan Transmigrasi Karawang tentang Surat Keterangan Laporan Keberadaan Tenaga Kerja Asing
          Nomor : 569 / <?php echo $surat['id_tka']; ?> / PPTK
          Tanggal <?php echo date('d F Y', strtotime($surat['tanggal'])); ?>
        </p>
      </td>
    </tr>
  </table><br>

  <table width="100%">
    <tr>
      <td>Memperhatikan</td>
      <td width="">
      <td>:</td>
      <td></td>
      <td>
        <p align="justivy">
          Surat dari <?php echo $surat['nama_perusahaan']; ?>
          Nomor : - Tanggal <?php echo date('d F Y', strtotime($surat['tanggal_surat'])); ?> .
          Perihal permohonan perubahan alamat tinggal Surat Keterangan Laporan Keberadaan Tenaga Kerja Asing
        </p>
      </td>
    </tr>
  </table><br> <br>


  <table>
    <center> <b>M E M U T U S K A N</b> </center>
  </table>



  <table width="100%">
    <tr>
      <td>Menetapkan :</td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td>PERTAMA</td>
      <td width="3%"></td>
      <td>:</td>
      <td></td>
      <td>
        <p align="justivy">Perubahan alamat tinggal pada Laporan Keberadaan Tenaga Asing A.N <?php echo $surat['nama_tka']; ?>
          <br> <u>Semua Tertulis :</u> <br><?php echo $surat['alamat']; ?> <br>
          <u>Menjadi :</u> <br><?php echo $surat['alamat_perubahan']; ?></p>
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td>KEDUA</td>
      <td width="5%"></td>
      <td>:</td>
      <td></td>
      <td>
        <p align="justivy">
          Keterangan sebagaimana tersebut pada AMAR PERTAMA merupakan satu kesatuan serta
          tidak terpisahkan dari Surat Keterangan Kepala Dinas Tenaga Kerja dan Transmigrasi
          Karawang Nomor : 569 / <?php echo $surat['id_tka']; ?> / PPTK Tanggal <?php echo date('d F Y', strtotime($surat['tanggal'])); ?>
        </p>
      </td>
    </tr>
  </table>



  <table width="100%">
    <tr>
      <td>KETIGA</td>
      <td width="4%"></td>
      <td>:</td>
      <td></td>
      <td>
        <p align="justivy"> Ketetapan ini berlaku sejak tanggal ditatapkan, dengan ketentuan apabila dikemudian hari
          terdapat kekeliruan dalam Surat Keterangan ini, akan dibetulkan sebagaimana mestinya.</p>
      </td>
    </tr>
  </table> <br /><br>


  <table width="100%">
    <tr>
      <td width="60%"></td>
      <td width="50%">
        Ditetapkan di : Karawang <br>Pada Tanggal : <?php echo date('d F Y', strtotime($surat['tanggal'])); ?>
      </td>
    </tr>
  </table><br>

  <table width="100%">
    <tr>
      <td width="50%"></td>
      <td>
        <center>KEPALA DINAS TENAGA KERJA DAN <br> TRANSMIGRASI KABUPATEN KARAWANG</center>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <center><b><u>H.A.SUROTO,SE</u></b> <br>
          Pembina Utama Muda <br>
          NIP. 19630611 199003 1 004</center>
      </td>
    </tr>
  </table>
  <br><br>
  <table width="100%">
    <tr>
      <td width="15%">Tebusan :</td>
    </tr>
    <tr>
      <td>1. Mentri Tenaga Kerja dan Transmigrasi RI <br> 2. Bupati Karawang (sebagai laporan)</td>
    </tr>
  </table>

<?php endforeach; ?>
<script>
  window.print();
</script>