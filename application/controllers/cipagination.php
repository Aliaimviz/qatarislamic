<?php
class cipagination extends CI_Controller{
 
  function __construct()
{
parent::__construct();
$this->load->model("cipaginationmodel");
$this->load->library("pagination");
}
public function example() {
        $config = array();
        $config["base_url"] = base_url() . "cipagination/example";
        $config["total_rows"] = $this->cipaginationmodel->record_count();
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['cur_tag_open'] = ' ';
        $config['cur_tag_close'] = '';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->cipaginationmodel->fetch_employees($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if($this->input->post('ajax')) {
         $this->load->view('ciajaxpagination',$data);
        } 
        else {
         $this->load->view('cipagination',$data);
       }
    }
}
?>