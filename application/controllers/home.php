<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	//These Function Run automatically when link is hit
    function __construct(){
        parent::__construct();
            $this->load->model('insertmodel');
    }

	//Function For Running Views In Web Start HEre
	public function index(){
		$this->load->view('index');
	}

	public function about_view(){
		$this->load->view('header');
		$this->load->view('about-us');
		$this->load->view('footer');
	}

	public function calculate_view(){
		$this->load->view('header');
		$this->load->view('calculate-cost');
		$this->load->view('footer');
	}

	public function contact_view(){
		$this->load->view('header');
		$this->load->view('contact-us');
		$this->load->view('footer');
	}

	public function work_view(){
		$this->load->view('header');
		$this->load->view('how-we-work');
		$this->load->view('footer');
	}

	public function project_view(){
		$this->load->library("pagination");
		$config = array();
		$config['pagination']['full_tag_open'] = '<ul>';
		$config['pagination']['full_tag_close'] = '</ul>';
		$config['pagination']['first_tag_open'] = '<li>';
		$config['pagination']['first_tag_close'] = '</li>';
		$config['pagination']['last_tag_open'] = '<li>';
		$config['pagination']['last_tag_close'] = '</li>';
		$config['pagination']['next_tag_open'] = '<li>';
		$config['pagination']['next_tag_close'] = '</li>';
		$config['pagination']['prev_tag_open'] = '<li>';
		$config['pagination']['prev_tag_close'] = '</li>';
		$config['pagination']['cur_tag_open'] = '<li class="disabled"><span>';
		$config['pagination']['cur_tag_close'] = '</span></li>';
		$config['pagination']['num_tag_open'] = '<li>';
		$config['pagination']['num_tag_close'] = '</li>';
		$config["base_url"] = base_url() . "home/project_view";
        $config["total_rows"] = $this->insertmodel->record_recentprojects();
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $config["num_links"] = 1;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results1"] = $this->insertmodel->fetch_projects($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
		$this->load->view('header');
		$this->load->view('our-projects',$data);
		$this->load->view('footer');
	}

	public function servicessub_view(){
		$this->load->view('header');
		$this->load->view('our-services-sub');
		$this->load->view('footer');
	}

	public function servicesmen_view(){
		$this->load->view('header');
		$this->load->view('our-services');
		$this->load->view('footer');
	}

	public function result_view(){
		$this->load->view('header');
		$this->load->view('result');
		$this->load->view('footer');
	}
	//Function For Running Views In Web End HEre
}
