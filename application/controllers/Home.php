<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	protected $template = 'main/index';

	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'main/pages/home')
	{
		$data['title'] = 'Nirc | Home';
		$data['kontenDinamis'] = $page;
		$this->load->view($this->template, $data);
	}

	public function profil($page = 'main/pages/profil')
	{
		$data['title'] = 'Nirc | Profil';
		$data['kontenDinamis'] = $page;
		$this->load->view($this->template, $data);
	}
	public function visiDanMisi($page = 'main/pages/vdm')
	{
		$data['title'] = 'Nirc | Visi Dan Misi';
		$data['kontenDinamis'] = $page;
		$this->load->view($this->template, $data);
	}
	public function produk($page = 'main/pages/produk')
	{
		$data['title'] = 'Nirc | Produk';
		$data['kontenDinamis'] = $page;
		$this->load->view($this->template, $data);
	}
	public function kontak($page = 'main/pages/kontak')
	{
		$data['title'] = 'Nirc | Kontak';
		$data['kontenDinamis'] = $page;
		$this->load->view($this->template, $data);
	}
	public function about($page = 'main/pages/about')
	{
		$data['title'] = 'Nirc | About';
		$data['kontenDinamis'] = $page;
		$this->load->view($this->template, $data);
	}
}
