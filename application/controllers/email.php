<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CI_Controller {

    //Function For Running Views In Web Start HEre
    public function index(){
        $this->load->view('contact-us',array('error'=>''));
    }
    //Function For Running Views In Web End HEre

    //Email Function Without Attachment For Contact Us Page Start Here
    public function send(){
        //load email liberary
        $this->load->library('email');
        //basic setting for email
        $this->email->from('contactus@qatarislamic.com','Qatar Islamic Contact Us From');
        $this->email->to($this->input->post('email'));
        $this->email->cc('Shahzaib.imran.aimviz@gmail.com','From Qatar Islamic');
        //get input field data for send email
        $message = 'Name : '.$this->input->post('name');
        $message .= '<br>Email : '.$this->input->post('email');
        $message .= '<br>Phone : '.$this->input->post('phone');
        $message .= '<br>Subject : '.$this->input->post('subject');
        $message .= '<br>Message : '.$this->input->post('message');
        //get input field data 
        $namee = $this->input->post('name');
        $emaill = $this->input->post('email');
        $phonee = $this->input->post('phone');
        $subjectt = $this->input->post('subject');
        $messagee = $this->input->post('message');
        //get input field data and store in array
        $data = array(
          'name'=>$namee,
          'email'=>$emaill,
          'phone'=>$phonee,
          'subject'=>$subjectt,
          'message'=>$messagee,
        );
        //send email function
        $this->email->message($message);
        $email_send =$this->email->send();
          if($email_send){
            //insert query start here
            $this->db->insert('email',$data);
            //insert query start here
            print "<script type=\"text/javascript\">alert('Your information has been submitted successfully');</script>";
            $this->load->view('header');
            $this->load->view('contact-us');
            $this->load->view('footer');
          }
          else{
            $this->db->insert('email',$data);
            print "<script type=\"text/javascript\">alert('Your information has Not been submitted successfully.Try Again');</script>";
            $this->load->view('header');
            $this->load->view('contact-us');
            $this->load->view('footer');
          }
    }
    //Email Function Without Attachment For Contact Us Page End Here

    //Email Function With Attachment For Calculate Cost Page Start Here
    public function sendEmail(){
        //these condition run when attachment is uploaded
        if($this->input->post('send_email') == 'send_email'){
          //Load Liberary For Mail To Function Start Here
          $this->load->library('email');
          //Load Liberary For Mail To Function End Here
          $config['upload_path'] = 'assets/uploads/email/';
          $config['allowed_types'] = '*';
          $this->load->library('upload', $config);
          $this->upload->do_upload('resume-upload');
            if(!$this->upload->do_upload('resume-upload')){
              $this->load->view('header');
              $this->load->view('calculate-cost');
              $this->load->view('footer');
              print "<script type=\"text/javascript\">alert('Your File Has Not Been Uploaded');</script>";
            }
            //these condition run when attachment is not uploaded
            else{
              $upload_data = $this->upload->data();
              print "<script type=\"text/javascript\">alert('Your File Has Been Uploaded');</script>";
            }
      //Basic Setting For Mailiing Function Start Here      
      $this->email->attach($upload_data['full_path']);
      $this->email->set_newline("\r\n");
      $this->email->set_crlf("\r\n");
      $this->email->from('contactus@qatarislamic.com','Qatar Islamic Project Cost');
      $this->email->to($this->input->post('email'));
      $this->email->cc('Shahzaib.imran.aimviz@gmail.com','From Qatar Islamic Project Cost');
      //Basic Setting For Mailiing Function End Here 

      //for mailing
      $message = 'Name : '.$this->input->post('name');
      $message .= '<br>Email : '.$this->input->post('name');
      $message .= '<br>Phone : '.$this->input->post('phone');
      $message .= '<br>Message : '.$this->input->post('message');
      $message .= '<br>Attach File : '.$this->input->post('resume-upload');
      //for storing data in db start here
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $phone = $this->input->post('phone');
      $message = $this->input->post('message');
      $file = $this->input->post('resume-upload');
      $ip = $this->input->ip_address();
      $currentdatetime = date('Y-m-d H:i:s');
      $image_data = $this->upload->data();
      $data = array(
        'name'=> $name,
        'email'=>$email,
        'phone'=>$phone,
        'file'=> $upload_data['full_path'],
        'message'=>$message,
        'user_ip' =>$ip,
        'date_time' => $currentdatetime,
      );
      //for storing data in db start here
      $this->email->message($name,$email,$phone,$message,$file);
      $email_send =$this->email->send();
          //these condition run when email is sended
          if($email_send){
            //insert query start here
            $this->db->insert('quoteproject',$data);
            //insert query start here
            print "<script type=\"text/javascript\">alert('Your information has been submitted successfully');</script>";
            $this->load->view('header');
            $this->load->view('calculate-cost');
            $this->load->view('footer');
          }
          //these condition run when email is not sended
          else{
            //insert query start here
            $this->db->insert('quoteproject',$data);
            //insert query start here
            print "<script type=\"text/javascript\">alert('Your information has Not been submitted successfully.Try Again');</script>";    
            $this->load->view('header');
            $this->load->view('calculate-cost');
            $this->load->view('footer');
          }
      }
    }

    //Insert Data In Database(Start Here)
    function create_cat($data=null){
        $this->load->model('pagesortingmodel');
        $this->pagesortingmodel->create_category($data);
        $this->load->view('admin/create_categories');
    }
    //Insert Data In Database(End Here)

    //Fetch Categories From Database
    function showCategoryNames(){
        $this->load->model('pagesortingmodel');
        $data['groups'] = $this->pagesortingmodel->getAllCategories();
        $this->load->view('admin/create_categories',$data);
    }

    //Insert Email And Category Id In Tbl Relation In Database
    function insertcheckdata(){
        $this->load->model('pagesortingmodel');
        $email_id = $this->input->post('selectemail[]');
        $category_id = $this->input->post('select_cat');
          foreach($email_id as $row){
            $data['cat_id'] = $category_id;
            $data['email_id'] = $row;
            $this->pagesortingmodel->insertcheckdata($data);
          }
        $this->load->view('admin/create_categories');
    }

    //make join between email table and relation table and show final category after relation
    function showdata(){
        $this->load->view('admin/emails');
        /*$category_id = $this->input->post('category_id[]');*/

        /*foreach ($category_id as $groupemails) {
            echo "<script type=\"text/javascript\">console.log(".$groupemails .");</script>";
            $this->load->library('email');
            $this->email->from('contactus@qatarislamic.com','Qatar Islamic Contact Us From');
            $this->email->to($groupemails);
            $message = '<br>Subject : '.$this->input->post('subject');
            $message .= '<br>Message : '.$this->input->post('message');     
            $this->email->message($message);
            $email_send =$this->email->send();
              if($email_send){
                $this->load->view('admin/emails');
                print "<script type=\"text/javascript\">alert('Your information has been submitted successfully');</script>";
              }
              else{
                $this->load->view('admin/emails');
                print "<script type=\"text/javascript\">alert('Your information has Not been submitted successfully.Try Again');</script>";
              }

        }*/
    }

    function sendEmail1(){
        //get category id from input
        $id = $this->input->post('category_id');

        //make join between email table and relation table and show final category after relation
        $query_result = $this->db->select('email.email', 'email_category_relations.*')
       ->from('email_category_relations as ecr', 'email as email')
       ->where('ecr.cat_id', $id)
       ->join('email', 'ecr.email_id = email.id', 'Right')->get();
        $result = $query_result->result();

          foreach ($result as $groupemails){
              $this->load->library('email');
              $this->email->from('contactus@qatarislamic.com','Qatar Islamic Contact Us From');
              $this->email->to($groupemails->email);
              $message = '<br>Subject : '.$this->input->post('subject');
              $message .= '<br>Message : '.$this->input->post('message');     
              $this->email->message($message);
              $email_send =$this->email->send();
              //echo "<script type=\"text/javascript\">alert(".$groupemails->email.");</script>";
          }
                if($email_send){
                  print "<script type=\"text/javascript\">alert('Your information has been submitted successfully');</script>";
                }
                else{
                  print "<script type=\"text/javascript\">alert('Your information has Not been submitted successfully.Try Again');</script>";
                }
                $this->load->view('admin/emails');
    }
}