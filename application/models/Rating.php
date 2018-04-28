<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Rating extends CI_Model {
          public function __construct()	{
              $this->load->database();
          }

          public function getRatings($debateId)
          {
                  $condition = array(
                    'DebateId' => $debateId
                  );
                  $this->db->where($condition);
                  $this->db->from('rating');
                  $query = $this->db->get();

                  $result = $query->result_array();
                  return $result;
          }

          public function addRating($rate,$debateId,$userId)
          {
                  $data = array(
                    'DebateId' => $debateId,
                    'UserId' => $userId,
                    'Vote' => $rate
                  );

                  $this->db->insert('rating', $data);

          }


  }
