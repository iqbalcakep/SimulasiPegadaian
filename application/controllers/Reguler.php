<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reguler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('curl');
	}
	
	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('reguler');
		$this->load->view('partial/footer');	
	}
	public function detail()
	{

		$pinjaman = $this->input->post('uang_pinjaman');
		$tenor =  $this->input->post('tenor_pinjaman');
		$datas = array(
			'up' => str_replace(',','',$pinjaman),
			'tenor' => $tenor,
		);
		$jsonString=$this->curl->simple_post('http://localhost/SimluasiPegadaian_API/index.php/reguler/kontak', $datas, array(CURLOPT_BUFFERSIZE => 10));
		$data['detail']=json_decode($jsonString);
		//var_dump($data['detail']);
		$this->load->view('detail', $data);
	}

	// function asasindex()
	// {
	// 	$this->load->library('curl');
	// 	$data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak'));
	// 	$this->load->view('kontak/list', $data);

		
	// }

	// function create()
	// {
	// 	if (isset($_POST['submit'])) {
	// 		$data = array(
	// 		'id' => $this->input->post('id'),
	// 		'nama' => $this->input->post('nama'),
	// 		'nomor' => $this->input->post('nomor'), 
	// 	);
	// 	$insert = $this->curl->simple_post($this->API.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
	// 		if ($insert) {
	// 			$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
	// 		} else {
	// 			$this->session->flashdata('hasil', 'Insert Data Gagal');
	// 		}
	// 		redirect('kontak');
	// 	} else {
	// 		$this->load->view('kontak/create');
	// 	}		
	// }

}
