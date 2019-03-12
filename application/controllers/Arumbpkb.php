<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . '/libraries/REST_Controller.php';
 
class Arumbpkb extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }
    
    public function index()
    {
        $this->load->view('partial/header');
        $this->load->view('arumbpkb');
        $this->load->view('partial/footer');    
    }

    public function detail()
    {

        $akad = $this->input->post('akad');
        $taksiran =  $this->input->post('taksiran');
        $jenis = $this->input->post("jenis");
        $datas = array(
            'taksiran' => str_replace(',','',$taksiran),
            'akad' => $akad,
            'jenis'=> $jenis
        );
        $jsonString=$this->curl->simple_post('https://api.thegadeareamalang.com/simulasikreasi/index.php/Arrum', $datas, array(CURLOPT_BUFFERSIZE => 10));
        $data['detail']=json_decode($jsonString);

        $this->load->view('partial/header');
        $this->load->view('detailArumbpkb',$data);
        $this->load->view('partial/footer');  
    }
}
