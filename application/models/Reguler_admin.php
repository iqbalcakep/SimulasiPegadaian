<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reguler_admin extends CI_Model {
    public function getReguler(){
		$this->db->select('*');
		$this->db->from('reguler');
		$this->db->join('administrasi','administrasi.id_admin = reguler.id_admin');
		$query = $this->db->get();
		return $query->result();
	}

    public function create()
    {
        $object = array(
            'min_reg' => $this->input->post('min_reg'),
            'max_reg' => $this->input->post('max_reg'),
            'sm_reg' => $this->input->post('sm_reg'),
            'id_admin' => $this->input->post('id_admin'),
        );
        $this->db->insert('reguler', $object);	
    }

    public function getAdmin(){
		$this->db->select('*');
		$this->db->from('administrasi');
		$query = $this->db->get();
		return $query->result();
    }
    
    public function delete($id_reguler)
	{
		$this->db->delete('reguler', array('id_reguler' => $id_reguler));
    }
    
    public function getRegById($id_reguler)
	{
		$this->db->where('id_reguler', $id_reguler);
		$query = $this->db->get('reguler',1);
		return $query->result();
	}

	public function update($id_reguler)
	{
		$object = array(
			'min_reg' => $this->input->post('min_reg'),
			'max_reg' => $this->input->post('max_reg'),
            'sm_reg' => $this->input->post('sm_reg'),
            'id_admin' => $this->input->post('id_admin')
		);
		$this->db->where('id_reguler', $id_reguler);
		$this->db->update('reguler', $object);
    }

}
/* End of file ModelName.php */
?>