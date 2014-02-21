<?php   
  class Json_client extends CI_Model  
  {   
    function get($user_id)     
    {       
      $result = $this->db->get_where('usuaris', array('id' => $user_id));
      return $result->row();
    }
  }
?>