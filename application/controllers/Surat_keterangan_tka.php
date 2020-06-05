<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keterangan_tka extends CI_Controller
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
		$this->load->view('surat_keterangan_tka/tampil_surat_keterangan_tka');
		$this->load->view('footer');
	}
	public function tambah()
	{
		$data['title'] = "Surat Keterangan Tenaga Kerja Asing - Dinas Tenaga Kerja";
		$data['id_s_tka'] = $this->m_kode->id_s_tka();
		$data['nama'] = $this->m_tka->tampil();
		$data['perusahaan'] = $this->m_perusahaan->tampil();
		$data['surat_keterangan_tka'] = $this->m_surat_keterangan_tka->perusahaan();
		$data['surat_keterangan_tka'] = $this->m_surat_keterangan_tka->tka();
		$data['surat_keterangan_tka'] = $this->m_surat_keterangan_tka->tampil();


		$this->load->view('header', $data);
		$this->load->view('surat_keterangan_tka/tambah_surat_keterangan_tka', $data);
		$this->load->view('footer');
	}
	public function proses_tambah()
	{
		$id_s_tka = $this->input->post('id_s_tka');
		$id_tka = $this->input->post('id_tka');
		$id_perusahaan = $this->input->post('id_perusahaan');
		$alamat_perubahan = $this->input->post('alamat_perubahan');
		$tanggal_surat = $this->input->post('tanggal_surat');

		$data = array(
			'id_s_tka' => $this->input->post('id_s_tka'),
			'id_tka' => $this->input->post('id_tka'),
			'id_perusahaan' => $this->input->post('id_perusahaan'),
			'alamat_perubahan' => $this->input->post('alamat_perubahan'),
			'tanggal_surat' => date('Y-m-d')

		);
		$this->m_surat_keterangan_tka->tambah($data);

		$this->session->set_flashdata('sukses', 'Databerhasil ditambahkan.');
		redirect(base_url('surat_keterangan_tka/tampil '));
	}


	public function edit($id_s_tka)
	{
		$data['title'] = "Surat Keterangan Tenaga Kerja Asing - Dinas Tenaga Kerja";
		$data['sktka'] = $this->m_surat_keterangan_tka->edit($id_s_tka);
		$data['tka'] = $this->m_tka->tampil();
		$data['perusahaan'] = $this->m_perusahaan->tampil();


		$this->load->view('header');
		$this->load->view('surat_keterangan_tka/edit_surat_keterangan_tka', $data);
		$this->load->view('footer');
	}
	public function proses_edit()
	{
		$id_s_tka = $this->input->post('id_s_tka');
		$id_tka = $this->input->post('id_tka');
		$id_perusahaan = $this->input->post('id_perusahaan');
		$alamat_perubahan = $this->input->post('alamat_perubahan');
		$tanggal_surat = $this->input->post('tanggal_surat');

		$data = array(
			'id_s_tka' => $this->input->post('id_s_tka'),
			'id_tka' => $this->input->post('id_tka'),
			'id_perusahaan' => $this->input->post('id_perusahaan'),
			'alamat_perubahan' => $this->input->post('alamat_perubahan'),
			'tanggal_surat' => date('Y-m-d')
		);
		$where = array(
			'id_s_tka' => $this->input->post('id_s_tka'),

		);
		$this->m_surat_keterangan_tka->proses_edit($where, $data);
		$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
		redirect(base_url('surat_keterangan_tka/tampil'));
	}
	public function hapus($id_s_tka)
	{
		$this->m_surat_keterangan_tka->hapus($id_s_tka);
		$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
		redirect(base_url('surat_keterangan_tka/tampil'));
	}
	public function cetak()
	{
		$data['surat'] = $this->m_surat_keterangan_tka->cetak_surat($this->uri->segment('3'));
		$this->load->view('surat_keterangan_tka/cetak', $data);
	}
	public function print()
	{

		$data['title'] = "PRINT | Surat Keterangan Tenaga Kerja Asing - Dinas Tenaga Kerja";
		$data['surat'] = $this->m_surat_keterangan_tka->get_data('surat_keterangan_tka')->result();
		$this->load->view('surat_keterangan_tka/print', $data);
	}
}
