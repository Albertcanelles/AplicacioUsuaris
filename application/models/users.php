<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Model{




    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    function getusers()
    {
       
        $this->db->select('id,Nom,Cognom,Adreça,Ciutat,Pais,Telefon');
    	$query = $this->db->get('usuaris');

    	return $query->result_array();
	}


     function guardar()
    {
       $data = array(

        'Nom'=> $_POST['nom'],
        'Cognom'=> $_POST['cognom'],
        'Adreça'=> $_POST['adresa'],
        'Ciutat'=> $_POST['ciutat'],
        'Pais'=> $_POST['pais'],
        'Telefon'=> $_POST['telefon']
        

        ); 
       

       $prova = $this->db->insert('usuaris',$data);

     
    }


     function modificar()
    {
       $data = array(

        'Nom'=> $_POST['nom'],
        'Cognom'=> $_POST['cognom'],
        'Adreça'=> $_POST['adresa'],
        'Ciutat'=> $_POST['ciutat'],
        'Pais'=> $_POST['pais'],
        'Telefon'=> $_POST['telefon'],
        'id'=> $_POST['id']
        ); 


       $this->db->where('id', $_POST['id']);
       $this->db->update('usuaris', $data);
    }


     function eliminar($id)
    {
       
       $this->db->delete('usuaris', array('id' => $id)); 
    //   $this->db->delete('usuaris', array('id' => $id)); 

     
    }

}
