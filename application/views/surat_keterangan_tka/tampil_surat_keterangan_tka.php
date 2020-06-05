<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>SURAT PERUBAHAN LAPORAN KEBERADAAN TENAGA KERJA ASING<b></h4>
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
                    <a href="<?php echo base_url('surat_keterangan_tka/tambah'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Surat</a>
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
                            <th style="text-align:center">Aksi</th>
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

                                <td style="text-align:center">
                                    <a href="<?php echo base_url('surat_keterangan_tka/edit/' . $surat_keterangan_tka->id_s_tka); ?>" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('surat_keterangan_tka/hapus/' . $surat_keterangan_tka->id_s_tka); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Yakin Akan Menghapus Data?');">
                                        <i class="fa fa-trash-o"></i> Hapus</a>
                                    <a target="blank" href="<?php echo base_url('surat_keterangan_tka/cetak/' . $surat_keterangan_tka->id_s_tka); ?>" class="btn btn-info btn-xs">
                                        <i class="fa fa-print"></i> Cetak</a>

                            </tr>
                            </td>

                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>