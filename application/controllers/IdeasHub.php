<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IdeasHub extends CI_Controller {

	function __construct() {
        parent::__construct();
				$this->load->library('session');
				$this->load->model('ideas');
				$this->load->model('solution');
				$this->load->helper('url');
  }

	public function index()
	{
		$result['ideas'] = $this->ideas->getAllIdeas();
		$this->load->view('IdeasHub/index',$result);
	}

	public function ViewIdea($ideaId)
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$heading = $this->input->post("heading");
			$description = $this->input->post("message");
			$userId = $this->session->ID;

			$this->solution->insertSolution($ideaId,$heading,$description,$userId);
			redirect('/IdeasHub/ViewIdea/'.$ideaId, 'refresh');
		}

		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$result['idea'] = $this->ideas->getIdea($ideaId);
			$result['solutions'] = $this->solution->getSolutionsOfIdea($ideaId);
			
			$this->load->view('ViewIdea/index',$result);
		}
	
	}

  public function NewIdea()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$heading = $this->input->post("heading");
			$description = $this->input->post("description");
			$lat = $this->input->post("lat");
			$lng = $this->input->post("lng");
			$userId = $this->session->ID;

			$this->ideas->addIdea($heading,$description,$lat,$lng,$userId);
			redirect('/IdeasHub'.$ideaId, 'refresh');

		}

		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$this->load->view('NewIdea/index');
		}

		
	}

}
