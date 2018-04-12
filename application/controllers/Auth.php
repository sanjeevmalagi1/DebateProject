<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
        parent::__construct();
				$this->load->library('session');
	      $this->load->model('user');
				$this->load->helper('url');
  }

	public function login()
	{

		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
				if($this->session->UserName){
					redirect('/', 'refresh');
				}
				else{
					$this->load->view('LogIn/index');
				}

		}

		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			$hashedPassword = md5($password);

			$result = $this->user->login($username,$hashedPassword);

			if($result){
        		$this->session->set_userdata($result);
				redirect('/', 'refresh');
			}

		}

	}

	public function signup()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
				$this->load->view('SignUp/index');
		}

		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$hashedPassword = md5($password);
			$usertype = $this->input->post("usertype");

			$this->user->signup($username,$hashedPassword,$usertype);
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}


}
