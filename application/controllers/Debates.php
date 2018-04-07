<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debates extends CI_Controller {

  function __construct() {
        parent::__construct();
				$this->load->library('session');
	      $this->load->model('debate');
        $this->load->model('comment');
				$this->load->helper('url');
  }

	public function index()
	{
    $result['debates'] = $this->debate->getAllDebates();
		$this->load->view('DebatesPage/index',$result);
	}

	public function debate($debateId)
	{
    $result['debate'] = $this->debate->getDebate($debateId);
    $result['comments'] = $this->comment->getCommentsOfDebate($debateId);
    $this->load->view('DebatePage/index',$result);
	}

  public function ProComment($debateId)
	{
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$heading = $this->input->post("heading");
			$message = $this->input->post("message");
      $type = 'PRO';
      $userId = $this->session->ID;

      $this->comment->insertComment($debateId,$heading,$message,$type,$userId);
      redirect('/Debates/debate/'.$debateId.'#debate', 'refresh');

    }

	}

  public function AgainstComment($debateId)
	{
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$heading = $this->input->post("heading");
			$message = $this->input->post("message");
      $type = 'AGAINST';
      $userId = $this->session->ID;

      $this->comment->insertComment($debateId,$heading,$message,$type,$userId);
      redirect('/Debates/debate/'.$debateId.'#debate', 'refresh');

    }

	}



}
