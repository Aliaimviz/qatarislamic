<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admincontroller extends CI_Controller {
    //These Function Run automatically when link is hit
    function __construct(){
        parent::__construct();
            $this->load->model('insertmodel');
            $this->load->library("pagination");
    }
    
    //Projects View Start Here
    function index(){
        $this->load->view('admin/admin',array('error'=>''));
    }

    function active(){
        $this->load->view('admin/ad-active',array('error'=>''));
    }

    function future(){
        $this->load->view('admin/ad-future',array('error'=>''));
    }

    function projectupdate(){
        $this->load->view('admin/recent_update',array('error'=>''));
    }

    function editproject(){
        $id = $this->uri->segment(3);
        $data['single_project'] = $this->insertmodel->show_data_id($id);
        $this->load->view('admin/update',$data);
    }

    function deleteprojects(){
        $config = array();
        $config["base_url"] = base_url() . "admincontroller/deleteprojects";
        $config["total_rows"] = $this->insertmodel->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->insertmodel->fetch_projects($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view('admin/delete_projects',$data);
    }

    function show_data_id(){
        $config = array();
        $config["base_url"] = base_url() . "admincontroller/show_data_id";
        $config["total_rows"] = $this->insertmodel->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->insertmodel->fetch_projects($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $id = $this->uri->segment(3);
        $data['single_project'] = $this->insertmodel->show_data_id($id);
        $this->load->view('admin/recent_update',$data);
    }
    //End Here

    function webcontent(){
        $this->load->view('admin/webcontent',array('error'=>''));
    }

    function aboutus(){
        $this->load->view('admin/about_us',array('error'=>''));
    }

    function ourprojects(){
        $this->load->view('admin/our_projects',array('error'=>''));
    }

    function calculatecost(){
        $this->load->view('admin/calculate_cost',array('error'=>''));
    }

    function ourservices(){
        $this->load->view('admin/our_services',array('error'=>''));
    }

    function contactus(){
        $this->load->view('admin/contact_us',array('error'=>''));
    }

    function sendemails(){
        $this->load->view('admin/emails',array('error'=>''));
    }

    function activity_log(){
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "admincontroller/activity_log";
        $config["total_rows"] = $this->insertmodel->count_logs();
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->insertmodel->fetch_logs($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view('admin/activity_log',$data);
    }

    function create_cat(){
        $this->load->view('admin/create_categories',array('error'=>''));
    }

    function read_emails(){
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "admincontroller/read_emails";
        $config["total_rows"] = $this->insertmodel->count_emails();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->insertmodel->fetch_emails($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view('admin/read_emails',$data);
    }
    //Functions For Running Views In Website End Here

    //Insert Data In Database(Start Here)
    function insertDB1(){
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->uploadfile('myfile','assets/uploads/projects');
        $data = array(
          'imageurl'=>$imgurl,
          'name' => $name,
          'description' => $description,
          'location' => $location, 
          'project_cat' => 1
        );
        $this->insertmodel->inserting1($data);
        $this->load->view('admin/admin');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    function insertDB2(){
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->uploadfile2('myfile2','assets/uploads/projects');
        $data = array(
          'imageurl'=>$imgurl,
          'name' => $name, 
          'description' => $description,
          'location' => $location, 
          'project_cat' => 2
        );
        $this->insertmodel->inserting2($data);
        $this->load->view('admin/ad-active');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }

    function insertDB3(){
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->uploadfile3('myfile3','assets/uploads/projects');
        $data = array(
          'imageurl'=>$imgurl,
          'name' => $name, 
          'description' => $description,
          'location' => $location, 
          'project_cat' => 3
        );
        $this->insertmodel->inserting3($data);
        $this->load->view('admin/ad-future');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
    }
    //Insert Data In Database(End Here)

    //Deleting Data From Database(Start Here)
    function deleteDB1($id){
        $this->load->model('insertmodel');
        $this->insertmodel->deleteprojects($id);
        $this->db->where('id', $id);
        $this->db->delete('gallery');
        $this->load->view('admin/admin');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Deleted');</script>";
    }
    //Deleting Data From Database(End Here)

    //Update Selected Project in Database
    function update_data_id(){
        $id= $this->input->post('id');
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->updateimage('myfile','assets/uploads/projects');
        if (!empty($imgurl)) {
            $data = array('imageurl'=>$imgurl,'name' => $name, 'description' => $description,'location' => $location);
            $this->insertmodel->update_student_id1($id,$data);
        }else{
            $data = array('name' => $name, 'description' => $description,'location' => $location);
            $this->insertmodel->update_student_id1($id,$data);
        }
        //$data = array('imageurl'=>$imgurl,'name' => $name, 'description' => $description,'location' => $location);
        //$this->insertmodel->update_student_id1($id,$data);
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Updated.');</script>";
        $this->show_data_id();


    }

    //upload File In Database And Storing Folder Both For Category 1
    function uploadfile($filename,$folder){
          $config['upload_path'] = 'assets/uploads/projects/';
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
                print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Uploaded');</script>";        
                $ext = explode('.',$data['full_path']);
                $fileName = time().'.'.$ext[1];
                rename($data['full_path'],$data['file_path'].$fileName);
                return $fileName;  
              }
    }

    //upload File In Database And Storing Folder Both For Category 1
    function uploadfile2($filename,$folder){
          $config['upload_path'] = 'assets/uploads/projects/';
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
                print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Uploaded');</script>";        
                $ext = explode('.',$data['full_path']);
                $fileName = time().'.'.$ext[1];
                rename($data['full_path'],$data['file_path'].$fileName);
                return $fileName;        
            }
    }

    //upload File In Database And Storing Folder Both For Category 1
    function uploadfile3($filename,$folder){
          $config['upload_path'] = 'assets/uploads/projects/';
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
                print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Uploaded');</script>";        
                $ext = explode('.',$data['full_path']);
                $fileName = time().'.'.$ext[1];
                rename($data['full_path'],$data['file_path'].$fileName);
                return $fileName;        
            }
    }
    
    //upload File In Database And Storing Folder Both For Category 1
    function updateimage($filename,$folder){
          $config['upload_path'] = 'assets/uploads/projects/';
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
                print "<script type=\"text/javascript\">alert('Your Information Is Updated But You Are Not Selected Any Image.');</script>";        
                $ext = explode('.',$data['full_path']);
                $fileName = time().'.'.$ext[1];
                rename($data['full_path'],$data['file_path'].$fileName);
                return $fileName;       
            }
    }
}