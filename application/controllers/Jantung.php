<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jantung extends CI_Controller {

	public function index()
	{
		$this->load->view('v_input_jantung');
    }
    
    public function process()
    {
        $this->load->view('v_process_jantung');
    }

    public function result()
    {
        $this->load->view('v_result_jantung');
    }
}
