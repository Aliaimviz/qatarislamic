<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class create_users_controller extends CI_Controller {
    //These Function Run automatically when link is hit
    function __construct(){
        parent::__construct();
            $this->load->model('create_users_model');
            $this->load->library('session');
            $this->load->database();
            $this->load->library('session');
            $this->load->library('pagination');
            $this->create_users_model->count_users();
            $this->create_users_model->count_super_admins();
     }
        
    //Function For Running Views In Web Start HEre
    public function index(){
        if ($this->session->userdata('user_status') == 1)
            $this->load->view('admin/create_users');

        if ($this->session->userdata('user_status') == 0)
            print 'Access Denied';
    }

    //this condtion run when someone try to login the panel
    public function login(){
        $response = array();

        //Recieving post input of email, password from ajax request
        $email = $_POST["username"];
        $password = $_POST["password"];
        $response['submitted_data'] = $_POST;

        //Validating login
        $login_status = $this->validate_login($email, $password);
        $response['login_status'] = $login_status;
        if ($login_status == 'success') {
            $this->load->view('admin/admin');
             //Replying ajax request with validation response
        print "<script type=\"text/javascript\">alert('Welcome To Dashboard');</script>";
        }else{
            $this->load->view('admin/sign-in',array('error'=>''));
            $this->load->view('admin/footer-admin');
            print "<script type=\"text/javascript\">alert('Incorrect Credentials');</script>";
        }
    }

    //Validating login from ajax request
    function validate_login($email = '', $password = '') {
        $credential = array('user_email' => $email, 'user_password' => $password);


        // Checking login credential for super admin
        $query = $this->db->get_where('super_admin', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->session->set_userdata('super_admin_login', '1');
            $this->session->set_userdata('id', $row->id);
            $this->session->set_userdata('user_email', $row->user_email);
            $this->session->set_userdata('login_type', 'super_admin');
            $this->session->set_userdata('user_status', '1');
            return 'success';
        }

        // Checking login credential for Normal Admins
        $query = $this->db->get_where('users', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->session->set_userdata('admin_login', '0');
            $this->session->set_userdata('id', $row->id);
            $this->session->set_userdata('user_email', $row->user_email);
            $this->session->set_userdata('login_type', 'admin');
            $this->session->set_userdata('user_status', '0');
            return 'success';
        }
        return 'invalid';
    }

    //Insert Users In DB
    function insert_users(){
        $user_email = $this->input->post('user_email');
        $user_password = $this->input->post('user_password');
        $data = array(
          'user_email'=>$user_email,
          'user_password' => $user_password,
        );
        $this->create_users_model->insert_users($data);
        $this->load->view('admin/create_users');
        print "<script type=\"text/javascript\">alert('User Has Been Successfully Added.');</script>";
    }

     function delete($id){
        $this->create_users_model->delete_users($id);
        $this->db->where('id', $id);
        $this->db->delete('users');
        $this->load->view('admin/create_users');
        print "<script type=\"text/javascript\">alert('Your Information Has Been Successfully Deleted');</script>";
    }
    //Delete Users
    function delete_users(){
        $config = array();
        $config["base_url"] = base_url() . "create_users_controller/delete_users";
        $config["total_rows"] = $this->create_users_model->count_users();
        $config["per_page"] = 18;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->create_users_model->fetch_users($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->session->userdata('user_status') == 1)
            $this->load->view('admin/delete_users',$data);

        if ($this->session->userdata('user_status') == 0)
            print 'Access Denied';
    }
}
