<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events_model extends CI_Model
{

	public function getAllEvents()
	{
		return $this->db->get('events')->result_array();
	}

	public function join2table()
	{
		return $this->db->from('events')->join('user', 'user.iduser=events.iduser')->get()->result_array();
	}

	public function createEvents()
	{
		$upload_image = $_FILES['images']['name'];
		if ($upload_image) {
			$config['upload_path']          = FCPATH.'assets/images/events';
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
			"images" => $new_image,
			"judul" => $this->input->post('judul', true),
			"isievents" => $this->input->post('isievents', true),
			"kategori" => $this->input->post('kategori', true),
			"tgl_events" => $this->input->post('tgl_events', true)
		];

		$this->db->insert('events', $data);
	}

	public function deleteEvents($idEvents)
	{
		// $this->db->where('id', $id);
		$this->db->delete('events', ['idevents' => $idEvents]);
	}

	public function getEventsById($idEvents)
	{
		return $this->db->get_where('events', ['idevents' => $idEvents])->row_array();
	}

	public function updateEvents()
	{
		$data = [
			"judul" => $this->input->post('judul', true),
			"isievents" => $this->input->post('isievents', true),
			"kategori" => $this->input->post('kategori', true),
		];

		$this->db->where('idevents', $this->input->post('idevents'));
		$this->db->update('events', $data);
	}
}
