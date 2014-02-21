<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_User extends CI_Model{




    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function getUser(){
                
                $query=$this->db->get('City');
                
                return $query;
        }

        function insertUser(){
        $data = array(
        'ID' => $_POST['ID'],
        'Name'=> $_POST['Name'],
        'CountryCode'=> $_POST['CountryCode'],
		'District'=> $_POST['District'],
		'Population'=> $_POST['Population']);
       		$this->db->insert('City', $data);
        }
}

?>