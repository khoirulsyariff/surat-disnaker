<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">


                <h4 style="text-align:center"><b>DATA PERUSAHAAN</b></h4>
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
                    <a href="<?php echo base_url('perusahaan/tambah'); ?>" class="btn btn-success">Tambah Data
                        Perusahaan</a>
                    <a href="<?php echo base_url('#'); ?>" target="_blank">
                    </a>
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Id Perusahaan</th>
                            <th style="text-align:center">Nama Perusahaan</th>
                            <th style="text-align:center">Alamat Perusahaan</th>
                            <th style="text-align:center">Nomor Telepon</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($perusahaan as $perusahaan) {
                        ?>
                            <tr>
                                <td style="text-align:center"><?php echo $no; ?></td>
                                <td><?php echo $perusahaan->id_perusahaan; ?></td>
                                <td><?php echo $perusahaan->nama_perusahaan; ?></td>
                                <td><?php echo $perusahaan->alamat_perusahaan; ?></td>
                                <td><?php echo $perusahaan->nomor_telepon; ?></td>
                                <td style="text-align:center">
                                    <a href="<?php echo base_url('perusahaan/edit/' . $perusahaan->id_perusahaan); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('perusahaan/hapus/' . $perusahaan->id_perusahaan); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Yakin Akan Menghapus Data?');"><i class="fa fa-trash-o"></i> Hapus</a </tr> </td> <?php
                                                                                                                                                                                                                                                                    $no++;
                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                    ?> </tbody> </table> </div> </section> </div>