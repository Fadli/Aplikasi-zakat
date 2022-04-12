<?php
class Model_master extends CI_Model{
     

	function all()
    {
    	$data=$this->db->query("SELECT * FROM tbl_baz")->result();
        return $data;
    }

    function baz_detail($url)
    {
    	$data=$this->db->query("SELECT * FROM tbl_baz where url='".$url."'")->row();
        return $data;
    }

    function total($url)
    {
        //$data=$this->db->query("SELECT * FROM data_warga where kode_kluster='".$kode."' AND no_kk='".$no_kk."'");
        return 0;
    }

    function muzaki($url)
    {
        //$data=$this->db->query("SELECT * FROM data_pekerja where kode_kluster='".$kode."'");
        return 0;
    }

    function show_bank($id)
    {
        $data=$this->db->query("SELECT * FROM tbl_bank where id_baz='".$id."'")->result();
        return $data;
    }

    function total_zakat($id)
    {
        $data=$this->db->query("SELECT SUM(amount) as amount FROM tbl_payment where id_baz='".$id."'")->row();
        return $data->amount;
    }

    function total_muzaki($id)
    {
        $data=$this->db->query("SELECT count(id) as id FROM tbl_payment where id_baz='".$id."'")->row();
        return $data->id;
    }
}