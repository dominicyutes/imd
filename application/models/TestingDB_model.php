<?php
class TestingDB_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_dummy(){
         $query = $this->db->get("daily_obs_temp");
         return $query->result();
}
}
?>