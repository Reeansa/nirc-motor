<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	protected $adminTemplate = 'administrator/index';
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'administrator/pages/dashboard')
	{
		$data = [
			'title' => 'Nirc | Dashboard',
			'sideName' => 'Dashboard',
			'kontenDinamis' => $page,
		];
		$this->load->view($this->adminTemplate, $data);
	}
}
