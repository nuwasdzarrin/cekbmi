<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Simple_login {

     // SET SUPER GLOBAL
   var $CI = NULL;

     public function __construct() {
       $this->CI =& get_instance();
     }

     /*
     * cek username dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($email, $password) {

         //cek username dan password
       $query = $this->CI->db->get_where('users',array('email'=>$email,'password' => md5($password)));

       if($query->num_rows() == 1) {
             
         $data = $query->row();
         $id = $data->user_id;
         $username = $data->username;
         $email = $data->email;
         
             //set session user
         $this->CI->session->set_userdata('user_id', $id);
         $this->CI->session->set_userdata('username', $username);
         $this->CI->session->set_userdata('email', $email);
         $this->CI->session->set_userdata('id_login', uniqid(rand()));
             
         redirect(site_url('bmi'));
       }else{
            $this->CI->session->set_flashdata('sukses','Username atau password anda salah.. ');
            redirect(site_url('login'));
       }
     }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {

         //cek session username
       if($this->CI->session->userdata('id_login') == '') {

             //set notifikasi
         $this->CI->session->set_flashdata('sukses','Anda belum login');

             //alihkan ke halaman login
         redirect(site_url('login'));
       }
     }

     public function cek_logout() {

         //cek session username
       if($this->CI->session->userdata('id_login') != '') {

             //set notifikasi
         $this->CI->session->set_flashdata('sukses','Anda sudah login');

             //alihkan ke halaman login
         redirect(site_url('alldata'));
       }
     }
     
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
       $this->CI->session->unset_userdata('username');
       $this->CI->session->unset_userdata('id_login');
       $this->CI->session->unset_userdata('email');
       $this->CI->session->unset_userdata('user_id');
       $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
       redirect(site_url());
     }
   }