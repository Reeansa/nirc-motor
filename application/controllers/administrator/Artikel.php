<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	protected $adminTemplate = 'administrator/index';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Artikel_model');
	}

	public function index($page = 'administrator/pages/artikel/list')
	{
		$data = [
			'title' => 'Artikel | List',
			'sideName' => 'Artikel',
			'artikel' => $this->Artikel_model->join2table(),
			'profile' => $this->db->get('user')->row_array(),
			'kontenDinamis' => $page,
		];
		$this->load->view($this->adminTemplate, $data);
	}

	public function add($page = 'administrator/pages/artikel/add')
	{
		$data = [
			'title' => 'Artikel | Add',
			'sideName' => 'Artikel',
			'artikel' => $this->Artikel_model->getAllArtikel(),
			'profile' => $this->db->get('user')->row_array(),
			'kontenDinamis' => $page,
		];

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isiartikel', 'isi artikel', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		$this->form_validation->set_rules('images', 'gambar', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view($this->adminTemplate, $data);
		} else {
			$this->Artikel_model->createArtikel();
			redirect('administrator/artikel');
		}
	}
	public function delete($idArtikel)
	{
		$this->Artikel_model->deleteArtikel($idArtikel);
		redirect('administrator/artikel');
	}

	public function update($idArtikel)
	{
		$data = [
			'title' => 'Artikel | Update',
			'sideName' => 'Artikel',
			'artikel' => $this->Artikel_model->getArtikelById($idArtikel),
			'kontenDinamis' => 'administrator/pages/artikel/update'
		];

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isiartikel', 'isiArtikel', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view($this->adminTemplate, $data);
		} else {
			redirect('administrator/artikel');
		}
	}
}
