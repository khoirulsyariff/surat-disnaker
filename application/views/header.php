<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicona.png'); ?>">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="<?php echo base_url('Dashboard'); ?>" class="navbar-brand"><b>SIMPTKA</b></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Welcome <?php echo $this->session->userdata('nama_pengguna'); ?>
                                </a>

                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i>
                                    <span>Dashboard</span></a>
                            <li><a href="<?php echo base_url('perusahaan/tampil'); ?>">
                                    <i class="fa fa-home"></i>
                                    <span>Data Perusahaan</span></a></li>
                            <li><a href="<?php echo base_url('tka/tampil'); ?>">
                                    <i class="fa fa-users"></i>
                                    <span>Data TKA</span></a></li>
                            <li><a href="<?php echo base_url('surat_keterangan_tka/tampil'); ?>">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <span>Surat Keterangan TKA</span></a></li>
                            <li><a href="<?php echo base_url('laporan/tampil'); ?>">
                                    <i class="fa fa-file"></i>
                                    <span>Laporan</span></a></li>
                            <li><a href="<?php echo base_url('Logout'); ?>"><i class="fa fa-power-off"><span> Logout</span></a></i>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- /.content-wrapper -->