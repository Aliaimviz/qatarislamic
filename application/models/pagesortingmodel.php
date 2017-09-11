<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pagesortingmodel extends CI_Model{

	//Insert Header Menus In Database
	function insert(){
		$name=$this->input->post('name');
		$link=$this->input->post('link');
		$order=$this->input->post('order');
		$data = array(
			'name'=>$name,
			'link'=>$link,
			'id'=>$order,
		);
		//$this->db->insert('linksorting', $data);
		$this->db->where('order', $order);
		$this->db->insert('linksorting', $data);
	}

	//Delete Header Menus In Database
	function deletemenuheader($id){
       $this->db->delete('linksorting',$id);
    }

    //Insert Footer Menus In Database
	function footer(){
		$name=$this->input->post('name');
		$link=$this->input->post('link');
		$order=$this->input->post('order');
		$about=$this->input->post('about');
		$data = array(
			'name'=>$name,
			'link'=>$link,
			'id'=>$order,
		);
		$this->db->where('order', $order);
		$this->db->insert('linksortingfooter', $data);
	}

	//Delete footer Menus In Database
	function deletemenufooter($id){
       $this->db->delete('linksortingfooter',$id);
    }

    //Insert Content Of Website In Database For Making its dynamic start here

    //Content OF About Us Page Start Here
	function mission(){
		$heading=$this->input->post('heading');
		$about=$this->input->post('about');
		$data = array(
			'heading'=>$heading,
			'ourmission'=>$about,
		);
		$this->db->update('about-mission',$data);
	}

	function who(){
		$heading=$this->input->post('heading');
		$who=$this->input->post('who');
		$data = array(
			'heading'=>$heading,
			'whoweare'=>$who,
		);
		$this->db->update('about-who',$data);
	}

	function howwork(){
		$mainheading=$this->input->post('mainheading');
		$heading1=$this->input->post('heading1');
		$heading2=$this->input->post('heading2');
		$heading3=$this->input->post('heading3');
		$heading4=$this->input->post('heading4');
		$planning=$this->input->post('planning');
		$technical=$this->input->post('technical');
		$estimation=$this->input->post('estimation');
		$design=$this->input->post('design');
		$data = array(
			'mainheading'=>$mainheading,
			'heading1'=>$heading1,
			'heading2'=>$heading2,
			'heading3'=>$heading3,
			'heading4'=>$heading4,
			'planning'=>$planning,
			'estimation'=>$estimation,
			'technical'=>$technical,
			'design'=>$design,
		);
		$this->db->update('howwork',$data);
	}

	//About Us Page/Team Members Section Started From Here
	function team($data){
		$this->db->update('team',$data);
	}

	function team2($data){
		$this->db->update('team',$data);
	}

	function team3($data){
		$this->db->update('team',$data);
	}

	function team4($data){
		$this->db->update('team',$data);
	}
	//About Us Page/Team Members Section Ended From Here

	function aboutmain(){
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$data = array(
			'heading'=>$heading,
			'description'=>$description,
		);
		$this->db->update('abouttop',$data);
	}
	//Content OF About Us Page End Here

	//Content OF Our Projects Page Start Here
	function projectmain(){
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$data = array(
			'heading'=>$heading,
			'description'=>$description,
		);
		$this->db->update('projecttop',$data);
	}

	function projectbottom(){
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$data = array(
			'heading'=>$heading,
			'description'=>$description,
		);
		$this->db->update('projectbottom',$data);
	}
	//Content OF Our Projects Page End Here

	//Content OF Calculate COst Page Start Here
	function calculatetop(){
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$data = array(
			'heading'=>$heading,
			'description'=>$description,
		);
		$this->db->update('calculatetop',$data);
	}

	function calculatebottom(){
		$heading1=$this->input->post('heading1');
		$description1=$this->input->post('description1');
		$heading2=$this->input->post('heading2');
		$description2=$this->input->post('description2');
		$heading3=$this->input->post('heading3');
		$description3=$this->input->post('description3');
		$heading4=$this->input->post('heading4');
		$description4=$this->input->post('description4');
		$data = array(
			'heading1'=>$heading1,
			'description1'=>$description1,
			'heading2'=>$heading2,
			'description2'=>$description2,
			'heading3'=>$heading3,
			'description3'=>$description3,
			'heading4'=>$heading4,
			'description4'=>$description4,
		);
		$this->db->update('calculatebottom',$data);
	}

	function calculatetestimonial(){
		$name1=$this->input->post('name1');
		$description1=$this->input->post('description1');
		$name2=$this->input->post('name2');
		$description2=$this->input->post('description2');
		$name3=$this->input->post('name3');
		$description3=$this->input->post('description3');
			$data = array(
			'description1'=>$description1,
			'name1'=>$name1,
			'description2'=>$description2,
			'name2'=>$name2,
			'description3'=>$description3,
			'name3'=>$name3,
			);
		$this->db->update('calculatetestimonial',$data);
	}
	//Content OF Calculate COst Page End Here

	//Content OF Our Services Page Start Here
	function servicestop(){
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$data = array(
			'heading'=>$heading,
			'description'=>$description,
		);
		$this->db->update('servicestop',$data);
	}
	//Content OF Our Services Page End Here

	//Content OF Contact Us Page Start Here
	function contacttop(){
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$data = array(
			'heading'=>$heading,
			'description'=>$description,
		);
		$this->db->update('contacttop',$data);
	}
	//Content OF Contact Us Page End Here

	//Content OF Home Page Start Here
	function hometop(){
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$data = array(
			'heading'=>$heading,
			'description'=>$description,
		);
		$this->db->update('hometop',$data);
	}
	//Content OF Home Page End Here

	//Insert Content Of Website In Database For Making its dynamic End here

	//Insert Category Name In Db
	function create_category(){
		$make_category=$this->input->post('make_cat');
		$data = array(
			'cat_name'=>$make_category,
		);
		$this->db->insert('email_category',$data);
	}

	//Fetch Categories From Database
	function getAllCategories(){
       $query = $this->db->query('SELECT cat_name FROM email_category');
	   return $query->result();
	}

	//Insert Email And Category Id In Tbl Relation In Database
	function insertcheckdata($data){
		$this->db->insert('email_category_relations',$data);
	}

	//make realtion and show caegory
	function showdata(){

		
	}
}