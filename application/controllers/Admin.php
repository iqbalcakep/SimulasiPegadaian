<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('usersession')){
            redirect('Admin_reguler','refresh');
        }else{
            $this->load->view('partial/header');
            $this->load->view('admin/login');
            $this->load->view('partial/footer'); 
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|callback_cekDB');
		if ($this->form_validation->run() == FALSE) {
			echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		} else {
			redirect('Admin_reguler','refresh');
		}
    }

    public function cekDB($password)
	{
        $this->load->model('admin_model');        
		$username = $this->input->post('username');
		$hasil = $this->admin_model->cekLogin($username,$password);
		if($hasil){
			$sess_arr = array();
			foreach ($hasil as $row) {
				$sess_arr = array(
					'id_user' => $row['id_user'],
					'username' => $row['username'],
                    'nama_user' => $row['nama_user'],
                    'password' => $row['password'],
				);
				$this->session->set_userdata('usersession',$sess_arr);
			}
			return true;
		}else{	
			return false;
		}
    }
    
    public function home()
    {
        $this->load->view('partial/header_admin');
        $this->load->view('admin/home');
        $this->load->view('partial/footer'); 
    }

    public function logout()
	{
		$this->session->unset_userdata('usersession');
		$this->session->sess_destroy();
		redirect('Admin','refresh');
	}


}

/* End of file Controllername.php */

?>