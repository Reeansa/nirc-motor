<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Controller
{

	protected $adminTemplate = 'administrator/index';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Events_model');
	}

	public function index($page = 'administrator/pages/events/list')
	{
		$data = [
			'title' => 'Administrator | Events',
			'sideName' => 'Events',
			'events' => $this->Events_model->join2table(),
			'profile' => $this->db->get('user')->row_array(),
			'kontenDinamis' => $page
		];
		$this->load->view($this->adminTemplate, $data);
	}

	public function add($page = 'administrator/pages/events/add')
	{
		$data = [
			'title' => 'Events | Add',
			'sideName' => 'Events',
			'events' => $this->Events_model->getAllEvents(),
			'idUser' => $this->session->userdata('iduser'),
			'kontenDinamis' => $page,
		];

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isievents', 'isi events', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		$this->form_validation->set_rules('images', 'gambar', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view($this->adminTemplate, $data);
		} else {
			$this->Events_model->createEvents();
			redirect('administrator/events');
		}
	}
	public function delete($idEvents)
	{
		$this->Events_model->deleteEvents($idEvents);
		redirect('administrator/events');
	}

	public function update($idEvents)
	{
		$data = [
			'title' => 'Events | Update',
			'sideName' => 'Events',
			'events' => $this->Events_model->getEventsById($idEvents),
			'kontenDinamis' => 'administrator/pages/events/update'
		];

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isievents', 'isi events', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view($this->adminTemplate, $data);
		} else {
			redirect('administrator/events');
		}
	}
}
