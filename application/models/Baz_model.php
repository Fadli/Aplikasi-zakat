<?php
class Baz_model extends CI_Model{
     

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

    function view($id)
    {
        $data=$this->db->query("SELECT count(id) as id FROM tbl_visitor where id_baz='".$id."'")->row();
        return $data->id;
    }

    function zakat($id)
    {
        $data=$this->db->query("SELECT sum(amount) as amount FROM tbl_payment where id_baz='".$id."' AND id_category=1")->row();
        return $data->amount;
    }

    function infaq($id)
    {
        $data=$this->db->query("SELECT sum(amount) as amount FROM tbl_payment where id_baz='".$id."' AND id_category=2")->row();
        return $data->amount;
    }
    function sedekah($id)
    {
        $data=$this->db->query("SELECT sum(amount) as amount FROM tbl_payment where id_baz='".$id."' AND id_category=3")->row();
        return $data->amount;
    }

    function baz_muzaki($id)
    {
        $data=$this->db->query("SELECT tp.id, tp.id_baz, tp.name, tp.notes, tc.category_name,tp.amount, tp.status, tb.bank_name, tp.phone FROM tbl_payment as tp LEFT JOIN tbl_category tc ON tp.id_category = tc.id LEFT JOIN tbl_bank tb ON tp.id_bank = tb.id where tp.id_baz='".$id."' ")->result();
        return $data;
    }

    function baz_detail_payment($url,$phone)
    {
        $data=$this->db->query("SELECT tp.name,tc.category_name,tp.amount,tb.bank_name, tb.name, tb.number, tp.phone FROM tbl_payment as tp LEFT JOIN tbl_category tc ON tp.id_category = tc.id LEFT JOIN tbl_bank tb ON tp.id_bank = tb.id where tp.phone='".$phone."' order by tp.id DESC")->row();
        return $data;
    }

    function log($url,$id)
    {
        $date=date("Y-m-d h:m:s");
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data = array(
            'id_baz'        =>$id,
            'ip_address'    =>$this->getUserIP(),
            'date'          =>$date,
            'link'          =>$actual_link,
        );
        $this->db->insert('tbl_visitor', $data);
        $insert_id = $this->db->insert_id();
    }

    function getUserIP()
    {
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

        return $ip;
    }


}