<?php

$data['PAGE'] = $this->uri->segment(1);

$this->load->view('account/header', $data);
$this->load->view('account/sidebar', $data);
$this->load->view('account/' . $view, $data);
$this->load->view('account/footer', $data);
?>



