<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_CONTROLLER{

	public function index()
	{
		$this->load->view('Principal');
	}

}