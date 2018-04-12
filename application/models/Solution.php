<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Solution extends CI_Model {
          public function __construct()	{
              $this->load->database();
          }

          public function getSolutionsOfIdea($ideaId)
          {
                  $condition = array(
                    'IdeaId' => $ideaId
                  );
                  $this->db->where($condition);
                  $this->db->from('solution');
                  $this->db->join('user', 'user.ID = solution.UserId');
                  $query = $this->db->get();

                  $result = $query->result_array();
                  return $result;
          }

          public function insertSolution($ideaId,$heading,$message,$userId)
          {
                  $data = array(
                    'IdeaId' => $ideaId,
                    'Heading' => $heading,
                    'Description' => $message,
                    'UserId' => $userId
                  );

                  $this->db->insert('solution', $data);

          }


  }
