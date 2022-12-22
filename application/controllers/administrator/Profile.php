<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	protected $adminTemplate = 'administrator/index';
	function __construct() {
		parent::__construct();
		$this->load->model('User_model');

	}

	public function index($page = 'administrator/pages/profile')
	{
		$data = [
			'title' => 'Administrator } Profile',
			'sideName' => 'Profile',
			'profile' => $this->db->get('user')->row_array(),
			'kontenDinamis' => $page,
		];

		$this->load->view($this->adminTemplate, $data);
	}
}
