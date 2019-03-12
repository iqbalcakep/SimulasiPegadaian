<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . '/libraries/REST_Controller.php';
 
class Amanah extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }
    
    public function index()
    {
        $this->load->view('partial/header');
        $this->load->view('amanah');
        $this->load->view('partial/footer');    
    }

    public function detail()
    {

        $pinjaman = $this->input->post('uang_pinjaman');
        $tenor =  $this->input->post('tenor_pinjaman');
        $pola = $this->input->post("pola");
        $datas = array(
            'up' => str_replace(',','',$pinjaman),
            'tenor' => $tenor,
            'pola'=> $pola
        );
        $jsonString=$this->curl->simple_post('https://api.thegadeareamalang.com/simulasikreasi/index.php/Berjangka', $datas, array(CURLOPT_BUFFERSIZE => 10));
        $data['detail']=json_decode($jsonString);

        $this->load->view('partial/header');
        $this->load->view('detailAmanah',$data);
        $this->load->view('partial/footer');  
    }
}
