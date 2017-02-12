<?php

/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/21/2016
 * Time: 02:53
 */
class Settings extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_model', 'account');
		$this->load->model('Uploads_model', 'uploads');
		$this->user_id = $this->session->userdata('id');
	}

	public function index(){
		$this->data['account_data'] = $this->account->getAccountData();

		$this->form_validation->set_rules('settings_first_name', 'First Name', 'required');
		$this->form_validation->set_rules('settings_last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('settings_email', 'Email', 'required');

		if ($this->form_validation->run() == true) {
			$this->account->editAccountData();
			redirect('settings');
		}

		$this->data['view']='settings/settings';
		$this->load->view('account/layout',$this->data);
	}
}