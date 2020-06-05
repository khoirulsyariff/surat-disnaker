<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>EDIT DATA TENAGA KERJA ASING</b></h4>
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
                                    <form action="<?php echo base_url('tka/proses_edit'); ?>" method="post">
                                        <div class="card-body">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Nama Lengkap (Tenaga Kerja Asing)</label>
                                                    <input type="hidden" name="id_tka" id="" value="<?php echo $tka->id_tka; ?>" class="form-control">
                                                    <input type="text" name="nama_tka" value="<?php echo $tka->nama_tka; ?>" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea name="alamat" class="form-control" rows="2"><?php echo $tka->alamat; ?> </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Perusahaan</label>
                                                    <select name="nama_perusahaan" id="" class="form-control">
                                                        <option value="<?php echo $tka->nama_perusahaan ?>"><?php echo $tka->nama_perusahaan ?></option>
                                                        <?php foreach ($perusahaan as $perusahaan) : ?>
                                                            <option value="<?php echo $perusahaan->nama_perusahaan; ?>">
                                                                <?php echo $perusahaan->nama_perusahaan; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Surat</label>
                                                    <input type="date" name="tanggal" value="<?php echo $tka->tanggal; ?>" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-success">Simpan</button>
                                                <a href="<?php echo base_url('tka/tampil'); ?>" class="btn btn-danger">Batal</a>
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