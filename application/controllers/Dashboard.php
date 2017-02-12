<?php

/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/21/2016
 * Time: 00:06
 */
class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
		$this->load->model('Activity_model');
		$this->load->model('Uploads_model');
		$this->user_id = $this->session->userdata('id');
	}

	public function index()
	{

		$this->data['view']='dashboard/dashboard';


		if (!empty($_GET['eventId'])) {
			$this->data['event_details'] = $this->Activity_model->getEventDetails($_GET['eventId']);
			$this->data['gallery_photos'] = $this->Uploads_model->getPhotosById($_GET['eventId']);
			$this->load->view('account/activity/event_details', $this->data);
		} else {
			$goingUpcoming = array();
			$goingEnded = array();
			$goingOpen = array();
			$this->data['endedEvents'] = $this->Activity_model->getEndedActivities();
			$this->data['upcomingEvents'] = $this->Activity_model->getUpcomingActivities();
			$this->data['openEvents'] = $this->Activity_model->getOpenActivities();
			if(is_array($this->data['endedEvents']) and !empty($this->data['endedEvents'])) {
				foreach ($this->data['endedEvents'] as $activity) {
					$goingEnded[$activity['id']] = $this->Activity_model->getNumberAcceptEvent($activity['id']);
				}
			}
			if(is_array($this->data['upcomingEvents']) and !empty($this->data['upcomingEvents'])) {
				foreach ($this->data['upcomingEvents'] as $activity) {
					$goingUpcoming[$activity['id']] = $this->Activity_model->getNumberAcceptEvent($activity['id']);
				}
			}
			if(is_array($this->data['openEvents']) and !empty($this->data['openEvents'])) {
				foreach ($this->data['openEvents'] as $activity) {
					$goingOpen[$activity['id']] = $this->Activity_model->getNumberAcceptEvent($activity['id']);
				}
			}

			$this->data['accepted_invitation'] = array(
				'ended' => $goingEnded,
				'upcoming' => $goingUpcoming,
				'open' => $goingOpen
			);

			$this->load->view('account/layout', $this->data);
		}
	}

	public function test_mail(){
		$this->send_mail('alina.berce@gmail.com', 'Test' , 'Testing');
	}
}