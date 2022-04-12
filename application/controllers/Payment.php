<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Baz_model');
    }

	public function baz()
	{
		$url				= 'baztim';
		$phone				= $this->uri->segment(4);
		$ids				= $this->Baz_model->baz_detail($url);
		$id 		    	= $ids->id;
		$data['baz'] 		= $this->Baz_model->baz_detail($url);
		$data['payment'] 	= $this->Baz_model->baz_detail_payment($id,$phone);

		$data['muzaki'] 	= $this->Baz_model->baz_muzaki($id);
		$data['zakat'] 		= $this->Baz_model->zakat($id);
		$data['infaq'] 		= $this->Baz_model->infaq($id);
		$data['sedekah'] 	= $this->Baz_model->sedekah($id);

		$this->load->view('front/detail_payment',$data);
	}
	
}
