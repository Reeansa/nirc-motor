<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{

	public function __construct()
	{
		/* kalau mau bikin konstruktor di Codeigniter maka harus taro script
		   dibawah ini supaya tidak menpimpa controller CI */
		parent::__construct();

		/* load helper / library hanya untuk class User
		   kalau helper / library sering dipakai di berbagai class, langsung load di config/autoload.php */
		// $this->load->helper('form');
		$this->load->library(['password']);

		//model user
		$this->load->model('User_model');
	}

	public function prosesRegister()
	{

		if ($this->session->userdata('logged_in')) {
			redirect('administrator/profile');
		}

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required|is_unique[artikel.username]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
			//panggil method register

		} else {
			$dataRegister = [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->password->hash($this->input->post('password')),
			];

			//kalau form diisi dengan benar maka simpan data ke table user
			$this->User_model->create($dataRegister);

			//untuk notifikasi
			$dataPesan = [
				'alert' => 'alert-success',
				'pesan' => 'Akun anda berhasil dibuat'
			];

			$this->session->set_flashdata($dataPesan);

			//pindahkan ke halaman login
			redirect('login');
		}
	}

	public function login($page = 'login')
	{

		if ($this->session->userdata('logged_in')) {
			redirect('administrator/dashboard');
		}

		$data['title'] = 'Administrator nirc | Login';
		$this->load->view('administrator/pages/' . $page, $data);
	}

	public function prosesLogin()
	{

		if ($this->session->userdata('username')) {
			redirect('administrator/dashboard');
		}

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
			//tampilkan halaman login
			$this->login();
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($user = $this->User_model->login($username, $password)) {
				$dataLogin = [
					'iduser'	=>  $user->iduser,
					'nama'		=> $user->nama,
					'role'	=> $user->role,
					'logged_in' => TRUE
				];

				$this->session->set_userdata($dataLogin);

				//pindahkan ke halaman home
				redirect('administrator/dashboard');
			} else {
				$dataPesan = [
					'alert' => 'alert-danger',
					'pesan' => 'username atau password yang anda masukan tidak cocok'
				];

				$this->session->set_flashdata($dataPesan);

				//tampilkan halaman login
				$this->login();
			}
		}
	}

	public function logout()
	{
		$dataLogin = ['iduser', 'nama', 'username', 'role'];

		//delete session login
		$this->session->unset_userdata($dataLogin);

		redirect('login');
	}
}
