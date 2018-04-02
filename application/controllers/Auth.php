<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('LogIn/index');
	}

	public function signup()
	{
		$this->load->view('SignUp/index');
	}



}
