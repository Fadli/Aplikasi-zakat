<?php
Class Model_user extends CI_Model
{
 function login($username, $password)
 {
   $this->db->from('tbl_member');
   $this->db->where('email', $username);
   $this->db->where('password', MD5($password));
   $this->db->where('status', 1);
   $this->db->limit(1);

   $query = $this->db->get();

   if($query->num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>