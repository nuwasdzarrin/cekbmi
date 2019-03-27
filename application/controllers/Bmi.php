<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('M_bmi');
	}

	public function index()
	{
		$this->load->view('v_input_bmi');
    }
    
    public function result()
    {
        $this->simple_login->cek_login();
        $id = $this->session->userdata('user_id');
        $data['history'] = $this->M_bmi->getAll($id);
        $data['latest'] = $this->M_bmi->getLatest($id);
        $data['hit'] = $this->M_bmi->hitung($id);
        $this->load->view('v_result_bmi', $data);
    }

    public function counting()
    {
        $this->simple_login->cek_login();
        $weight = $this->input->post('weight');
        $height = $this->input->post('height');
        $tinggi = $height/100; 
        $bmi = round ($weight / ($tinggi*$tinggi), 2); //pembulatan 2 angka belakang koma
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'weight' => $weight,
            'height' => $height,
            'bmi' => $bmi
        );
        $this->M_bmi->saveBmi($data);
        redirect (site_url('bmi/result'));
    }
}
