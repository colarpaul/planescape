<?php

class Gallery extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Activity_model');
    }

    public function index()
    {
        $this->data['activities'] = $this->Activity_model->getActivities();

        $this->data['view'] = 'gallery/list_galleries';
        $this->load->view('account/layout', $this->data);
    }

    public function view($id)
    {
        $this->data['files'] = $this->Activity_model->getActivitiesFiles($this->session->userdata('id'), $id);

        $this->data['view'] = 'gallery/view';
        $this->load->view('account/layout', $this->data);

    }


}