<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Model {
          public function __construct()	{
              $this->load->database();
          }

          public function login($username,$password)
          {
                  $condition = array(
                    'UserName' => $username,
                    'Password' => $password
                  );
                  $this->db->where($condition);

                  $query = $this->db->get('user');
                  $result = $query->row_array();

                  return $result;
          }

          public function signup($username,$password,$usertype)
          {
                  $this->UserName = $username;
                  $this->Password = $password;
                  $this->UserType = $usertype;

                  $this->db->insert('user', $this);

                  return $this->db->error();;
          }
  }
