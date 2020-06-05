<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tka extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('tka')->result();
	}
	public function cari($id_tka, $nama_tka)
	{
		$this->db->where('id_tka', $id_tka);
		$this->db->where('nama_tka', $nama_tka);
		$query = $this->db->get('tka');
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function tambah($data)
	{
		return $this->db->insert('tka', $data);
	}

	public function edit($id_tka)
	{
		$this->db->where('id_tka', $id_tka);
		return $this->db->get('tka')->row();
	}

	public function proses_edit($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('tka', $data);
	}

	public function hapus($id_tka)
	{
		$this->db->where('id_tka', $id_tka);
		return $this->db->delete('tka');
	}
}