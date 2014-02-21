<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->database();
	   // $this->load->model('Model_hello');
		$this->load->model('model_user');
	}
	public function saveusers(){
		//this->load->model('insertUser');
		//$data=this->model_user->insertuser();
		 $data ['algo'] = $this->model_user->insertUser();
		 $this->load->view('userok', $data);
	}
	public function createusers(){
       	
       // return $this->db->insert('City', $data);
        $this->load->view('createusers');
	}

	public function deleteusers(/*$id*/) {
		$this->load->view('deleteusers');
	}
	public function modifyusers(/*$id*/){
		$this->load->view('modifyusers');
	}

	public function listusers(){
		 $users ['query'] = $this->model_user->getUser();
               
	  //  $data['hello'] = $this->Model_hello->hello();
		$this->load->view('listusers', $users/*,$data*/);

		//$query = $this->db->get_where('world', array('ID' => $id), $limit, $offset);

		













		/*$persona = new stdClass;
		$persona->id = 1;
		$persona->Nom = "Albert Canelles Panisello";
		$persona->Email = "albertcanelles@iesebre.com";
		$persona->DataNaixement = 19/03/1993;
		$peronsa->Baneijat = "Si";

		$array = array(
			"id" => 1,
			"Nom" => "Albert Canelles Panisello",
			"Email" => "albertcanellesiesebre.com",
			"DataNaixement" => 19/03/1993,
			"Baneijat" => "Si"
			);
		$persona = (object) $array;*/

		/*$data = array(
 			'ID' => '5038',
 			'Name' => 'Mi nombre' ,
 			'CountryCode' => 'ACP',
 			'District' => 'Maricon',
 			'Population' => '6666666');

		$this->db->insert('City', $data); 
		$query = $this->db->get('City');
		$this->db->insert_id();*/

		/*$data = array(
 			'ID' => 5038,
 			'Name' => 'Mi nombre' ,
 			'CountryCode' => 'ACP',
 			'District' => 'Maricon',
 			'Population' => 6666666);

		$ID= 5038;
		$ID1= 5039;
		$this->db->where('ID', $ID1);
		$this->db->update('City', $data); */

		//$this->db->affected_rows();
		
		/*if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
		{

			echo $row->ID;
			echo $row->Name;
				}         
			}	*/
		
		}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


