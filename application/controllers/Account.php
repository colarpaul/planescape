<?php

class Account extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_model');
	}

	public function login()
	{
		$username = $this->input->post('identifier');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('identifier', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		if ($this->form_validation->run() == true) {
			$user = $this->Account_model->login($username, md5($password));
			if ($user) {
				$userdata = array(
					'username'        => $user['username'],
					'email'           => $user['email'],
					'id'              => $user['id'],
					'user_img'        => $user['path'],
					'loggedIn'        => true,
				);

				$this->session->set_userdata($userdata);

				redirect('dashboard');
			}
		}
		$this->data['view'] = 'login';
		$this->load->view('account/auth/layout', $this->data);
	}

	public function register()
	{
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$r_password = $this->input->post('retype-password');

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		$this->form_validation->set_rules('email', 'Email', 'required|md5|is_unique[users.email]');
		$this->form_validation->set_rules('retype-password', 'Retype Password', 'required|md5|matches[password]');

		if ($this->form_validation->run() == true) {
			$this->data = array(
				'email'    => $email,
				'username' => $username,
				'password' => md5($password),
			);
			$this->Account_model->register($this->data);
			$id = $this->db->insert_id();
			$userdata = array(
				'username' => $username,
				'email'    => $email,
				'id'       => $id,
				'loggedIn' => true,
			);
			$this->session->set_userdata($userdata);
			redirect('dashboard');
		}

		$this->data['view'] = 'register';
		$this->load->view('account/auth/layout', $this->data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}