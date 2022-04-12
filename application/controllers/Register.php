<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Model_master');
    }

	public function index()
	{
		//$data['baz'] = $this->Model_master->all();
		$this->load->view('register');
	}

}
