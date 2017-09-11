<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class create_users_model extends CI_Model{

  function __construct(){
     parent::__construct();
  }

        //Insert Data In Database(Start Here)
        public function insert_users($data){
            $this->db->insert('users',$data);
        }
        //Insert Data In Database(End Here)

        //Deleting Data From Database(Start Here)
        public function delete_users($id){
            $this->db->delete('users',$id);
        }
        //Deleting Data From Database(End Here)
        
        //Pagination Code Start Here
        function count_users() {
            return $this->db->count_all("users");
        }

        function count_super_admins() {
            return $this->db->count_all("super_admin");
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
