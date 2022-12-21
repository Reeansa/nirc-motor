<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function semuaUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function create($data)
	{
		$this->db->insert('artikel', $data);
	}

	public function login($username, $password)
	{

		$query = $this->db->select('*')
			->where('username', $username)
			->get('user');
		$row = $query->row();
		if ($this->password->verify($password, $row->password)) {
			//jika password benar, langsung kembalikan data user ke controller
			return $row;
		} else {
			return false;
		}
	}
}
