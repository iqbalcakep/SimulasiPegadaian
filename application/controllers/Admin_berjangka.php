<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_berjangka extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $sessionData = $this->session->userdata('usersession');
		$id_user = $sessionData['id_user'];
		$data['username'] = $sessionData['username'];
        $data['nama_user'] = $sessionData['nama_user'];
    }  

    public function index()
    {
        $this->load->model('Berjangka_admin');
        $data["berjangka_list"] = $this->Berjangka_admin->getBerjangka();
        $data["administrasi"] = $this->Berjangka_admin->getAdmin();
        $this->load->view('partial/header_admin');
        $this->load->view('admin/berjangka/read', $data);
        $this->load->view('partial/footer_admin');
    }

    public function create(){
        $this->load->model('Berjangka_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_fb', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["berjangka_list"] = $this->Berjangka_admin->getBerjangka();
            $data["administrasi"] = $this->Berjangka_admin->getAdmin();
            $this->load->view('admin/berjangka/read', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Berjangka_admin->create();
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_berjangka','refresh');
		}
    }
    
    public function update($id_berjangka){
        $this->load->model('Berjangka_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_fb', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["administrasi"] = $this->Berjangka_admin->getAdmin();
            $data["berjangka"] = $this->Berjangka_admin->getBerjangkaById($id_berjangka);
            $this->load->view('admin/berjangka/update', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Berjangka_admin->update($id_berjangka);
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_berjangka','refresh');
		}
    }
    
    public function delete($id_berjangka)
	{
		$this->load->model('Berjangka_admin');
		$this->Berjangka_admin->delete($id_berjangka);
		$this->session->set_flashdata('sukses','1');
		redirect('admin_berjangka','refresh');
	}

}

/* End of file Controllername.php */

?>