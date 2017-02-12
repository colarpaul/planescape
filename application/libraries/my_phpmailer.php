<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/21/2016
 * Time: 20:17
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_PHPMailer
{
	public function My_PHPMailer()
	{
		require_once('PHPMailer/class.phpmailer.php');
		require_once('PHPMailer/class.smtp.php');
	}
}