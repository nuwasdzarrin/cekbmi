<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_users');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function do_login()
	{
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		if($this->form_validation->run() == FALSE) {
			redirect (site_url('login'));
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->simple_login->login($email,$password);
		}
	}

	public function register()
	{
		$this->load->view('v_register');
	}

	public function do_register()
	{
		$this->form_validation->set_rules('username','USERNAME','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		if($this->form_validation->run() == FALSE) {
			redirect(site_url('login/register'));
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			$this->M_users->saveUser($data);
			$this->session->set_flashdata('sukses','Registrasi berhasil, silahkan login dengan email anda');
			redirect(site_url('login'));
		}
	}

	public function logout()
	{
		$this->simple_login->logout();
	}
}
