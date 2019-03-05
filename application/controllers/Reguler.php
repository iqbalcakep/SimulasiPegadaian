<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reguler extends CI_Controller {

	
	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('reguler');
		// $this->load->view('partial/footer');	
	}
	

	
}
