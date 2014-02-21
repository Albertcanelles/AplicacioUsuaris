<?php      
  class Json_usuaris extends CI_Controller      
  {          

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function index($id)          
    {                 
       $this->load->model('users_model', 'users');
       $data['json'] = $this->users->get($id);
       if (!$data['json']) show_404();
 
       $this->load->view('Json_usuaris', $data);
    }
  }
?>


