<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class classe extends CI_Controller {

public function funcio()
	{
		$data = array(
			'title' => 'My title',
			'heading' => 'My heading',
			'message' => 'My message'
		);
		
		
		$this->load->view('vista',$data);
	}
	
}
?>
