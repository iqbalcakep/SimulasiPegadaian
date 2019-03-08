<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrasi_model extends CI_Model {
    public function create()
    {
        $object = array(
            'bulan' => $this->input->post('bulan'),
            'biaya_admin' => $this->input->post('biaya_admin')
        );
        $this->db->insert('administrasi', $object);	
    }

    public function getAdmin(){
		$this->db->select('*');
		$this->db->from('administrasi');
		$query = $this->db->get();
		return $query->result();
    }
    
    public function delete($id_admin)
	{
		$this->db->delete('administrasi', array('id_admin' => $id_admin));
    }
    
    public function getAdminById($id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		$query = $this->db->get('administrasi',1);
		return $query->result();
	}

	public function update($id_admin)
	{
		$object = array(
            'bulan' => $this->input->post('bulan'),
            'biaya_admin' => $this->input->post('biaya_admin')
        );
		$this->db->where('id_admin', $id_admin);
		$this->db->update('administrasi', $object);
    }

}
/* End of file ModelName.php */
?>