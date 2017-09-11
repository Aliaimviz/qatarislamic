<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_model extends CI_Model{

  function __construct(){
     parent::__construct();
  }

        function count_users() {
            return $this->db->count_all("users");
        }

        function fetch_users($limit, $start){
            $this->db->limit($limit, $start);
            $query = $this->db->get("users");
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }
        //Pagination Code End Here
}
