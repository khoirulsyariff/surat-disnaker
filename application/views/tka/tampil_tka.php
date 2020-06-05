<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>DATA TENAGA KERJA ASING</b></h4>
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
                    <a href="<?php echo base_url('tka/tambah'); ?>" class="btn btn-success">Tambah Data
                        TKA</a>
                    <a href="<?php echo base_url('#'); ?>" target="_blank">
                    </a>
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Id TKA</th>
                            <th style="text-align:center">Nama TKA</th>
                            <th style="text-align:center">Nama Perusahaan</th>
                            <th style="text-align:center">Alamat</th>
                            <th style="text-align:center">Tanggal Surat</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tka as $tka) {
                        ?>
                            <tr>
                                <td style="text-align:center"><?php echo $no; ?></td>
                                <td><?php echo '569 / '  .  $tka->id_tka  .  ' / PPTK';  ?></td>
                                <td><?php echo $tka->nama_tka; ?></td>
                                <td><?php echo $tka->nama_perusahaan; ?></td>
                                <td><?php echo $tka->alamat; ?></td>
                                <td>
                                    <?php
                                    $tanggal = date_create($tka->tanggal);
                                    echo date_format($tanggal, 'd') . " " . bulan(date_format($tanggal, 'm')) . " " . date_format($tanggal, 'Y');
                                    ?>
                                </td>
                                <td style="text-align:center">
                                    <a href="<?php echo base_url('tka/edit/' . $tka->id_tka); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('tka/hapus/' . $tka->id_tka); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Yakin Akan Menghapus Data?');"><i class="fa fa-trash-o"></i> Hapus</a>
                                </td>
                            </tr> <?php $no++;
                                } ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>