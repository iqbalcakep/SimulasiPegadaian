<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_multi extends CI_Controller { 
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
        $this->load->model('Multiguna_admin');
        $data["multi_list"] = $this->Multiguna_admin->getMultiguna();
        $data["administrasi"] = $this->Multiguna_admin->getAdmin();
        $this->load->view('partial/header_admin');
        $this->load->view('admin/multi/read', $data);
        $this->load->view('partial/footer_admin');
    }

    public function create(){
        $this->load->model('Multiguna_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_multi', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["administrasi"] = $this->Multiguna_admin->getAdmin();
            $this->load->view('admin/multi/read', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Multiguna_admin->create();
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_multi','refresh');
		}
    }
    
    public function update($id_multi){
        $this->load->model('Multiguna_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_multi', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["administrasi"] = $this->Multiguna_admin->getAdmin();
            $data["multiguna"] = $this->Multiguna_admin->getMultiById($id_multi);
            $this->load->view('admin/multi/update', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Multiguna_admin->update($id_multi);
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_multi','refresh');
		}
    }
    
    public function delete($id_multi)
	{
		$this->load->model('Multiguna_admin');
		$this->Multiguna_admin->delete($id_multi);
		$this->session->set_flashdata('sukses','1');
		redirect('admin_multi','refresh');
	}

}

/* End of file Controllername.php */

?>