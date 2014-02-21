<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class config extends CI_Controller {




	public function canviar_pas()
	{
		$this->load->view('canviar_pas');
		
	}
	
	public function sortir()
	{
		$this->load->view('sortir');
	}




}


