<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Debate extends CI_Model {
          public function __construct()	{
              $this->load->database();
          }

          public function getAllDebates()
          {
                  $query = $this->db->get('debate');
                  $result = $query->result_array();
                  return $result;
          }

          public function getDebate($ID)
          {
                  $condition = array(
                    'ID' => $ID
                  );
                  $this->db->where($condition);

                  $query = $this->db->get('debate');
                  $result = $query->row_array();
                  return $result;
          }

          public function addDebate($title,$description)
          {
                  $data = array(
                    'Title' => $title,
                    'Description' => $description
                  );

                  $this->db->insert('debate', $data);
          }

          public function editDebate($debateId,$title,$description,$result="")
          {
                  $data = array(
                    'Title' => $title,
                    'Description' => $description,
                    'Result' => $result
                  );

                  $this->db->set($data);
                  $this->db->where('ID', $debateId);
                  $this->db->update('debate');
          }

  }
