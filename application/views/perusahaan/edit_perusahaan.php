<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>TAMBAH DATA PERUSAHAAN</b></h4>
                <hr>
            </div>

            <div class="box-body">
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

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <form action="<?php echo base_url('perusahaan/proses_edit'); ?>" method="post">
                                        <div class="form-group">
                                            <label>Id Perusahaan</label>
                                            <input type="text" name="id_perusahaan" value="<?php echo $perusahaan->id_perusahaan; ?>" class="form-control" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input type="text" name="nama" value="<?php echo $perusahaan->nama_perusahaan; ?>" class="form-control" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="text" name="nomor_telepon" value="<?php echo $perusahaan->nomor_telepon; ?>" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Perusaaan</label>
                                            <textarea name="alamat_perusahaan" class="form-control" rows="2"><?php echo $perusahaan->alamat_perusahaan; ?> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">Simpan</button>
                                            <a href="<?php echo base_url('perusahaan/tampil'); ?>" class="btn btn-danger">Batal</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>