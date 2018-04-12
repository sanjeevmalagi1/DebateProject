<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpBox extends CI_Controller {
	function __construct() {
        parent::__construct();
				$this->load->model('submissions');
				$this->load->helper('url');
  }

	public function index()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			print_r($this->input->post());
			$data = $this->input->post();
			$this->submissions->insertSubmission($data);
			redirect('/', 'refresh');
		}

		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$this->load->view('HelpBox/index');
		}

	}

}
