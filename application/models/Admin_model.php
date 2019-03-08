<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function cekLogin($username,$password)
	{
		$this->db->select('*');
		$this->db->from('user_admin');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result_array();
		}else{
			return false;
		}
	}
}

/* End of file Admin_model.php */

?>