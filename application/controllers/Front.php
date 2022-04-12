<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Front_model');
        $this->load->model('Model_master');
    }

	public function index()
	{
		$data['baz'] = $this->Model_master->all();
		$data['zakat'] = $this->Front_model->zakat();
		$data['infaq'] = $this->Front_model->infaq();
		$data['sedekah'] = $this->Front_model->sedekah();
		$data['muzaki'] = $this->Front_model->muzaki();

		$this->load->view('front/index',$data);
	}

	public function calculator()
	{
		$this->load->view('front/calculator');
	}

	public function notification()
	{
		$this->load->view('front/notification');
	}

	function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
