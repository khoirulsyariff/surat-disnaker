<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}

		$this->load->model(['m_perusahaan', 'm_kode']);
	}

	public function tampil()
	{
		$data['title'] = "Data perusahaan - Dinas Tenaga Kerja";
		$data['perusahaan'] = $this->m_perusahaan->tampil();

		$mutasi = $this->load->view('header', $data);
		$this->load->view('perusahaan/tampil_perusahaan');
		$this->load->view('footer');
	}
	public function tambah()
	{
		$data['title'] = "Tambah perusahaan - Dinas Tenaga Kerja";
		$data['id_perusahaan'] = $this->m_kode->id_perusahaan();

		$this->load->view('header', $data);
		$this->load->view('perusahaan/tambah_perusahaan');
		$this->load->view('footer');
	}

	public function proses_tambah()
	{
		$id_perusahaan = $this->input->post('id_perusahaan');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$alamat_perusahaan = $this->input->post('alamat_perusahaan');
		$nomor_telepon = $this->input->post('nomor_telepon');

		$data = array(
			'id_perusahaan' => $id_perusahaan,
			'nama_perusahaan' => ($nama_perusahaan),
			'alamat_perusahaan' => ($alamat_perusahaan),
			'nomor_telepon' => $nomor_telepon,
		);
		$this->m_perusahaan->tambah($data);

		$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
		redirect(base_url('perusahaan/tampil'));
	}

	public function edit($id_perusahaan)
	{
		$data['title'] = "Edit perusahaan - Dinas Tenaga Kerja";
		$data['perusahaan'] = $this->m_perusahaan->edit($id_perusahaan);

		$this->load->view('header', $data);
		$this->load->view('perusahaan/edit_perusahaan');
		$this->load->view('footer');
	}

	public function proses_edit()
	{
		$id_perusahaan = $this->input->post('id_perusahaan');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$alamat_perusahaan = $this->input->post('alamat_perusahaan');
		$nomor_telepon = $this->input->post('nomor_telepon');

		$data = array(
			'id_perusahaan' => $id_perusahaan,
			'nama_perusahaan' => ucwords($nama_perusahaan),
			'alamat_perusahaan' => ucwords($alamat_perusahaan),
			'nomor_telepon' => $nomor_telepon,
		);
		$where = array(
			'id_perusahaan' => $id_perusahaan,
		);
		$this->m_perusahaan->proses_edit($where, $data);

		$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
		redirect(base_url('perusahaan/tampil/' . $id_perusahaan));
	}

	public function hapus($id_perusahaan)
	{
		$this->m_perusahaan->hapus($id_perusahaan);
		$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
		redirect(base_url('perusahaan/tampil'));
	}
}
