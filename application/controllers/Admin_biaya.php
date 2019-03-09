<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_biaya extends CI_Controller {
	
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
        $this->load->model('Administrasi_model');
        $data["administrasi_list"] = $this->Administrasi_model->getAdmin();
        $this->load->view('partial/header_admin');
        $this->load->view('admin/administrasi/read', $data);
        $this->load->view('partial/footer_admin');
    }

    public function create(){
        $this->load->model('Administrasi_model');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('bulan', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["administrasi_list"] = $this->Administrasi_model->getAdmin();
            $this->load->view('admin/administrasi/read', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Administrasi_model->create();
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_biaya','refresh');
		}
    }
    
    public function update($id_admin){
        $this->load->model('Administrasi_model');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('bulan', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["administrasi"] = $this->Administrasi_model->getAdminById($id_admin);
            $this->load->view('admin/administrasi/update', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Administrasi_model->update($id_admin);
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_biaya','refresh');
		}
    }
    
    public function delete($id_admin)
	{
		$this->load->model('Administrasi_model');
		$this->Administrasi_model->delete($id_admin);
		$this->session->set_flashdata('sukses','1');
		redirect('admin_biaya','refresh');
	}

}

/* End of file Controllername.php */

?>