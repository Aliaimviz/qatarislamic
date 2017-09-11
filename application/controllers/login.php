<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    //These Function Run automatically when link is hit
    public function __construct(){
        parent::__construct();   
            $this->load->model('login_model');
            $this->load->database();
            $this->load->library('session');
        }   
    
    //Function For Running Views In Web Start HEre
    public function index(){
        if ($this->session->userdata('super_admin_login') == 1)
            redirect(base_url() . 'admincontroller/index', 'refresh');

        if ($this->session->userdata('admin_login') == 0)
            redirect(base_url() . 'admincontroller/index', 'refresh');

        $this->load->view('admin/sign-in',array('error'=>''));
        $this->load->view('admin/footer-admin');
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

    function logout() {
        session_destroy();
        $this->load->view('admin/sign-in',array('error'=>''));
        $this->load->view('admin/footer-admin');
    }
}
