<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sidebar extends CI_Controller {
	
	protected $template = 'main/index';
	public function __construct()
	{
		parent::__construct();
	}

	public function artikel($side = 'main/sidebar/artikel')
	{
		$data['title'] = 'Nirc | Artikel';
		$data['kontenDinamis'] = $side;
		// $data['modalLogin'] = $this->load->view('main/login');
		$this->load->view($this->template, $data);
	}
	public function event($side = 'main/sidebar/event')
	{
		$data['title'] = 'Nirc | Events';
		$data['kontenDinamis'] = $side;
		$this->load->view($this->template, $data);
	}
	public function galeri($side = 'main/sidebar/galeri')
	{
		$data['title'] = 'Nirc | Galeri';
		$data['kontenDinamis'] = $side;
		$this->load->view($this->template, $data);
	}
	public function klien($side = 'main/sidebar/klien')
	{
		$data['title'] = 'Nirc | Klien';
		$data['kontenDinamis'] = $side;
		$this->load->view($this->template, $data);
	}
}
