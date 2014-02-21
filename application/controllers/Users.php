<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public $query;
	function __construct(){
		
		parent::__construct();
		
		//load model
		

		$this->load->database();
		

	}
	
	
	 public function list_user()
	{
		//$query = $this->db->query('SELECT * FROM  actor WHERE fullname="GUINESS PENELOPE";');
		
		//active record 
		$this->db->select('actor_id,fullname');
		//active record 
		//$this->db->where('actor_id = 3');
		//active record 
		$query = $this->db->get('actor');
		
		$this->load->view('list_user');
		//EN CAS DE QUE NO HI HA CAP REGISTRE AMB LA QUERY UTILITZADA
		// AQUEST IF FARA LA SEVA COMETUDA.
		if($query->num_rows()>0){
			foreach ($query->result_array() as $row)
			{
				echo $row['actor_id'];
				echo "------";
				echo $row['fullname'];
				echo "<br>";
			}
		}
		else { echo "No hi han resultats";}
	}

	public function create()
	{
		//$this->load->view('/var/www/grocery');
	}	

	public function update($id)
	{

 		$data = array(
             
               'fullname' => 'JOAN PANISELLO',
               'last_update' => '2099-04-24 19:27:25'
        );

		$this->db->where('actor_id', $id);
		$this->db->update('actor', $data); 
		
	}
}


