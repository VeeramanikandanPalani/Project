<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url'); 
		$this->load->library('form_validation');
	}
	public function index()
	{		
		$this->load->view('home_page');
	}
	public function login(){

		$this->form_validation->set_rules('user_id','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == TRUE){
			$logged_user = array(
				'username'  => $this->input->post('user_id'),				
				'logged_in' => TRUE
			);		
			$this->session->set_userdata($logged_user);
			redirect('home/index');
		} else {
			$this->session->set_flashdata('login_failed','Entered Username Or Password Incorrect');
			redirect('home/index');
		}
	}
	public function logout() {
		$this->session->unset_userdata('username');
		redirect('home/index');
	}
	public function register(){
		$this->load->view('register');
	}
}
