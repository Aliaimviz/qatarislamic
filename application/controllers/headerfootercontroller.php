<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Headerfootercontroller extends CI_Controller{

	//Function For Running Views In Web Start HEre
	function index(){
		$this->load->view('admin/ad-headerfooter',array('error'=>''));
	}
	//Function For Running Views In Web End HEre

	//Insert Data In Database(Start Here)
	function insert($data=null) {
		$this->load->model('headerfootermodel');
		$this->headerfootermodel->insert($data);
		$this->load->view('admin/ad-headerfooter');
		print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
	}

	function insert_copyright($data=null) {
		$this->load->model('headerfootermodel');
		$this->headerfootermodel->insert_copyright($data);
		$this->load->view('admin/ad-headerfooter');
		print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
	}	

	function change_pages_title(){
        $this->load->model('headerfootermodel');
        $home = $this->input->post('home_title');
        $about = $this->input->post('about_title');
        $projects = $this->input->post('projects_title');
        $calculate = $this->input->post('calculate_title');
        $services = $this->input->post('services_title');
        $contact = $this->input->post('contact_title');
        $data = array(
          'home'=>$home,
          'about_us' => $about,
          'our_projects' => $projects,
          'calculate_cost' => $calculate, 
          'our_services' => $services,
          'contact_us' => $contact,
        );
        $this->headerfootermodel->change_pages_title($data);
        $this->load->view('admin/ad-headerfooter');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }
	//Insert Data In Database(End Here)

	//Insert Data In Database(Start Here)
    function insertlogo(){
    	$this->load->model('headerfootermodel');
        $imgurl = $this->upload_logo('myfile','assets/uploads/logo');
        $data = array(
          'image_path'=>$imgurl,
        );
        $this->headerfootermodel->insertlogo($data);
        $this->load->view('admin/ad-headerfooter');
        print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Inserted');</script>";
    }    

	//upload logo_image In Database And Storing Folder
    function upload_logo($filename,$folder){
          $config['upload_path'] = 'assets/uploads/logo/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_width'] = "1024";
          $config['max_height'] = "768";
          $this->load->library('upload', $config);
          //Condition Run When Image Is not uploaded
          if(!$this->upload->do_upload($filename)){
              print "<script type=\"text/javascript\">alert('Your Image Has Not Been Successfully Uploaded.Try Again');</script>"; 
            }
            //Condition Run When Image Is uploaded
            else{
                $data = $this->upload->data();
                print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Updated.');</script>";        
                $ext = explode('.',$data['full_path']);
                $fileName = time().'.'.$ext[1];
                rename($data['full_path'],$data['file_path'].$fileName);
                return $fileName;       
            }
    }
}