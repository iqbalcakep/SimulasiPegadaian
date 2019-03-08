<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sekali_admin extends CI_Model {
    public function getSekali(){
		$this->db->select('*');
		$this->db->from('fleksi_sekali');
		$this->db->join('administrasi','administrasi.id_admin = fleksi_sekali.id_admin');
		$query = $this->db->get();
		return $query->result();
	}

    public function create()
    {
        $object = array(
            'min_fs' => $this->input->post('min_fs'),
            'max_fs' => $this->input->post('max_fs'),
            'sm_fs' => $this->input->post('sm_fs'),
            'id_admin' => $this->input->post('id_admin'),
        );
        $this->db->insert('fleksi_sekali', $object);	
    }

    public function getAdmin(){
		$this->db->select('*');
		$this->db->from('administrasi');
		$query = $this->db->get();
		return $query->result();
    }
    
    public function delete($id_fs)
	{
		$this->db->delete('fleksi_sekali', array('id_fleksi' => $id_fs));
    }
    
    public function getSekaliById($id_fs)
	{
		$this->db->where('id_fleksi', $id_fs);
		$query = $this->db->get('fleksi_sekali',1);
		return $query->result();
	}

	public function update($id_fs)
	{
		$object = array(
			'min_fs' => $this->input->post('min_fs'),
			'max_fs' => $this->input->post('max_fs'),
            'sm_fs' => $this->input->post('sm_fs'),
            'id_admin' => $this->input->post('id_admin')
		);
		$this->db->where('id_fleksi', $id_fs);
		$this->db->update('fleksi_sekali', $object);
    }

}
/* End of file ModelName.php */
?>