<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . '/libraries/REST_Controller.php';
 
class SekaliBayar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }
    
    public function index()
    {
        $this->load->view('partial/header');
        $this->load->view('sekali_bayar');
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
        $jsonString=$this->curl->simple_post('http://localhost/SimluasiPegadaian_API/index.php/FleksiSekaliBayar/', $datas, array(CURLOPT_BUFFERSIZE => 10));
        $data['detail']=json_decode($jsonString);

        $this->load->view('partial/header');
        $this->load->view('detailSekaliBayar',$data);
        $this->load->view('partial/footer');  
    }
}
