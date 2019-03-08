<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . '/libraries/REST_Controller.php';
 
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

        if ( $this->input->post('uang_pinjaman')=="")
        {
            redirect('reguler');
        }
        $pinjaman = $this->input->post('uang_pinjaman');
        $tenor =  $this->input->post('tenor_pinjaman');
        $datas = array(
            'up' => str_replace(',','',$pinjaman),
            'tenor' => $tenor,
        );
        $jsonString=$this->curl->simple_post('http://localhost:8085/index.php/reguler/', $datas, array(CURLOPT_BUFFERSIZE => 10));
        $data['detail']=json_decode($jsonString);
        //var_dump($data['detail']);
        $this->load->view('partial/header');
        $this->load->view('detailReguler',$data);
        $this->load->view('partial/footer');  
    }
}
