<?php      
  class Json_client extends CI_Controller      
  {          

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function index($id)          
    {                 
       $this->load->view('Json_client');
    }
  }
?>


