<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class headerfootermodel extends CI_Model{
	
	//Insert Values In Database
	function insert(){
		//Get Data From Input
		$fb=$this->input->post('fb');
		$twitter=$this->input->post('twitter');
		$instagram=$this->input->post('instagram');
		$email=$this->input->post('email');
		$number=$this->input->post('number');
		//Insert Fields Values In Database As Array
		$data = array(
			'fb'=>$fb,
			'twitter'=>$twitter,
			'insta'=>$instagram,
			'email'=>$email,
			'number'=>$number
		);
		$this->db->update('header',$data);
	}

	//Insert About Us Page Meta Data In Database
    function insert_aboutmeta($data){
        $this->db->update('aboutus-meta',$data);
    }

    //Insert Our Projects Page Meta Data In Database
    function insert_ourprojectsmeta($data){
        $this->db->update('ourprojects_meta',$data);
    }

    //Insert Our Projects Page Meta Data In Database
    function insert_calculatecostmeta($data){
        $this->db->update('calculatecost_meta',$data);
    }

    //Insert Our Projects Page Meta Data In Database
    function insert_ourservicesmeta($data){
        $this->db->update('ourservices_meta',$data);
    }

    //Insert Our Projects Page Meta Data In Database
    function insert_contactusmeta($data){
        $this->db->update('contactus_meta',$data);
    }

    //Insert Our Projects Page Meta Data In Database
    function insert_homemeta($data){
        $this->db->update('home_meta',$data);
    }

    //Insert Copy Right Text Of Footer In Database
    function insert_copyright($data){
        $copytext=$this->input->post('copytext');
        //Insert Fields Values In Database As Array
        $data = array(
            'copy_right'=>$copytext,
            
        );
        $this->db->update('footer_copyright',$data);
    }

    //Insert Copy Right Text Of Footer In Database
    function change_pages_title($data){
        $this->db->update('webapp_title',$data);
    }

    //Insert Logo Image Path In Database
    function insertlogo($data){
        $this->db->update('site_logo',$data);
    }
}