<?php

class Account_model extends CI_Model
{
	private $table_name = 'users';

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id');
	}

	public function getAccountData()
	{
		$query = $this->db->where('users.id', $this->user_id)
			->join('files', 'users.profile_picture = files.id', 'left')
			->get($this->table_name);

		return $query->row_array();
	}

	public function editAccountData()
	{
		$ids = $this->uploads->upload_file(true);
		$data = array(
			'first_name' => $this->input->post('settings_first_name'),
			'last_name'  => $this->input->post('settings_last_name'),
			'email'      => $this->input->post('settings_email'),
		);

		if (is_numeric($ids))
			$data['profile_picture'] = $ids;

		$path = $this->getUserPath($ids);

		$this->session->set_userdata('user_img',$path['path']);

		$this->db->where('id', $this->user_id)->update($this->table_name, $data);
	}

	public function login($username, $password)
	{
		$this->db->select('users.*,files.path');
		$this->db->from('users');
		$this->db->join('files', 'users.profile_picture = files.id','left');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->or_where('email', $username);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function register($data)
	{
		$this->db->insert('users', $data);
	}

	public function getUserPath($id)
	{
		$this->db->select('path');
		$this->db->from('files');
		$this->db->where('id',$id);

		$query = $this->db->get();

		return $query->row_array();
	}

}