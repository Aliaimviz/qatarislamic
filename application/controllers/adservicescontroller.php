<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adservicescontroller extends CI_Controller {

    //Function For Running Views In Web Start HEre
    function index(){
        $this->load->view('admin/ad-services',array('error'=>''));
    }

    function service2(){
        $this->load->view('admin/ad-services2',array('error'=>''));
    }

    function service3(){
        $this->load->view('admin/ad-services3',array('error'=>''));
    }

    function service4(){
        $this->load->view('admin/ad-services4',array('error'=>''));
    }
    //Function For Running Views In Web End HEre

    //Insert Data In Database(Start Here)
    function insert1($data=null){
      $this->load->model('insert_model');
      $this->insert_model->insertservice1($data);
      $this->load->view('admin/ad-services');
      print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    function insert2($data=null){
      $this->load->model('insert_model');
      $this->insert_model->insertservice2($data);
      $this->load->view('admin/ad-services2');
      print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    function insert3($data=null){
      $this->load->model('insert_model');
      $this->insert_model->insertservice3($data);
      $this->load->view('admin/ad-services3');
      print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    function insert4($data=null){
      $this->load->model('insert_model');
      $this->insert_model->insertservice4($data);
      $this->load->view('admin/ad-services4');
      print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }
    //Insert Data In Database(End Here)
  }