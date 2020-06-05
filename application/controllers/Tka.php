<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tka extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
		$this->load->model(['m_tka', 'm_perusahaan', 'm_kode']);
	}

	public function tampil()
	{
		$data['title'] = "Data Tenaga Kerja Asing - Dinas Tenaga Kerja";
		$data['tka'] = $this->m_tka->tampil();

		$mutasi = $this->load->view('header', $data);
		$this->load->view('tka/tampil_tka');
		$this->load->view('footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Tenaga Kerja Asing - Dinas Tenaga Kerja";
		$data['perusahaan'] = $this->m_perusahaan->tampil();
		$data['tka'] = $this->m_tka->tampil();

		$this->load->view('header', $data);
		$this->load->view('tka/tambah_tka');
		$this->load->view('footer');
	}

	public function proses_tambah()
	{
		$id_tka = $this->input->post('id_tka');
		$nama_tka = $this->input->post('nama_tka');
		$alamat = $this->input->post('alamat');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_tka' => $id_tka,
			'nama_tka' => strtoupper($nama_tka),
			'alamat' => $alamat,
			'nama_perusahaan' => strtoupper($nama_perusahaan),
			'tanggal' => $tanggal
		);
		$this->m_tka->tambah($data);

		$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
		redirect(base_url('tka/tampil'));
	}

	public function edit($id_tka)
	{
		$data['title'] = "Edit Tenaga Kerja Asing - Dinas Tenaga Kerja";
		$data['tka'] = $this->m_tka->edit($id_tka);

		$this->load->view('header', $data);
		$this->load->view('tka/edit_tka');
		$this->load->view('footer');
	}

	public function proses_edit()
	{
		$id_tka = $this->input->post('id_tka');
		$nama_tka = $this->input->post('nama_tka');
		$alamat = $this->input->post('alamat');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_tka' => $id_tka,
			'nama_tka' => strtoupper($nama_tka),
			'alamat' => $alamat,
			'nama_perusahaan' => strtoupper($nama_perusahaan),
			'tanggal' => $tanggal
		);
		$where = array(
			'id_tka' => $id_tka,
		);
		$this->m_tka->proses_edit($where, $data);
		$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
		redirect(base_url('tka/tampil'));
	}

	public function hapus($id_tka)
	{
		$this->m_tka->hapus($id_tka);
		$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
		redirect(base_url('tka/tampil'));
	}
}
