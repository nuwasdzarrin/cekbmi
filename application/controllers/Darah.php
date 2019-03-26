<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darah extends CI_Controller {

	public function index()
	{
		$this->load->view('v_darah');
    }
    
    public function result()
    {
        $this->load->view('v_result_darah');
    }
}
