<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>SURAT PERUBAHAN LAPORAN KEBERADAAN TENAGA KERJA ASING</b></h4>
                <hr>
            </div>
            <div class="box-body">
                <?php
                if ($this->session->flashdata('sukses')) { ?>
                    <div class="callout callout-success">
                        <p style="font-size:14px">
                            <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
                        </p>
                    </div>
                <?php } ?>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <form action="<?php echo base_url('surat_keterangan_tka/proses_edit'); ?>" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>ID Perubahan TKA</label>
                                                <input type="text" name="id_s_tka" id="id_s_tka" class="form-control" value="<?php echo $sktka->id_s_tka; ?>" readonly />
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Tenaga Kerja Asing</label>
                                                <select style="width :100%" name="id_tka" class="form-control" required>
                                                    <option value="<?php echo $sktka->id_tka ?>"><?php echo $sktka->id_tka ?>
                                                        <?php foreach ($nama as $tka_id) : ?>
                                                    <option value="<?php echo $tka_id->nama_tka; ?>">
                                                        <?php echo $tka_id->nama_tka; ?>
                                                    </option>
                                                <?php endforeach;  ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Perusahaan</label>
                                                <select name="id_perusahaan" class="form-control">
                                                    <option value="<?php echo $sktka->id_perusahaan ?>"><?php echo $sktka->id_perusahaan ?>
                                                    </option> <?php foreach ($perusahaan as $perusahaan) : ?>
                                                        <option value="<?php echo $perusahaan->nama_perusahaan; ?>">
                                                            <?php echo $perusahaan->nama_perusahaan; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat Perubahan</label>
                                                <textarea name="alamat_perubahan" class="form-control" rows="2"><?php echo $sktka->alamat_perubahan; ?> </textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="tambah_surat_keterangan_tka" class="btn btn-success" value="Simpan">
                                                <a href="<?php echo base_url('surat_keterangan_tka/tampil'); ?>" class="btn btn-danger">Batal</a>
                                            </div>
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