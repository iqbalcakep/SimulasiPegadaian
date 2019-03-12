<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_reguler extends CI_Controller {
    
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
        $this->load->model('Reguler_admin');
        $data["reguler_list"] = $this->Reguler_admin->getReguler();
        $data["administrasi"] = $this->Reguler_admin->getAdmin();
        $this->load->view('partial/header_admin');
        $this->load->view('admin/reguler/read', $data);
        $this->load->view('partial/footer_admin');
    }

    public function create(){
        $this->load->model('Reguler_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_reg', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["reguler_list"] = $this->Reguler_admin->getReguler();
            $data["administrasi"] = $this->Reguler_admin->getAdmin();
            $this->load->view('admin/reguler/read', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Reguler_admin->create();
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_reguler','refresh');
		}
    }
    
    public function update($id_reguler){
        $this->load->model('Reguler_admin');		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('min_reg', 'Nilai Minimum', 'trim|required');
		if($this->form_validation->run()==FALSE){	
            $this->load->view('partial/header_admin');
            $data["administrasi"] = $this->Reguler_admin->getAdmin();
            $data["reguler"] = $this->Reguler_admin->getRegById($id_reguler);
            $this->load->view('admin/reguler/update', $data);
            $this->load->view('partial/footer_admin');		
		}else{
			$this->Reguler_admin->update($id_reguler);
			$this->session->set_flashdata('sukses','1');	
			redirect('admin_reguler','refresh');
		}
    }
    
    public function delete($id_reguler)
	{
		$this->load->model('Reguler_admin');
		$this->Reguler_admin->delete($id_reguler);
		$this->session->set_flashdata('sukses','1');
		redirect('Admin_reguler','refresh');
	}

}

/* End of file Controllername.php */

?>