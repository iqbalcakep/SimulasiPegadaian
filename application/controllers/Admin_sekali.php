<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sekali extends CI_Controller {
    
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
        $this->load->model('Sekali_admin');
        $data["sekali_list"] = $this->Sekali_admin->getSekali();
        $data["administrasi"] = $this->Sekali_admin->getAdmin();
        $this->load->view('partial/header_admin');
        $this->load->view('admin/sekali/read', $data);
        $this->load->view('partial/footer_admin');
    }

    public function create(){
        $this->load->model('Sekali_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_fs', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["sekali_list"] = $this->Sekali_admin->getSekali();
            $data["administrasi"] = $this->Sekali_admin->getAdmin();
            $this->load->view('admin/sekali/read', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Sekali_admin->create();
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_sekali','refresh');
		}
    }
    
    public function update($id_sekali){
        $this->load->model('Sekali_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_fs', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["administrasi"] = $this->Sekali_admin->getAdmin();
            $data["sekali"] = $this->Sekali_admin->getSekaliById($id_sekali);
            $this->load->view('admin/sekali/update', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Sekali_admin->update($id_sekali);
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_sekali','refresh');
		}
    }
    
    public function delete($id_sekali)
	{
		$this->load->model('Sekali_admin');
		$this->Sekali_admin->delete($id_sekali);
		$this->session->set_flashdata('sukses','1');
		redirect('admin_sekali','refresh');
	}

}

/* End of file Controllername.php */

?>