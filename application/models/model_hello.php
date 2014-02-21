<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_hello extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    function hello(){
    return "Hola que tal astas";
	}
}