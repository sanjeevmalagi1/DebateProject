<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Submissions extends CI_Model {
          public function __construct()	{
              $this->load->database();
          }

          public function getAllSubmissions()
          {
                $query = $this->db->get('submissions');
                $result = $query->result_array();
                return $result;
          }

          public function insertSubmission($data)
          {
                $this->db->insert('submissions', $data);
          }


  }
