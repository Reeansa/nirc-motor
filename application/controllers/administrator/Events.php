<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	
	protected $adminTemplate = 'administrator/index';
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'administrator/pages/events/list')
	{
		$data = [
			'title' => 'Administrator | Events',
			'sideName' => 'Events',
			'kontenDinamis' => $page,
		];
		$this->load->view($this->adminTemplate, $data);
	}
}
