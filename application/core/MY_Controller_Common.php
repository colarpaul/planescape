<?php

/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/20/2016
 * Time: 23:30
 */
class MY_Controller_Common extends CI_Controller
{
	public $data;
	public $account_data;

	function __construct()
	{
		parent::__construct();
		$this->data = array();
		parse_str($_SERVER['QUERY_STRING'], $_GET);
		$this->load->library('My_PHPMailer');
	}

	function checkIfIsLoggedIn($type = 1)
	{
		# @Types
		#	1=> redirect
		#	2=> return true or false
		$user_id = $this->session->userdata('id');

		if ($type == 1) {
			if (!$user_id)
				redirect('account/login');
		} else if ($type == 2) {
			if ($user_id)
				return true;
			else
				return false;
		}

		return false;
	}

	function force_ssl()
	{
		if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") {
			$url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			redirect($url);
			exit;
		}
	}

	function show_flash_message($message = '', $message_type = null)
	{
		$html = '';

		$messages_available = array(
			'info'    => 'message_info',
			'danger'  => 'message_alert',
			'success' => 'message_success',
			'warning' => 'message_warning',
		);

		if (strlen(trim($message)) && $message_type != '') {
			$data = array(
				'message'      => $message,
				'message_type' => $message_type,
			);
			$html .= $this->load->view("messages/message_template.php", $data, true);
		}

		foreach ($messages_available as $key => $val) {
			$message = $this->session->flashdata($val);
			$message_type = $key;
			if (strlen(trim($message))) {
				$data = array(
					'message'      => $message,
					'message_type' => $message_type,
				);
				$html .= $this->load->view("messages/message_template.php", $data, true);
			}
		}

		return $html;
	}

	public function send_mail($to, $subject, $text)
	{
		$mail = new PHPMailer();
		$mail->IsSMTP(); // we are going to use SMTP
		$mail->SMTPAuth = true; // enabled SMTP authentication
		$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
		$mail->Host = "smtp.gmail.com";      // setting GMail as our SMTP server
		$mail->Port = 465;                   // SMTP port to connect to GMail
		$mail->Username = "hacktm.planescape@gmail.com";  // user email address
		$mail->Password = "hacktm12345678";            // password in GMail
		$mail->Subject = $subject;
		$mail->Body = $text;
		$mail->AltBody = strip_tags($text);
		$mail->AddAddress($to, $to);

		if (!$mail->Send()) {
			$data["message"] = "Error: " . $mail->ErrorInfo;
		} else {
			$data["message"] = "Message sent correctly!";
		}
		return $data;
	}
}