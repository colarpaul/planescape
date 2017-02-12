<?php

class Activity extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Activity_model');
        $this->load->model('Uploads_model');
        $this->user_id = $this->session->userdata('id');
    }

    public function index()
    {
        $data['activities'] = $this->Activity_model->getActivities();
        if(isset($data['activities']) and !empty($data['activities'])) {
            foreach($this->data['activities'] as $activity)
            {
                $going[$activity['id']] = $this->Activity_model->getNumberAcceptEvent($activity['id']);
            }
        }
       $data['accepted_invitation'] = array(
           'all' => $going
       );
        $this->data['view']='activity/list';
        $this->load->view('account/layout',$data);
    }

    public function add()
    {
        $title = $this->input->post('title');
        $description = nl2br($this->input->post('description'));
        $address = $this->input->post('address');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $start_date = str_replace('/', '-', $start_date);
        $start_date = date('Y-m-d',strtotime($start_date));

        $end_date = str_replace('/', '-', $end_date);
        $end_date = date('Y-m-d',strtotime($end_date));

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');

        if ($this->form_validation->run() == true) {
            $this->load->model('Uploads_model');
            $file = $this->Uploads_model->upload_file(true);
            $data = array(
                'title' => $title,
                'description' => $description,
                'address' => $address,
                'user_id' => $this->user_id,
                'cover' => $file,
                'date' => $start_date,
                'end_date' => $end_date
                );

            $this->Activity_model->addActivity($data);
            redirect('dashboard');
        }

        $this->data['view']='activity/add';
        $this->load->view('account/layout',$this->data);


    }

    public function answer_vote($question_id, $answer_id)
    {
        $this->Activity_model->vote_answer($question_id, $answer_id);
    }

    public function question($id)
    {
        $question = $this->input->post('question');
        $answers = $this->input->post('answer');

        $this->form_validation->set_rules('question','Question','required');

        if($this->form_validation->run() == true){
            $data = array(
                'text' => $question,
                'activity_id' => $id
                );
            $this->Activity_model->addQuestion($data);
            $question_id = $this->db->insert_id();

            $data = array();
            foreach($answers as $answer){
                $data[] = array(
                        'text' => $answer,
                        'question_id' => $question_id

                );
            }

            foreach($data as $data_answer){
                $this->Activity_model->addAnswer($data_answer);
            }

			redirect('activity/view/' . $id);
        }else{
            redirect('activity/view/' . $id);
        }

        $this->data['view']='activity/add_question_answer';
        $this->load->view('account/layout',$this->data);
    }

    public function ended()
    {
        $this->data['activities'] = $this->Activity_model->getEndedActivities();

        $goingEnded = array();
        if(is_array($this->data['activities']) and !empty($this->data['activities'])) {
            foreach ($this->data['activities'] as $activity) {
                $goingEnded[$activity['id']] = $this->Activity_model->getNumberAcceptEvent($activity['id']);
            }
        }
        $this->data['accepted_invitation'] = array(
            'ended' => $goingEnded,
        );

        $this->data['view']='activity/list_ended';
        $this->load->view('account/layout',$this->data);

    }

    public function upcoming()
    {
        $this->data['activities'] = $this->Activity_model->getUpcomingActivities();
        $goingUpcoming = array();
        if(is_array($this->data['activities']) and !empty($this->data['activities'])) {
            foreach ($this->data['activities'] as $activity) {
                $goingUpcoming[$activity['id']] = $this->Activity_model->getNumberAcceptEvent($activity['id']);
            }
        }
        $this->data['accepted_invitation'] = array(
            'upcoming' => $goingUpcoming,
        );
        $this->data['view']='activity/list_upcoming';
        $this->load->view('account/layout',$this->data);
    }

	public function view($eventId){
		if (!empty($eventId)) {
			$this->data['event_details'] = $this->Activity_model->getEventDetails($eventId);
			$this->data['gallery_photos'] = $this->Uploads_model->getPhotosById($eventId);
            $this->data['questions'] = $this->Activity_model->getQuestions($eventId);
            if(is_array($this->data['questions']) and !empty($this->data['questions'])){
                foreach($this->data['questions'] as $question){
                    $answers[$question['id']] = $this->Activity_model->getAnswers($question['id']);
                }
                $this->data['answers'] = $answers;
            }

			$this->data['view'] = 'activity/event_details';
			$this->load->view('account/layout', $this->data);
		}
	}

	public function invite_friend($id)
    {
		$this->data['activity'] = current($this->Activity_model->getActivity($id));
		$email_address = $this->input->post('friend_email');

		$hash = $this->Activity_model->create_event_invitation($id, $email_address);
		if ($hash) {
			$this->data['activity_owner'] = $this->session->userdata('username');
			$this->data['hash'] = $hash;
			$subject = 'You\'ve been invited to an event';
			$text = $this->load->view('messages/emails/invitation', $this->data, true);
			$this->send_mail($email_address, $subject, $text);
		}
		redirect('activity/view/' . $id);
	}

	public function accept_invite($hash, $ajax = false){
		$this->Activity_model->accept_invite($hash);
		if (! $ajax)
			redirect('dashboard');
	}
}