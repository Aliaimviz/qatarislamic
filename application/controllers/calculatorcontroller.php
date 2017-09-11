<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calculatorcontroller extends CI_Controller {

	//Function For Running Views In Web Start HEre
	function index(){
    	$this->load->view('admin/ad-calculate',array('error'=>''));
	}
	//Function For Running Views In Web End HEre

	//Insert Data In Database(Start Here)
	function insert($data=null){
		$this->load->model('calculatormodel');
		$this->calculatormodel->insertcalcvalue($data);
		$this->load->view('admin/ad-calculate');
		print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
	}
	//Insert Data In Database(End Here)
}