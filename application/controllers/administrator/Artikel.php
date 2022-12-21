<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	protected $adminTemplate = 'administrator/index';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Artikel_model');
		$this->load->model('User_model');
	}

	public function index($page = 'administrator/pages/artikel/list')
	{
		$data = [
			'title' => 'Artikel | List',
			'sideName' => 'Artikel',
			'artikel' => $this->Artikel_model->semua(),
			'user' => $this->Artikel_model->join2table(),
			'kontenDinamis' => $page,
		];
		$this->load->view($this->adminTemplate, $data);
	}

	public function add($page = 'administrator/pages/artikel/add')
	{
		$data = [
			'title' => 'Artikel | Add',
			'sideName' => 'Artikel',
			'kontenDinamis' => $page,
		];

		$this->load->view($this->adminTemplate, $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('isiartikel', 'isiartikel', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');

		if ($this->form_validation->run() == FALSE) {
			//panggil form tambah
			$this->add();
		} else {
			$dataArtikel = [
				'judul' 	=> $this->input->post('judul', true),
				'isiartikel' => $this->input->post('isiartikel', true),
				'kategori'	=> $this->input->post('kategori', true),
				'tanggal'	=> date("Y-m-d H:i:s")
			];

			//kalau form diisi dengan benar maka simpan data ke table user
			$this->Artikel_model->create($dataArtikel);

			// //untuk notifikasi
			$dataPesan = [
				'alert' => 'alert-success',
				'pesan' => 'Data posisi berhasil di tambahkan'
			];

			$this->session->set_flashdata($dataPesan);

			// //pindahkan ke halaman login
			redirect('administrator/artikel');
		}
	}
}
