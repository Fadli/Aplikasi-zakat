<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Model_user','',TRUE);
 }

 function index()
 {
      //This method will have the credentials validation
      $this->load->library('form_validation');

      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
    
       if($this->form_validation->run() == FALSE)
       {
            echo "failed";  
       }
       else
       {
            echo "success";
       }

 }


 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $password = $this->input->post('password');
   //query the database
   $result = $this->Model_user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'name' => $row->name,
         'email' => $row->email,
       );
       $this->session->set_userdata('logged_in', $sess_array);

     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>