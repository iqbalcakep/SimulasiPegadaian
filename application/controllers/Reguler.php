<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class Reguler extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_post() {
        $up = $this->post('up');
        $tenor = $this->post('tenor');
      //  $request = $this->db->query("SELECT * FROM reguler join administrasi on administrasi.id_admin = reguler.id_admin WHERE $up>=reguler.min_reg AND $up<=reguler.max_reg AND administrasi.bulan=$tenor")->result();
        $this->response(array(
            "total"=>"nafiganteng",
            "total2" => 200
        ), 200);
    }
    // function index_get() {
    //     $id_reguler = $this->get('id_reguler');
    //     if ($id_reguler == '') {
    //         $reguler = $this->db->get('reguler')->result();
    //     } else {
    //         $this->db->where('id_reguler', $id_reguler);
    //         $reguler = $this->db->get('reguler')->result();
    //     }
    //     $this->response($reguler, 200);
    // }
}