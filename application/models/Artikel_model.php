<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{

	public function getAllArtikel()
	{
		return $this->db->get('artikel')->result_array();
	}

	public function join2table()
	{
		return $this->db->from('artikel')->join('user', 'user.iduser=artikel.iduser')->get()->result_array();
	}

	public function createArtikel()
	{
		$upload_image = $_FILES['images']['name'];
		if ($upload_image) {
			$config['upload_path']          = FCPATH.'assets/images/artikel';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_width']            = 2048;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('images')) {
				$new_image = $this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}

		$data = [
			"iduser" => $this->input->post('iduser', true),
			"judul" => $this->input->post('judul', true),
			"isiartikel" => $this->input->post('isiartikel', true),
			"kategori" => $this->input->post('kategori', true),
			"images" => $new_image,
		];

		$this->db->insert('artikel', $data);
	}

	public function deleteArtikel($idArtikel)
	{
		// $this->db->where('id', $id);
		$this->db->delete('artikel', ['idartikel' => $idArtikel]);
	}

	public function getArtikelById($idArtikel)
	{
		return $this->db->get_where('artikel', ['idartikel' => $idArtikel])->row_array();
	}

	public function updateArtikel()
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"isiartikel" => $this->input->post('isiartikel', true),
			"kategori" => $this->input->post('kategori', true),
		];

		$this->db->where('idartikel', $this->input->post('idartikel'));
		$this->db->update('artikel', $data);
	}
}
