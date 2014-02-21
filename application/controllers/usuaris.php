<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuaris extends CI_Controller {

	public function __construct() {
		// Call the Model constructor
        parent::__construct();
       $this->load->database();

   	}

	public function crear()
	{
		$this->load->view('crear_usuari');
	}
	
	public function modificar($id)
	{
		$data = array('ID'=> $id);
		$this->load->view('modificar_usuari', $data);
		
	}


	public function llistar()
	{
		$this->load->model('users');

      // echo 'hola'; die();		                   //$data['list'] = $this->model_users->get_user();
		$data = $this->users->getusers();

       //echo '<pre>Hola'; print_r($data); die();
		$this->load->view('llistar',$data);
		/*foreach($data as $index=>$camp){
	
		$this->load->view('llistar',$camp);
		}*/
	}

	public function index()
	{
		$this->load->view('menu');
	}
	
	public function enviar()
	{
		$this->load->model('users');
		$data['registres']=$this->users->guardar();
		$this->load->view('rebut',$data);
		
	}

	public function adios()
	{
		$this->load->model('users');
		$data['registres']=$this->users->modificar();
		$this->load->view('rebut2',$data);
		
	}

	public function eliminare($id)
	{
		
		$this->load->model('users');
		$this->users->eliminar($id);
		$this->load->view('elimina_usuari2');
		
	}


	
	/*public function hello()
	{
		$this->load->model('Say_hello');

 		$data['hola'] = $this->Say_hello->hola();

 		echo '<pre>Hola'; print_r($data); die();

		$this->load->view('blog', $data);
	}*/
	

	
	
}
