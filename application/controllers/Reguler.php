<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . '/libraries/REST_Controller.php';
 
class Reguler extends CI_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index(){
        $this->load->view('partial/header');
        $this->load->view('reguler');
        $this->load->view('partial/footer');

    }

    function detail(){
        $this->load->view('partial/header');
        $this->load->view('detailReguler');
        $this->load->view('partial/footer');

    }

    

}
