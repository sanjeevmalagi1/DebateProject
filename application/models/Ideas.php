<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Ideas extends CI_Model {
          public function __construct()	{
              $this->load->database();
          }

          public function getAllIdeas()
          {
                  $query = $this->db->get('ideas');
                  $result = $query->result_array();
                  return $result;
          }

          public function getIdea($ID)
          {
                  $condition = array(
                    'ID' => $ID
                  );
                  $this->db->where($condition);

                  $query = $this->db->get('ideas');
                  $result = $query->row_array();
                  return $result;
          }

          public function addIdea($heading,$description,$lat,$lan,$userId)
          {
                  $data = array(
                    'Heading' => $heading,
                    'Description' => $description,
                    'Lat' => $lat,
                    'Lan' => $lan,
                    'UserId' => $userId
                  );

                  $this->db->insert('ideas', $data);
          }


  }
