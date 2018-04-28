<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ratings extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
        $this->load->model('rating');

    }

	public function submit()
	{

		if($_SERVER['REQUEST_METHOD'] === 'POST' && $this->session->ID){
			$rate = $this->input->post("rate");
			$debateId = $this->input->post("debateId");
            $userId = $this->session->ID;
            $this->rating->addRating($rate,$debateId,$userId);
		}

	}

}
