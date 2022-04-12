<?php
class Front_model extends CI_Model{
     
    function muzaki()
    {
        $data=$this->db->query("SELECT count(id) as jumlah  FROM tbl_payment")->row();
        return $data->jumlah;
    }
    function zakat()
    {
        $data=$this->db->query("SELECT sum(amount) as amount FROM tbl_payment where id_category=1")->row();
        return $data->amount;
    }
    function infaq()
    {
        $data=$this->db->query("SELECT sum(amount) as amount FROM tbl_payment where id_category=2")->row();
        return $data->amount;
    }
    function sedekah()
    {
        $data=$this->db->query("SELECT sum(amount) as amount FROM tbl_payment where id_category=3")->row();
        return $data->amount;
    }
}