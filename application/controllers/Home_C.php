<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_C extends CI_Controller {
	public function view($page ='beranda')
	{
		$this->load->view('home/header');
		$this->load->view('home/menu');
		$this->load->view('home/'.$page);
		$this->load->view('home/footer');
	}
	public function register_user(){
		$this->load->libraries('form_validation');
		$this->form_validation->set_rules('r_username','Username','trim|required|xss_cean');
		$this->form_validation->set_rules('r_password','Password','trim|required|min_length[8]|matches[password_conf]|xss_cean');
		$this->form_validation->set_rules('password_conf','Confirmed Password','trim|required|min_length[8]|xss_cean');

	}
}

