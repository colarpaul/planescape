<?php

/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/21/2016
 * Time: 03:52
 */
class Uploads_model extends CI_Model
{
	private $table_name = 'files';

	function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id');
	}

	function add($files)
	{
		if (!is_array($files[0]))
			$files = array($files);

		$this->db->insert_batch($this->table_name, $files);

		return $this->db->insert_id();
	}

	function get()
	{
		$this->db->where('user_id', $this->user_id);
		$files = $this->db->get($this->table_name);

		return $files->result();
	}

	function calculate_file_size()
	{
		$this->db->select('SUM(size) as total_size');
		$this->db->where('user_id', $this->user_id);
		$size = $this->db->get($this->table_name)->row()->total_size;

		return $size;
	}

	function delete($id)
	{
		$this->db->where('user_id', $this->user_id);
		$this->db->where('id', $id);
		$this->db->delete($this->table_name);
	}

	function upload_file($return = false)
	{
		$good_files = array();
		$file = $_FILES;
		$data = array('files' => array());
		$path = "upload/" . $this->user_id . "/files";
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}

		$config = array(
			'upload_path'   => $path,
			'allowed_types' => 'gif|jpg|png|doc|pdf',
			'max_size'      => 1024 * 50,
//                'file_name' => ''
			'encrypt_name'  => true,
			);

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('files')) {
			$file_data = $this->upload->data();

			$data['files'][] = array(
				"name"  => $file_data['file_name'],
				"size"  => $file_data['file_size'],
				"error" => strip_tags($this->upload->display_errors()),
				);

		} else {
			$file_data = $this->upload->data();

			$data['files'][] = array(
				"name"         => $file_data['file_name'],
				"size"         => $file_data['file_size'],
				"url"          => $path . '/' . $file_data['file_name'],
				"thumbnailUrl" => $path . '/' . $file_data['file_name'],
				);

			$good_files[] = array(
				'user_id'         => $this->user_id,
				"size"       => $file_data['file_size'],
				"path"        => $path . '/' . $file_data['file_name'],

			);

		}

		if (count($good_files))
			$ids = $this->add($good_files);
		if ($return == true)
			return $ids;
		echo json_encode($data);
	}

	function getPhotosById($id) 
	{
		$this->db->select('files.*');
		$this->db->from('files');
		$this->db->where('files.activity_id', $id);

		$query = $this->db->get();

		return $query->result_array();
	}
}