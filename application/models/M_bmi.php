<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_bmi extends CI_Model{

      function getAll($params)
       {
        return $this->db->select('*')->from('bmi_history')
        ->where('user_id',$params)->order_by('id','desc')
        ->get()->result();
       }

       function getLatest($params)
       {
            return $this->db->select('*')->from('bmi_history')
            ->where('user_id',$params)->order_by('id','desc')
            ->limit(1)->get()->row();
       }

       function hitung($params)
       {
            return $this->db->select('*')->from('bmi_history')
            ->where('user_id',$params)->count_all_results();
       }
       
      function saveBmi($data)
      {
        $this->db->insert('bmi_history',$data);
      }
  }