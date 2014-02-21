<?php   
  class Users_model extends CI_Model  
  {     
    function getuser($id)     
    {       
      $result = $this->db->get_where('usuaris', array('id' => $id));
      return $result->row();
    }
  }
?>