<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
				$this->load->library('session');
	      $this->load->model('debate');
				$this->load->model('comment');
				$this->load->model('ideas');
				$this->load->model('submissions');
				$this->load->helper('url');
  }

	public function index()
	{
		if($this->session->UserType != "Admin"){
					redirect('/', 'refresh');
		}
    $this->load->view('Admin/Dashboard/index');
	}

	public function login()
	{
		if($this->session->UserType != "Admin"){
			redirect('/', 'refresh');
		}
    $this->load->view('Admin/Dashboard/index');
	}

  public function ManageDebates()
	{
		if($this->session->UserType != "Admin"){
			redirect('/', 'refresh');
		}
		$result['debates'] = $this->debate->getAllDebates();
    $this->load->view('Admin/ManageDebates/index',$result);
	}

	public function AddDebate()
	{
		if($this->session->UserType != "Admin"){
			redirect('/', 'refresh');
		}
		
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
				$this->load->view('Admin/AddDebate/index');
		}
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$title = $this->input->post('title');
			$description = $this->input->post('description');

			$this->debate->addDebate($title,$description);
			redirect('/Admin/ManageDebates/', 'refresh');
		}

	}

	public function EditDebate($debateId)
	{
		if($this->session->UserType != "Admin"){
			redirect('/', 'refresh');
		}
		
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
				$data['debate'] = $this->debate->getDebate($debateId);
				$this->load->view('Admin/EditDebate/index',$data);
		}
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$result = $this->input->post('result');

			$this->debate->editDebate($debateId,$title,$description,$result);
			redirect('/Admin/ManageDebates/', 'refresh');
		}

	}

  public function IdeasList()
	{
		if($this->session->UserType != "Admin"){
			redirect('/', 'refresh');
		}
		
		$data['ideas'] = $this->ideas->getAllIdeas();
    $this->load->view('Admin/IdeasHub/index',$data);
	}

  public function HelpBoxList()
	{
		if($this->session->UserType != "Admin"){
			redirect('/', 'refresh');
		}
		
		$data['submissions'] = $this->submissions->getAllSubmissions();
    $this->load->view('Admin/HelpBoxList/index',$data);
	}


}
