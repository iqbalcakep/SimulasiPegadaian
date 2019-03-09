<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Multiguna_admin extends CI_Model {
    public function getMultiguna(){
		$this->db->select('*');
		$this->db->from('multiguna');
		$this->db->join('administrasi','administrasi.id_admin = multiguna.id_admin');
		$query = $this->db->get();
		return $query->result();
	}

    public function create()
    {
        $object = array(
            'min_multi' => $this->input->post('min_multi'),
            'max_multi' => $this->input->post('max_multi'),
            'sm_multi' => $this->input->post('sm_multi'),
            'id_admin' => $this->input->post('id_admin'),
        );
        $this->db->insert('multiguna', $object);	
    }

    public function getAdmin(){
		$this->db->select('*');
		$this->db->from('administrasi');
		$query = $this->db->get();
		return $query->result();
    }
    
    public function delete($id_multi)
	{
		$this->db->delete('multi', array('id_multi' => $id_multi));
    }
    
    public function getMultiById($id_multi)
	{
		$this->db->where('id_multi', $id_multi);
		$query = $this->db->get('multiguna',1);
		return $query->result();
	}

	public function update($id_multi)
	{
		$object = array(
			'min_multi' => $this->input->post('min_multi'),
			'max_multi' => $this->input->post('max_multi'),
            'sm_multi' => $this->input->post('sm_multi'),
            'id_admin' => $this->input->post('id_admin')
		);
		$this->db->where('id_multi', $id_multi);
		$this->db->update('multiguna', $object);
    }

}
/* End of file ModelName.php */
?>