<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baz extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Baz_model');
    }

    public function index()
    {
    	//$data['baz'] = $this->Baz_model->all();
    	//$this->load->view('front/baz',$data);
    	redirect('http://localhost/baztim/form');
    }

	public function form()
	{
		$url='baztim';
		$ids=$this->Baz_model->baz_detail($url);
		$id=$ids->id;
		$data['baz'] = $this->Baz_model->baz_detail($url);
		$data['bank'] = $this->Baz_model->show_bank($id);

		$data['muzaki'] = $this->Baz_model->total_muzaki($id);
		$data['total_zakat'] = $this->Baz_model->total_zakat($id);
		$data['view'] = $this->Baz_model->view($id);
		$this->Baz_model->log($url,$id);

        $this->load->view('front/detail_pptim',$data);
		
	}

	public function view()
	{
		$url='baztim';
		$ids=$this->Baz_model->baz_detail($url);
		$id=$ids->id;
		$data['baz'] = $this->Baz_model->baz_detail($url);
		$data['bank'] = $this->Baz_model->show_bank($id);

		$data['muzaki'] = $this->Baz_model->baz_muzaki($id);
		$data['zakat'] = $this->Baz_model->zakat($id);
		$data['infaq'] = $this->Baz_model->infaq($id);
		$data['sedekah'] = $this->Baz_model->sedekah($id);

		$this->load->view('front/detail_view',$data);
	}

	public function excel()
	{
		$url=$this->uri->segment(3);
		$ids=$this->Baz_model->baz_detail($url);
		$id=$ids->id;
		$data['baz'] = $this->Baz_model->baz_detail($url);
		$data['bank'] = $this->Baz_model->show_bank($id);

		$data['muzaki'] = $this->Baz_model->baz_muzaki($id);

		$this->load->view('front/detail_excel',$data);
	}

	public function submitzakat()
	{
		$data = array(
	        'id_baz' 		=>$this->input->post('id_baz'),
	        'id_category' 	=>$this->input->post('id_category'),
	        'id_bank'		=>$this->input->post('id_bank'),
	        'amount'		=>$this->input->post('amount'),
	        'title'			=>$this->input->post('title'),
	        'name'			=>$this->input->post('name'),
	        'phone'			=>$this->input->post('phone'),
	        'email'			=>$this->input->post('email'),
	        'address'		=>'',
	        'status'		=>0
		);
		$this->db->insert('tbl_payment', $data);
		$insert_id = $this->db->insert_id();

		if($insert_id>0)
		{
			echo json_encode($data);
		}
		//redirect('link/'.$this->input->post('url').'/'.$this->input->post('phone').'/'.$insert_id);
	}

	public function submit_baztim()
	{
		if($this->input->post('zakat')!=0)
		{
			$data = array(
		        'id_baz' 		=>$this->input->post('id_baz'),
		        'id_category' 	=>1,
		        'id_bank'		=>$this->input->post('id_bank'),
		        'amount'		=>$this->input->post('zakat'),
		        'title'			=>$this->input->post('title'),
		        'name'			=>$this->input->post('name'),
		        'phone'			=>$this->input->post('phone'),
		        'email'			=>$this->input->post('email'),
		        'address'		=>'',
		        'status'		=>0
			);
			$this->db->insert('tbl_payment', $data);
		}
		if($this->input->post('infaq')!=0)
		{
			$data = array(
		        'id_baz' 		=>$this->input->post('id_baz'),
		        'id_category' 	=>2,
		        'id_bank'		=>$this->input->post('id_bank'),
		        'amount'		=>$this->input->post('infaq'),
		        'title'			=>$this->input->post('title'),
		        'name'			=>$this->input->post('name'),
		        'phone'			=>$this->input->post('phone'),
		        'email'			=>$this->input->post('email'),
		        'address'		=>'',
		        'status'		=>0
			);
			$this->db->insert('tbl_payment', $data);
		}
		if($this->input->post('sedekah')!=0)
		{
			$data = array(
		        'id_baz' 		=>$this->input->post('id_baz'),
		        'id_category' 	=>3,
		        'id_bank'		=>$this->input->post('id_bank'),
		        'amount'		=>$this->input->post('sedekah'),
		        'title'			=>$this->input->post('title'),
		        'name'			=>$this->input->post('name'),
		        'phone'			=>$this->input->post('phone'),
		        'email'			=>$this->input->post('email'),
		        'address'		=>'',
		        'status'		=>0
			);
			$this->db->insert('tbl_payment', $data);
		}

		$data = array(
		        'id_baz' 		=>$this->input->post('id_baz'),
		        'id_bank'		=>$this->input->post('id_bank'),
		        'amount'		=>$this->input->post('zakat')+$this->input->post('infaq')+$this->input->post('sedekah'),
		        'title'			=>$this->input->post('title'),
		        'name'			=>$this->input->post('name'),
		        'phone'			=>$this->input->post('phone'),
		        'email'			=>$this->input->post('email'),
		);
		echo json_encode($data);
	}

	public function submitkonfirmasi()
	{
		$data = array(
	        'status'		=> $this->input->post('status'),
	        'notes'			=> $this->input->post('note')
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_payment', $data);
		
		echo "success";
	}
}
