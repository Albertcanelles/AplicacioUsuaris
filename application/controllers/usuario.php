<?php
  class Usuario extends CI_Controller      
  {          
    function __construct() {
      
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
    } 
    function getusers($id)          
    {                 
       $this->load->model('Users_model', 'user');
       $data['json'] = $this->user->getuser($id);
       $link = base_url();
       if (!$data['json']) show_404();
 
       $this->load->view('json_view', $data);
    }

    function showuser($id)
    {
      $this->load->model('Users_model', 'user');
       $data['json'] = $this->user->getuser($id);
       $link = base_url();
       if (!$data['json']) show_404();
 
       $this->load->view('profile', $data);
    }

  }
?>