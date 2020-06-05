<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>SELAMAT DATANG DI SISTEM INFORMASI MANAJEMEN PELAYANAN TENAGA KERJA ASING <br>DINAS
                        TENAGA KERJA DAN TRANSMIGRASI KABUPATEN KARAWANG</b></h4>
                <hr>
            </div>

            <div style="text-align: center;"> <img src="<?php echo base_url('assets/images/logo.png'); ?>" width="200" style="margin-right:50px"> </div>
            <br>
            <br>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="text-align:center"> <b> DASHBOARD </b></h3>
                            <hr>
                        </div>
                    </div>
                    <div class="container ml-5">
                        <div class="row">
                            <!-- Dashboard Pemduduk -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-aqua">
                                    <span class="info-box-icon"> <i class="fa fa-users"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tenaga Kerja Asing</span> <br>
                                        <span class="info-box-number"><?= $this->db->count_all_results('tka'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Kelahiran -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="fa fa-home"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text"> Perusahaan </span> <br>
                                        <span class="info-box-number"><?= $this->db->count_all_results('perusahaan'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Kematian -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-yellow">
                                    <span class="info-box-icon"><i class="fa fa-book"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Surat Perubahan <br> Tenaga Kerja Asing</span>
                                        <span class="info-box-number"><?= $this->db->count_all_results(''); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            </center>
        </div>
    </section>
</div>