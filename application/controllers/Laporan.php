<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('login') == FALSE) {
      redirect(base_url("login"));
    }
    $this->load->model(['m_surat_keterangan_tka', 'm_perusahaan', 'm_tka', 'm_kode']);
  }
  public function tampil()
  {
    $data['title'] = "Surat Keterangan Tenaga Kerja Asing - Dinas Tenaga Kerja";
    $data['surat_keterangan_tka'] = $this->m_surat_keterangan_tka->tampil();

    $this->load->view('header', $data);
    $this->load->view('laporan/data');
    $this->load->view('footer');
  }
  public function print()
  {
    $data['title'] = "PRINT | Surat Keterangan Tenaga Kerja Asing - Dinas Tenaga Kerja";
    $data['surat'] = $this->m_surat_keterangan_tka->tampil('surat_keterangan_tka');
    $this->load->view('laporan/print', $data);
  }
}
