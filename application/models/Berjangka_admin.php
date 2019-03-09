<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berjangka_admin extends CI_Model {
    public function getBerjangka(){
		$this->db->select('*');
		$this->db->from('fleksi_berjangka');
		$this->db->join('administrasi','administrasi.id_admin = fleksi_berjangka.id_admin');
		$query = $this->db->get();
		return $query->result();
	}

    public function create()
    {
        $object = array(
            'min_fb' => $this->input->post('min_fb'),
            'max_fb' => $this->input->post('max_fb'),
            'sm_fb' => $this->input->post('sm_fb'),
            'pola_fb' => $this->input->post('pola_fb'),
            'id_admin' => $this->input->post('id_admin'),
        );
        $this->db->insert('fleksi_berjangka', $object);	
    }

    public function getAdmin(){
		$this->db->select('*');
		$this->db->from('administrasi');
		$query = $this->db->get();
		return $query->result();
    }
    
    public function delete($id_fb)
	{
		$this->db->delete('fleksi_berjangka', array('id_berjangka' => $id_fb));
    }
    
    public function getBerjangkaById($id_fb)
	{
		$this->db->where('id_berjangka', $id_fb);
		$query = $this->db->get('fleksi_berjangka',1);
		return $query->result();
	}

	public function update($id_fb)
	{
		$object = array(
			'min_fb' => $this->input->post('min_fb'),
			'max_fb' => $this->input->post('max_fb'),
            'sm_fb' => $this->input->post('sm_fb'),
            'pola_fb' => $this->input->post('pola_fb'),
            'id_admin' => $this->input->post('id_admin')
		);
		$this->db->where('id_berjangka', $id_fb);
		$this->db->update('fleksi_berjangka', $object);
    }

}
/* End of file ModelName.php */
?>