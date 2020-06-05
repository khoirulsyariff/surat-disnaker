<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_kode extends CI_Model
{

  public function id_perusahaan()
  {
    $this->db->select('RIGHT(perusahaan.id_perusahaan,2) as kode', FALSE);
    $this->db->order_by('id_perusahaan', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('perusahaan'); //cek dulu apakah ada sudah ada kode di tabel.
    if ($query->num_rows() != 0) {
      //jika kode ternyata sudah ada.
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      //jika kode belum ada
      $kode = 1;
    }
    $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0
    $kodejadi = "PT" . $kodemax; // hasilnya PS001 dst.
    return $kodejadi;
  }
  public function id_tka()
  {
    $this->db->select('RIGHT(tka.id_tka,2) as kode', FALSE);
    $this->db->order_by('id_tka', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('tka'); //cek dulu apakah ada sudah ada kode di tabel.
    if ($query->num_rows() != 0) {
      //jika kode ternyata sudah ada.
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      //jika kode belum ada
      $kode = 1;
    }
    $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0
    $kodejadi = "TKA" . $kodemax; // hasilnya PS001 dst.
    return $kodejadi;
  }
  public function id_s_tka()
  {
    $this->db->select('RIGHT(surat_keterangan_tka.id_s_tka,2) as kode', FALSE);
    $this->db->order_by('id_s_tka', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('surat_keterangan_tka'); //cek dulu apakah ada sudah ada kode di tabel.
    if ($query->num_rows() != 0) {
      //jika kode ternyata sudah ada.
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      //jika kode belum ada
      $kode = 1;
    }
    $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 3 menunjukkan jumlah digit angka 0
    $kodejadi = "STKA" . $kodemax; // hasilnya PS001 dst.
    return $kodejadi;
  }
}
