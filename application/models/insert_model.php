<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class insert_model extends CI_Model{
	
	//Update Services In Database Start Here
	function insertservice1(){
	$name=$this->input->post('service_name1');
	$service_subheading=$this->input->post('service_subheading');
	$description=$this->input->post('service_description1');
	$data = array(
	'name1'=>$name,
	'description1'=>$description,
	'subheading1'=>$service_subheading,
	);
	$this->db->update('services', $data);
	//$this->db->insert('services', $data); 
	}

	function insertservice2(){
	$name=$this->input->post('service_name');
	$service_subheading=$this->input->post('service_subheading');
	$description=$this->input->post('service_description');
	$data = array(
	'name2'=>$name,
	'description2'=>$description,
	'subheading2'=>$service_subheading,
	);

	$this->db->update('services',$data);
	}

	function insertservice3(){
	$name=$this->input->post('service_name');
	$service_subheading=$this->input->post('service_subheading');
	$description=$this->input->post('service_description');
	$data = array(
	'name3'=>$name,
	'description3'=>$description,
	'subheading3'=>$service_subheading,
	);

	$this->db->update('services',$data);
	}

	function insertservice4(){
	$name=$this->input->post('service_name');
	$service_subheading=$this->input->post('service_subheading');
	$description=$this->input->post('service_description');
	$data = array(
	'name4'=>$name,
	'description4'=>$description,
	'subheading4'=>$service_subheading,
	);

	$this->db->update('services',$data);
	}
	//Update Services In Database End Here
 	
}