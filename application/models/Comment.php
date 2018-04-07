<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Comment extends CI_Model {
          public function __construct()	{
              $this->load->database();
          }

          public function getCommentsOfDebate($debateId)
          {
                  $condition = array(
                    'DebateId' => $debateId
                  );
                  $this->db->where($condition);
                  $this->db->from('comment');
                  $this->db->join('user', 'user.ID = comment.UserId');
                  $query = $this->db->get();

                  $result = $query->result_array();
                  return $result;
          }

          public function insertComment($debateId,$heading,$message,$type,$userId)
          {
                  $data = array(
                    'DebateId' => $debateId,
                    'Heading' => $heading,
                    'Body' => $message,
                    'Type' => $type,
                    'UserId' => $userId
                  );

                  $this->db->insert('comment', $data);

          }


  }
