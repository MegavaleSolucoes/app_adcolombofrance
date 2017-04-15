<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_CONTROLLER{

	public function index()
	{
		$dados['title'] = 'Principal - Adcolombo en France';
		$this->load->view('Principal', $dados);
	}

}