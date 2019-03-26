<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_users extends CI_Model{

      function saveUser($data)
      {
        $this->db->insert('users',$data);
      }
  }