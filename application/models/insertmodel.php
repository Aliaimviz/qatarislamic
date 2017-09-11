<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class insertmodel extends CI_Model{

  function __construct(){
     parent::__construct();
  }

        //Insert Data In Database(Start Here)
        public function inserting1($data){
            $this->db->insert('gallery',$data);
        }

        public function inserting2($data){
            $this->db->insert('gallery',$data);
        }

        public function inserting3($data){
            $this->db->insert('gallery',$data);
        }
        //Insert Data In Database(End Here)

        //Deleting Data From Database(Start Here)
        public function deleteprojects($id){
            $this->db->delete('gallery',$id);
        }
        //Deleting Data From Database(End Here)
        
        //Show All Projects From Database
        function show_projects(){
            $query = $this->db->get('gallery');
            $query_result = $query->result();
            return $query_result;
        }
        
        // Show Only Selected Project From Database
        function show_data_id($data){
            $this->db->select('*');
            $this->db->from('gallery');
            $this->db->where('id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
            
        //Update Selected Project in Database
        function update_student_id1($id,$data){
            $this->db->where('id', $id);
            $this->db->update('gallery', $data);
        }

        //Search Data from Database for search box
        function getsearch($search) {
            if(empty($search))
            return array();
            $result = $this->db->like('name', $search)->or_like('description', $search)
            ->or_like('location', $search)
            ->get('gallery');
            return $result->result();
        } 

        //Pagination Code Start Here
        function record_count() {
            return $this->db->count_all("gallery");
        }

        function fetch_projects($limit, $start){
            $this->db->limit($limit, $start);
            $query = $this->db->get("gallery");
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        //Recent Projects
        function record_recentprojects() {
            return $this->db->count_all("gallery");
        }

        function fetch_recentprojects($limit, $start){
            $this->db->limit($limit, $start);
            $query =$this->db->get_where('gallery',array('project_cat' => 1));
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        //Active Projects
        function record_activeprojects() {
            return $this->db->count_all("gallery");
        }

        function fetch_activeprojects($limit, $start){
            $this->db->limit($limit, $start);
            $query =$this->db->get_where('gallery',array('project_cat' => 2));
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        //Future Projects
        function record_futureprojects() {
            return $this->db->count_all("gallery");
        }

        function fetch_futureprojects($limit, $start){
            $this->db->limit($limit, $start);
            $query =$this->db->get_where('gallery',array('project_cat' => 3));
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        //Pagination For Emails Page Admin Panel
        function count_emails() {
            return $this->db->count_all("email");
        }

        function fetch_emails($limit, $start){
            $this->db->limit($limit, $start);
            $query = $this->db->get("email");
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }

        //Pagination For Activity Log In Admin Panel
        function count_logs() {
            return $this->db->count_all("quoteproject");
        }

        function fetch_logs($limit, $start){
            $this->db->limit($limit, $start);
            $query = $this->db->get("quoteproject");
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
