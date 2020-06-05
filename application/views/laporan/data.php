<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">
        <h4 style="text-align:center"><b>DATA SURAT PERUBAHAN LAPORAN KEBERADAAN TENAGA KERJA ASING<b></h4>
        <hr>
      </div>
      <div class="box-body table-responsive">
        <?php
        if ($this->session->flashdata('sukses')) {
        ?>
          <div class="callout callout-success">
            <p style="font-size:14px">
              <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
            </p>
          </div>
        <?php
        }
        ?>

        <p>
          <a href="<?php echo base_url('laporan/print'); ?>" class="btn btn-warning" target="_blank">
            <i class="fa fa-print"></i> Cetak Semua Data </a>
        </p>
        <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr class="active">
              <th style="text-align:center">No</th>
              <th style="text-align:center">ID TKA</th>
              <th style="text-align:center">Nama TKA</th>
              <th style="text-align:center">Nama Perusahaan</th>
              <th style="text-align:center">Alamat Perubahan</th>
              <th style="text-align:center">Tanggal Perubahan</th>
            </tr>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($surat_keterangan_tka as $surat_keterangan_tka) { ?>
              <tr>
                <td style="text-align:center"><?php echo $no; ?></td>
                <td><?php echo $surat_keterangan_tka->id_s_tka; ?></td>
                <td><?php echo $surat_keterangan_tka->nama_tka; ?></td>
                <td><?php echo $surat_keterangan_tka->nama_perusahaan; ?></td>
                <td><?php echo $surat_keterangan_tka->alamat_perubahan; ?></td>
                <td><?php echo date_indo($surat_keterangan_tka->tanggal_surat); ?></td>

              </tr>

            <?php
              $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
  </section>
</div>