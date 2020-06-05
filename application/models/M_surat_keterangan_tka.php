<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_surat_keterangan_tka extends CI_Model
{
	public function tka()
	{
		return $this->db->query("SELECT * FROM tka")->result();
	}
	public function perusahaan()
	{
		return $this->db->query("SELECT * FROM perusahaan")->result();
	}

	public function tampil()
	{
		$this->db->from('surat_keterangan_tka');
		$this->db->join('tka', 'surat_keterangan_tka.id_tka = tka.id_tka');
		$this->db->join('perusahaan', 'surat_keterangan_tka.id_perusahaan = perusahaan.id_perusahaan');
		return $this->db->get()->result();
		return $this->db->get();
	}
	public function cari($id_s_tka)
	{
		$this->db->where('id_s_tka', $id_s_tka);
		$query = $this->db->get('surat_keterangan_tka');
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}
	public function tambah($data)
	{
		return $this->db->insert('surat_keterangan_tka', $data);
	}

	public function edit($id_s_tka)
	{
		$this->db->where('id_s_tka', $id_s_tka);
		return $this->db->get('surat_keterangan_tka')->row();
	}

	public function proses_edit($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('surat_keterangan_tka', $data);
	}

	public function cetak_surat($id_s_tka)
	{
		$this->db->from('surat_keterangan_tka');
		$this->db->where('id_s_tka', $id_s_tka);
		$this->db->join('tka', 'tka.id_tka=surat_keterangan_tka.id_tka');
		$this->db->join('perusahaan', 'surat_keterangan_tka.id_perusahaan = perusahaan.id_perusahaan');
		return $this->db->get()->result_array();
	}

	public function hapus($id_s_tka)
	{
		$this->db->where('id_s_tka', $id_s_tka);
		return $this->db->delete('surat_keterangan_tka');
	}
}
