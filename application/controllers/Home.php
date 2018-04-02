<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('containers/mainpage');
	}

	public function debate()
	{
		$this->load->view('DebatePage/index');
	}

	public function debates()
	{
		$this->load->view('DebatesPage/index');
	}



}
