<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perusahaan extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('perusahaan')->result();
	}
	public function cari($id_perusahaan)
	{
		$this->db->where('id_perusahaan', $id_perusahaan);
		$query = $this->db->get('perusahaan');
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function tambah($data)
	{
		return $this->db->insert('perusahaan', $data);
	}

	public function edit($id_perusahaan)
	{
		$this->db->where('id_perusahaan', $id_perusahaan);
		return $this->db->get('perusahaan')->row();
	}

	public function proses_edit($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('perusahaan', $data);
	}

	public function hapus($id_perusahaan)
	{
		$this->db->where('id_perusahaan', $id_perusahaan);
		return $this->db->delete('perusahaan');
	}
}