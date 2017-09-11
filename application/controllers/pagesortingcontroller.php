<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pagesortingcontroller extends CI_Controller {

    	//Function For Running Views In Web Start HEre
    	public function index(){
          $this->load->view('admin/pagesorting',array('error'=>''));
      }
      //Function For Running Views In Web End HEre

      //Insert Header Menus In Db Start Here
      function insert($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->insert($data);
          $this->load->view('admin/pagesorting');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function footer($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->footer($data);
          $this->load->view('admin/pagesorting');
      }
      //Insert Header Menus In Db End Here

      //Deleting Data From Database Start Here
      function deleteDB1($id){
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->deletemenuheader($id);
          $this->db->where('id', $id);
          $this->db->delete('linksorting');
          $this->load->view('admin/pagesorting');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Deleted');</script>";
         
      }
      
      function deleteDB2($id){
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->deletemenufooter($id);
          $this->db->where('id', $id);
          $this->db->delete('linksortingfooter');
          $this->load->view('admin/pagesorting');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Deleted');</script>";
      }
      //Deleting Data From Database End Here

      //Insert Content Of Website In Database For Making its dynamic start here

      //Content OF About Us Page Start Here
      function mission($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->mission($data);
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function who($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->who($data);
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function howwork($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->howwork($data);
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function team() {
          $this->load->model('pagesortingmodel');
          //Main Heading Start Here
          $mainheading=$this->input->post('mainheading');
          //Main Heading end Here
          //Team Member 1 Fields Start Here
          $image1 = $this->input->post('myfile');
          $name1 = $this->input->post('name');
          $description1 = $this->input->post('description');
          $imgurl1 = $this->uploadimages('myfile','assets/uploads/team');
          if (!empty($imgurl1)) {
            //Team Member 1 Fields End Here
            $data = array('mainheading'=>$mainheading,'image'=>$imgurl1,'name' => $name1,'description' => $description1);
          $this->pagesortingmodel->team($data);
          }else{
            //Team Member 1 Fields End Here
            $data = array('mainheading'=>$mainheading, 'name' => $name1, 'description' => $description1);
          $this->pagesortingmodel->team($data);
          }
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function team2() {
          $this->load->model('pagesortingmodel');
          //Team Member 2 Fields Start Here
          $image2 = $this->input->post('myfile2');
          $name2 = $this->input->post('name');
          $description2 = $this->input->post('description');
          $imgurl2 = $this->uploadimages('myfile2','assets/uploads/team');
          if (!empty($imgurl2)) {
            //Team Member 1 Fields End Here
            $data = array('image2'=>$imgurl2,'name3' => $name2,'description2' => $description2);
            $this->pagesortingmodel->team2($data);
          }else{
            $data = array('name2' => $name2, 'description2' => $description2);
            $this->pagesortingmodel->team2($data);
          }
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function team3() {
          $this->load->model('pagesortingmodel');
          //Team Member 3 Fields Start Here
          $image3 = $this->input->post('myfile3');
          $name3 = $this->input->post('name');
          $description3 = $this->input->post('description');
          $imgurl3 = $this->uploadimages('myfile3','assets/uploads/team');
          if (!empty($imgurl3)) {
            //Team Member 1 Fields End Here
            $data = array('image3'=>$imgurl3,'name3' => $name3,'description3' => $description3);
            $this->pagesortingmodel->team3($data);
          }else{
            $data = array('name3' => $name3, 'description3' => $description3);
            $this->pagesortingmodel->team3($data);
          }
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function team4() {
          $this->load->model('pagesortingmodel');
          //Team Member 4 Fields Start Here
          $image4 = $this->input->post('myfile4');
          $name4 = $this->input->post('name');
          $description4 = $this->input->post('description');
          $imgurl4 = $this->uploadimages('myfile4','assets/uploads/team');
          if (!empty($imgurl4)) {
            //Team Member 1 Fields End Here
            $data = array('image4'=>$imgurl4,'name4' => $name4,'description4' => $description4);
            $this->pagesortingmodel->team3($data);
          }else{
            $data = array('name4' => $name4, 'description4' => $description4);
            $this->pagesortingmodel->team4($data);
          }
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function aboutmain($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->aboutmain($data);
          $this->load->view('admin/about_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }
      //Content OF About Us Page Start Here

      //Content OF Our Projects Page Start Here
      function projectmain($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->projectmain($data);
          $this->load->view('admin/our_projects');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function projectbottom($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->projectbottom($data);
          $this->load->view('admin/our_projects');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }
      //Content OF Our Projects Page End Here

      //Content OF Calculate COst Page Start Here
      function calculatetop($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->calculatetop($data);
          $this->load->view('admin/calculate_cost');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function calculatebottom($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->calculatebottom($data);
          $this->load->view('admin/calculate_cost');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      function calculatetestimonial($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->calculatetestimonial($data);
          $this->load->view('admin/calculate_cost');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }
      //Content OF Calculate COst Page End Here

      //Content OF Our Services Page Start Here
      function servicestop($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->servicestop($data);
          $this->load->view('admin/our_services');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }
      //Content OF Our Services Page End Here

      //Content OF Contact Us Page Start Here
      function contacttop($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->contacttop($data);
          $this->load->view('admin/contact_us');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }

      //Content OF Home Page Page Start Here
      function hometop($data=null) {
          $this->load->model('pagesortingmodel');
          $this->pagesortingmodel->hometop($data);
          $this->load->view('admin/webcontent');
          print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Inserted');</script>";
      }
      //Content OF Home Page Page End Here

    //upload Team Member 1 Image In Database And Storing Folder
    public function uploadimages($filename,$folder){
          $config['upload_path'] = 'assets/uploads/team';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_width'] = "1024";
          $config['max_height'] = "768";
          $this->load->library('upload', $config);
          //Condition Run When Image Is not uploaded
          if(!$this->upload->do_upload($filename)){
              $this->load->view('admin/about_us');
              print "<script type=\"text/javascript\">alert('Your Image Has Not Been Successfully Uploaded.Try Again');</script>"; 
            }
            //Condition Run When Image Is uploaded
            else{
                $data = $this->upload->data();
                print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Updated,But Your Not Uploaded Any Image For Updating.');</script>";        
                $ext = explode('.',$data['full_path']);
                $fileName = time().'.'.$ext[1];
                rename($data['full_path'],$data['file_path'].$fileName);
                return $fileName;
             }
    }
}