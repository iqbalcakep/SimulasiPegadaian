<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('home');
		$this->load->view('partial/footer');	
	}

	public function login()
	{
		$this->load->view('partial/header');
		$this->load->view('login');
		$this->load->view('partial/footer');	
	}

	public function reg()
	{
		$this->load->view('partial/header');
		$this->load->view('reguler');
		$this->load->view('partial/footer');	
	}
	

	
}
