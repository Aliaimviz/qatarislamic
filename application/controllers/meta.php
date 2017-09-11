<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller {
    //Function For Running Views In Web App
    function index(){
        $this->load->view('admin/about_us',array('error'=>''));
    }
    
    //Insert About Us Page Meta Data In Database
    function insert_aboutmeta(){
        $this->load->model('headerfootermodel');
        $keywords = $this->input->post('meta_keywords');
        $description = $this->input->post('meta_description');
        $data = array(
          'meta_keywords'=>$keywords,
          'meta_description' => $description,
        );
        $this->headerfootermodel->insert_aboutmeta($data);
        $this->load->view('admin/about_us');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    //Insert Our Projects Page Meta Data In Database
    function insert_ourprojectsmeta(){
        $this->load->model('headerfootermodel');
        $keywords = $this->input->post('meta_keywords');
        $description = $this->input->post('meta_description');
        $data = array(
          'meta_keywords'=>$keywords,
          'meta_description' => $description,
        );
        $this->headerfootermodel->insert_ourprojectsmeta($data);
        $this->load->view('admin/our_projects');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    //Insert Calculate Cost Page Meta Data In Database
    function insert_calculatecostmeta(){
        $this->load->model('headerfootermodel');
        $keywords = $this->input->post('meta_keywords');
        $description = $this->input->post('meta_description');
        $data = array(
          'meta_keywords'=>$keywords,
          'meta_description' => $description,
        );
        $this->headerfootermodel->insert_calculatecostmeta($data);
        $this->load->view('admin/about_us');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    //Insert Our Services Page Meta Data In Database
    function insert_ourservicesmeta(){
        $this->load->model('headerfootermodel');
        $keywords = $this->input->post('meta_keywords');
        $description = $this->input->post('meta_description');
        $data = array(
          'meta_keywords'=>$keywords,
          'meta_description' => $description,
        );
        $this->headerfootermodel->insert_ourservicesmeta($data);
        $this->load->view('admin/about_us');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    //Insert Contact Us Page Meta Data In Database
    function insert_contactusmeta(){
        $this->load->model('headerfootermodel');
        $keywords = $this->input->post('meta_keywords');
        $description = $this->input->post('meta_description');
        $data = array(
          'meta_keywords'=>$keywords,
          'meta_description' => $description,
        );
        $this->headerfootermodel->insert_contactusmeta($data);
        $this->load->view('admin/about_us');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    //Insert Home Page Meta Data In Database
    function insert_homemeta(){
        $this->load->model('headerfootermodel');
        $keywords = $this->input->post('meta_keywords');
        $description = $this->input->post('meta_description');
        $data = array(
          'meta_keywords'=>$keywords,
          'meta_description' => $description,
        );
        $this->headerfootermodel->insert_homemeta($data);
        $this->load->view('admin/about_us');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }
}