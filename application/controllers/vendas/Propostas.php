<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propostas extends CI_Controller {

	function __construct(){
		parent::__construct ();
	}

	public function index(){
		$this->load->view('wire/vendas/propostas');
	}
}
