<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function semua()
	{
		return $this->db->get('artikel')->result_array();
	}

	public function join2table() {
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->join('user', 'user.nama = artikel.iduser');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function berdasarkanId($id)
	{
		$query = $this->db->select('*')
			->where('idartikel', $id)
			->get('judul');
		return $query;
	}

	public function create($data)
	{
		$this->db->insert('artikel', $data);
	}

	public function update($id, $data)
	{
		$query = $this->db->where('idartikel', $id);
		$query = $this->db->update('artikel', $data);

		return $query;
	}
}
