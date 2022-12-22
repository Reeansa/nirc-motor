<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	
	protected $adminTemplate = 'administrator/index';
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'administrator/pages/galeri/list')
	{
		$data = [
			'title' => 'Administrator | Galeri',
			'sideName' => 'Galeri',
			'profile' => $this->db->get('user')->row_array(),
			'kontenDinamis' => $page,
		];
		$this->load->view($this->adminTemplate, $data);
	}
}
