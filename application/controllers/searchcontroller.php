<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchcontroller extends CI_Controller {
    
    //this function run when some search anything from search box in database
    function search(){
        $this->load->model('insertmodel');
        $data['searchresult'] = $this->insertmodel->getsearch($this->input->post('search'));
        $this->load->view('header');
        $this->load->view('result', $data);
        $this->load->view('footer');
    }
	
}